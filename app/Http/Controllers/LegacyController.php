<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use Illuminate\Support\Facades\Log;

class LegacyController extends Controller
{

    public function privacy() { return view('privacy'); }
    public function legal() { return view('legal'); }
    public function terms() { return view('terms'); }
    public function languages() { return view('languages'); }
    public function issues() { return view('issues'); }
    public function compare() { return view('compare'); }
    public function support() { return view('support'); }
    public function team() { return view('team'); }
    public function development() { return view('development'); }
    public function newsletter() { return view('newsletter'); }

    public function newsletter_old() { return redirect('newsletter'); }
    public function privacy_old() { return redirect('legal/privacy'); }
    public function job_computational_linguist() { return view('job/computational_linguist'); }
    public function job_vertrieb() { return view('job/vertrieb'); }
    public function job_rule_dev() { return view('job/rule_developer'); }
    public function webextension_uninstall() { return view('webextension/uninstall'); }
    public function webextension_feedback(Request $req) {
        Log::info('Uninstall feedback: '.$req->reason.", version: ".$req->version.", last site: ".$req->lastUsedOn.
            ", usage counter: ".$req->usageCounter.", ua: ".$req->header('User-Agent').
            ", langs: ".$req->header('Accept-Language').", autoCheck: ".$req->autoCheck
        );
        if ($req->otherDetail) {
            Log::info('Other detail: '.$req->otherDetail);
        }
        if ($req->siteDetail) {
            Log::info('Site detail: '.$req->siteDetail);
        }
        if ($req->languageDetail) {
            Log::info('Language detail: '.$req->languageDetail);
        }
        return view('webextension/submit-feedback');
    }
    public function usage() { return redirect('http://wiki.languagetool.org/command-line-options'); }
    public function forum() { return redirect('https://forum.languagetool.org/'); }
    public function chrome() { return view('chrome'); }
    public function firefox() { return view('firefox'); }
    public function contribute() { return view('contribute'); }
    public function link() { return view('link'); }
    public function de_leichte_sprache() {
        return view('de/leichte_sprache', [
            'AllMessages' => Lang::get('messages')
        ]);
    }
    
    public function fakeerror() {
        throw new \Exception("test exception");
    }

    public function ru_firefox() { return view('ru/firefox'); }
    public function ru_chrome() { return view('ru/chrome'); }
    public function ru_issues() { return view('ru/issues'); }
    public function ru_news() { return view('ru/news'); }
}
