<?php

namespace App\Http\Controllers;

use App\ExampleError;
use App\Correction;
use App\FalseAlarm;
use App\IgnoreRule;
use App\IgnoreWord;
use App\ScrapedPage;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{

    // provide a token with a claim so the server will not apply the standard maximum text length limit
    private function getToken() {
        $user = Auth::user();
        return $this->getTokenFromUser($user);
    }

    // provide a token with a claim so the server will not apply the standard maximum text length limit
    private function getTokenFromUser($user) {
        if ($user->hasActivePremium()) {
            // activate premium features
            return JWTAuth::fromUser($user, ['uid' => $user->id, 'premium' => true, 'maxTextLength' => 40000]);
        } else {
            return JWTAuth::fromUser($user, ['uid' => $user->id, 'maxTextLength' => 2500]);
        }
    }

    public function token(Request $request) {
        $uname = $request->username;
        $password = $request->password;
        if ($uname && $password) {
            if (Auth::attempt(array('email' => $uname, 'password' => $password))){
                return $this->getToken();
            } else {
                return response("Wrong Credentials", 403);
            }
        } else if ($request->apiKey) {
            $user = User::where('api_key', $request->apiKey)->first();
            if ($user) {
                return $this->getTokenFromUser($user);
            } else {
                return response("Wrong API Key", 403);
            }
        } else if (Auth::guest()) {
            return "";
        } else {
            return $this->getToken();
        }
    }

    // Return both JWT token and ignore word list for currently logged in user
    public function userInfo() {
        if (Auth::guest()) {
            return "";
        } else {
            $ignoreWordsObj = IgnoreWord::all()->where('user_id', Auth::user()->id);
            $ignoreWords = array();
            foreach ($ignoreWordsObj as $item) {
                array_push($ignoreWords, $item->ignore_word);
            }
            $result['ignoredWords'] = $ignoreWords;
            $result['token'] = $this->getToken();
            return $result;
        }
    }

    // endpoint for the error collector add-on and languagetool.org
    public function submitErrorExample(Request $request) {
        header('Access-Control-Allow-Origin: *');
        $uname = $request->username;
        $password = $request->password;
        if ($uname && $password) {
            if (Auth::attempt(array('email' => $uname, 'password' => $password))){
                // submitted from the error collector add-on:
                $user = User::all()->where('email', $uname)->first();
                ExampleError::create([
                    'sentence'      => $request->sentence,
                    'correction'    => $request->correction,
                    'url'           => $this->truncate($request->url, 190),
                    'user_id'       => $user->id
                ]);
                return "OK";
            } else {
                return response("Wrong Credentials", 403);
            }
        } else if ($uname == "website" && !$password) {
            // submitted from languagetool.org:
            Correction::create([
                'sentence'        => isset($request->sentence) ? $request->sentence : "",
                'correction'      => isset($request->correction) ? $request->correction : "",
                'language'        => isset($request->lang) ? $request->lang : "",
                'accept_language' => isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : "",
                'rule_id'         => $request->ruleId,
                'suggestion_pos'  => isset($request->suggestionPos) ? $request->suggestionPos : null,
                'covered'         => isset($request->covered) && strlen($request->covered) < 255 ? $request->covered : null,
                'replacement'     => isset($request->replacement) && strlen($request->replacement) < 255 ? $request->replacement : null,
                'country'         => "",  // TODO
                'region'          => ""   // TODO
            ]);
            return "OK";
        } else {
            return response("Wrong Credentials", 403);
        }
    }

    function truncate($string, $length, $dots = "...") {
        return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
    }

    // endpoint for languagetool.org
    public function submitFalseAlarm(Request $request) {
        header('Access-Control-Allow-Origin: *');
        $uname = $request->username;
        $password = $request->password;
        if ($uname == "website" && !$password) {
            // submitted from languagetool.org:
            FalseAlarm::create([
                'sentence'        => $request->sentence,
                'covered_text'    => $request->coveredText,
                'language'        => isset($request->lang) ? $request->lang : "",
                'accept_language' => isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : "",
                'rule_id'         => $request->ruleId
            ]);
            return "OK";
        } else {
            return response("Wrong Credentials", 403);
        }
    }

    // endpoint for languagetool.org
    public function submitIgnoreRule(Request $request) {
        header('Access-Control-Allow-Origin: *');
        $uname = $request->username;
        $password = $request->password;
        if ($uname == "website" && !$password) {
            // submitted from languagetool.org:
            IgnoreRule::create([
                'sentence'        => $request->sentence,
                'covered_text'    => $request->coveredText,
                'language'        => isset($request->lang) ? $request->lang : "",
                'accept_language' => isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : "",
                'rule_id'         => $request->ruleId
            ]);
            return "OK";
        } else {
            return response("Wrong Credentials", 403);
        }
    }

    // endpoint for Scraping add-on:
    public function storeScrapedPage(Request $request) {
        header('Access-Control-Allow-Origin: *');
        if ($request->password == "835265") {
            ScrapedPage::where('url', $request->url)->delete();  // we don't need duplicates in the database
            ScrapedPage::create([
                'url'       => $request->url,
                'start_url' => $request->start_url,
                'title'     => $request->title,
                'html'      => isset($request->html) ? $request->html : null,
                'text'      => isset($request->text) ? $request->text : null
            ]);
            return "OK";
        } else {
            return response("Wrong Credentials", 403);
        }
    }

}
