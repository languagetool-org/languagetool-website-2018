<?php

namespace App\Http\Controllers;

use App\NewSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{

    /**
     * A webhook called from FastSpring.
     */
    public function subscribeHook(Request $request) {
        Log::info('subscribeHook called: ' . $request->getContent());
        $json = json_decode($request->getContent());
        $email = $json->events[0]->data->customer->email;
        $product = $json->events[0]->data->items[0]->product;
        Log::info('subscribeHook data parsed, email/product: ' . $email ." / ". $product);
        // Yes, this will add yet another entry to the 'new_subscriptions' table, but it
        // seems some users don't regularly close the buy dialog or whatever, so the
        // '/subscribe?orderId=...' is not guaranteed to be called, so let's use the 
        // hook to make sure the user gets their premium access without manual intervention:
        $this->addNewSubscription($product, $email);
        // TODO: to be sure, we should maybe premium-activate the user with email $email here?
    }
    
    /**
     * User has just subscribed to premium.
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request) {
        $url = 'https://api.fastspring.com/orders/' . $request->orderId;
        Log::info('User subscribing to premium, order id: ' . $request->orderId . ', source: ' . $request->source . ', User-Agent: ' . $request->userAgent());
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, env('FASTSPRING_API_USER').":".env('FASTSPRING_API_PASSWORD'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "curl/7.52.1");  // will not work without!
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        if ($info["http_code"] == 200) {
            $json = json_decode($response);
            $jsonDataOkay = $this->checkJSON($json);
            $subscriptionMonths = 0;
            if ($jsonDataOkay) {
                $subscriptionMonths = $this->addNewSubscription($json->items[0]->product, $json->customer->email);
            }
            if (Auth::guest()) {
                Log::info('User not logged in, will only store subscription in new_subscriptions');
            } else {
                Log::info('User #'.Auth::user()->id.'/'.Auth::user()->email.' logged in already, activating premium account ('.$subscriptionMonths.' months)');
                $user = Auth::user();
                $user->has_premium = true;
                $user->premium_from = date("Y-m-d");
                $user->subscription_months = $subscriptionMonths;
                $user->save();
            }
            return view('subscription');
        } else {
            if (Auth::guest()) {
                Log::error('Subscription failed for guest user, code: '.$info["http_code"]);
            } else {
                Log::error('Subscription failed for user #'.Auth::user()->id.'/'.Auth::user()->email.', code: '.$info["http_code"]);
            }
            return "Sorry, something went wrong activating your subscription automatically (code: " . $info["http_code"] . "). 
                Please do not order again, but contact support@languagetoolplus.com and we'll manually activate 
                your account as soon as possible.";
        }
    }
    
    private function checkJSON($json) {
        if (!isset($json->items) || sizeof($json->items) == 0) {
            if (Auth::guest()) {
                Log::error('Subscription: JSON response contains no items (guest user), JSON: ' . json_encode($json));
            } else {
                Log::error('Subscription: JSON response contains no items, user id: ' . Auth::user()->id . ', JSON: ' . json_encode($json));
            }
            return false;  // not sure in which cases this happens...
        }
        return true;
    }

    // store in database so we can later auto-activate once user registers
    private function addNewSubscription($product, $email) {
        $subscriptionMonths = 0;
        if ($product == 'languagetool-plus-premium-monthly-subscription') {
            $subscriptionMonths = 1;
        } else if ($product == 'languagetool-plus-premium-3-month-subscription') {
            $subscriptionMonths = 3;
        } else if ($product == 'languagetool-plus-premium-1-year-subscription') {
            $subscriptionMonths = 12;
        } else {
            Log::error('Unknown product when activating subscription: '.$product);
        }
        NewSubscription::create([
            'email' => $email,
            'subscription_months' => $subscriptionMonths,
        ]);
        return $subscriptionMonths;
    }
}