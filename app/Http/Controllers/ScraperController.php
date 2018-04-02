<?php

namespace App\Http\Controllers;

use App\ScrapedPage;
use App\ScrapedPagesCheck;
use Illuminate\Http\Request;

class ScraperController extends Controller
{

    private $ignoredRuleIds = array(
        'UPPERCASE_SENTENCE_START', 'WHITESPACE_RULE', 'FALSCHE_VERWENDUNG_DES_BINDESTRICHS',
        'TYPOGRAFISCHE_ANFUEHRUNGSZEICHEN', 'PUNKT_ENDE_ABSATZ',
    );

    public function index(Request $req) {
        // TODO: test auth
        if ($req->check) {
            $checked = ScrapedPage::where('url', 'like', $req->prefix . "%")->where('checked', true)->count();
            $notChecked = ScrapedPage::where('url', 'like', $req->prefix . "%")->where('checked', false)->count();
            $matches = ScrapedPage::where('url', 'like', $req->prefix . "%")->get();
            foreach ($matches as $m) {
                $this->check($m->text, $m->url);
                $urlToErrors[$m->url] = ScrapedPagesCheck::where('url', $m->url)->get();
                sleep(2);
            }
            return redirect("admin/scraper?prefix=".$req->prefix);
            // for debugging:
            //return view('admin/scraper', ['matches' => $matches, 'prefix' => $req->prefix, 'checked' => $checked, 'notChecked' => $notChecked]);
        } else if ($req->prefix) {
            $matches = ScrapedPage::where('url', 'like', $req->prefix . "%")->get();
            $urlToErrors = [];
            foreach ($matches as $m) {
                $checkResult = ScrapedPagesCheck::where('url', $m->url)->wherenotIn('rule_id', $this->ignoredRuleIds)->get();
                $urlToErrors[$m->url] = $checkResult;
            }
            return view('admin/scraper', ['matches' => $matches, 'prefix' => $req->prefix, 'urlToErrors' => $urlToErrors]);
        } else {
            return view('admin/scraper');
        }
    }

    private function check($text, $pageUrl) {
        $url = "https://languagetool.org/api/v2/check";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "language=auto&text=".urlencode($text));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $json = json_decode($response);
        ScrapedPagesCheck::where('url', $pageUrl)->delete();  // we don't need duplicates in the database
        foreach ($json->matches as $match) {
            //print $match->rule->id.",".$match->context->offset."<br>";
            ScrapedPagesCheck::create([
                'rule_id'     => $match->rule->id,
                'message'     => $match->message,
                'url'         => $pageUrl,
                'context'     => $match->context->text,
                'offset'      => $match->context->offset,
                'length'      => $match->context->length,
                'category'    => $match->rule->category->name,
                'suggestions' => join('; ', array_map(function($k) { return $k->value; }, $match->replacements)),
            ]);
            // TODO: update 'checked'
        }
    }
}
?>
