<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\Auth;
use App;
use Lang;
use Illuminate\Support\Facades\View;


class WelcomeController extends Controller
{
    public function index(Request $r, $locale = 'en')
    {
        /*if (isset($r->a)) {
            $minutes = 60 * 24 * 30 * 12;
            Cookie::queue(Cookie::make('affiliate', $r->a, $minutes));
            return redirect('/');
        }*/

        if (!View::exists('shared/qa.'.$locale)) {
            abort(404, 'Not found.');
        }
        
        App::setLocale($locale);
        
        $isShowHintbar = false;
        $defaultLang = $this->getDefaultLanguage($locale);
        $browserLang = $this->getBrowserLanguage();
        $browserLangShort = $this->getLanguageWithoutCountry($browserLang);
        if ($browserLangShort != 'en' && $browserLangShort != $locale && $browserLangShort != 'auto') {
            if ($locale != 'zh-CN-Hans') {  // doesn't work properly yet because zh != zh-CN-Hans
                $isShowHintbar = true;
            }
        }

        $langs = Lang::get('messages.langs');
        $reviews = Lang::get('messages.reviews');
        $AllMessages = Lang::get('messages');

        return view('welcome', [
            'languagesWithPage' => ['en', 'br', 'ca', /*'eo',*/ 'zh-CN-Hans', 'nl', 'es', 'fr', /*'gl',*/ 'de', 'it', 'pl', 'pt', 'ru', 'es', 'uk'],
            'AllMessages' => $AllMessages,
            'checkDefaultLang' => $defaultLang,
            'checkDefaultLangWithCountry' => $this->getDefaultLanguageAndCountry($locale),
            'checkDefaultText' => $this->getDefaultDemoText($defaultLang),
            'defaultDemoTextMappingForJavaScript' => $this->getDefaultDemoTextMappingForJavaScript(),
            'currentLang' => "en",
            'toggleFullscreenMode' => __('messages.fullscreen'),
            'isShowHintbar' => $isShowHintbar,
            'hintbarLang' => $this->getLanguageWithoutCountry($browserLang),
            'defaultLang' => $defaultLang,
            'selectedLang' => $locale,
            'langs' => $langs,
            'reviews' => $reviews['items'],
            'isLandingPage' => true,
            // the languages that appear in the dropdown:
            'checkLanguage' => [
                'auto' => __('messages.auto_detect'),
                'nl'  => __('messages.langs.nl'),
                'en-US'  => __('messages.langs.en'),
                'fr'  => __('messages.langs.fr'),
                'de-DE'  => __('messages.langs.de'),
                'it'  => __('messages.langs.it'),
                'pl'  => __('messages.langs.pl'),
                'pt'  => __('messages.langs.pt'),
                'ru'  => __('messages.langs.ru'),
                'es'  => __('messages.langs.es'),
                'uk'  => __('messages.langs.uk'),
                'ast' => __('messages.langs.ast'),
                'br'  => __('messages.langs.br'),
                'zh'  => __('messages.langs.zh-CN-Hans'),
                'eo'  => __('messages.langs.eo'),
                'gl'  => __('messages.langs.gl'),
                'el'  => __('messages.langs.el'),
                'ja'  => __('messages.langs.ja'),
                'ca'  => __('messages.langs.ca'),
                'km'  => __('messages.langs.km'),
                'fa'  => __('messages.langs.fa'),
                'ro'  => __('messages.langs.ro'),
                'sv'  => __('messages.langs.sv'),
                'sk'  => __('messages.langs.sk'),
                'sl'  => __('messages.langs.sl'),
                'ta'  => __('messages.langs.ta'),
                'tl'  => __('messages.langs.tl'),
                'be'  => __('messages.langs.be'),
            ]
        ]);
    }


    private function getDefaultDemoTexts()
    {
        $map['ast'] = "Apega testu equí. o revisa toes les pallabres de esti testu pa ver dalgún de los problemis que LanguageTool ye pa deteutar. ¿Afáyeste con los correutores gramaticales? Has date cuenta de que entá nun son perfeutos.";
        $map['en'] = "Paste your own text here and click the 'Check Text' button. Click the colored phrases for details on potential errors. or use this text too see an few of of the problems that LanguageTool can detecd. What do you thinks of grammar checkers? Please not that they are not perfect. Style issues get a blue marker: It's 5 P.M. in the afternoon. LanguageTool 3.8 was released on Thursday, 27 June 2017.";
        $map['br'] = "Lakait amañ ho testenn vrezhonek da vezañ gwiriet. Pe implijit an frazenn-mañ gant meur a fazioù yezhadurel.";
        $map['ca'] = "Introduïu açí el vostre text. o feu servir aquest texts com a a exemple per a alguns errades que LanguageTool hi pot detectat.";
        $map['zh'] = "将文本粘贴在此，或者检测以下文本：我和她去看了二部电影。";
        $map['eo'] = "Algluu vian kontrolendan tekston ĉi tie... Aŭ nur kontrolu ĉi tiun ekzemplon. Ĉu vi vi rimarkis, ke estas gramatikaj eraro en tiu frazo? Rimarku, ke Lingvoilo ankaux atentigas pri literumaj erraroj kiel ĉi-tiu.";
        $map['fa'] = "لطفا متن خود را اینجا قرار دهید . یا بررسی کنید که این متن را‌ برای دیدن بعضی بعضی از اشکال هایی که ابزار زبان توانسته تشخیس هدد. درباره ی نرم افزارهای بررسی کننده های گرامر چه فکر می کنید؟ لطفا در نظر داشته باشید که آن‌ها بی نقص نمی باشند.‎";
        $map['fr'] = "Copiez votre texte ici ou vérifiez cet exemple contenant plusieurs erreur que LanguageTool doit doit pouvoir detecter.";
        $map['de'] = "Fügen Sie hier Ihren Text ein. Klicken Sie nach der Prüfung auf die farbig unterlegten Textstellen. oder nutzen Sie diesen Text als Beispiel für ein Paar Fehler , die LanguageTool erkennen kann: Ihm wurde Angst und bange. Mögliche stilistische Probleme werden blau hervorgehoben: Das ist besser wie vor drei Jahren. Eine Rechtschreibprüfun findet findet übrigens auch statt. Donnerstag, den 27.06.2017 wurde LanguageTool 3.8 veröffentlicht.";
        $map['de-DE-x-simple-language'] = "Fügen Sie hier Ihren Text ein oder benutzen Sie diesen Text als Beispiel. Dieser Text wurde nur zum Testen geschrieben. Die Donaudampfschifffahrt darf da nicht fehlen. Und die Nutzung des Genitivs auch nicht.";
        $map['it'] = "Inserite qui il vostro testo... oppure controlate direttamente questo ed avrete un assaggio di quali errori possono essere identificati con LanguageTool.";
        $map['pl'] = "Wpisz tekst lub użyj istniejącego przykładu. To jest przykładowy tekst który pokazuje, jak jak działa LanguageTool. LanguageTool ma jusz korektor psowni, który wyrurznia bledy na czewrono.";
        $map['pt'] = "Cole aqui seu texto...ou verifique esta texto, afim de revelar alguns dos dos problemas que o LanguageTool consegue detectar. Isto tal vez permita corrigir os seus erro. Nós prometo ajudá-lo. para testar a grafia e as regrs do antigo) Acordo Ortográfico,, verifique o mesmo texto mesmo texto em Português de Angola ou Português do Moçambique e faça a analise dos resultados.. Nossa equipe anuncias a versão 4.1, que será lançada sexta-feira, 27 de março de 2018.";
        $map['ru'] = "Вставьте ваш текст сюда .. или проверьте этот текстт. Релиз LanguageTool 4.0 состоялся в четверг 29 декабря 2017 года.";
        $map['be'] = "Паспрабуйце напісаць нейкі тэкст з памылкамі, а LanguageTool паспрабуе паказаць нейкия найбольш распаусюджаныя памылки.";
        $map['da'] = "Indsæt din egen tekst her , eller brug denne tekst for at se nogle af de fejl LanguageTool fanger. vær opmærksom på at den langtfra er er perfect, men skal være en hjælp til at få standartfejl frem i lyset.";
        $map['el'] = "Επικολλήστε το κείμενο σας εδώ και κάντε κλικ στο κουμπί ελέγχου. Κάντε κλικ στις χρωματιστές φράσεις για λεπτομέρειες σχετικά με πιθανά σφάλματα. Για παράδειγμα σε αυτή τη πρόταση υπάρχουν εσκεμμένα λάθη για να να δείτε πώς λειτουργει το LanguageTool..";
        $map['es'] = "Escriba un texto aquí. LanguageTool le ayudará a afrentar algunas dificultades propias de la escritura. Se a hecho un esfuerzo para detectar errores tipográficos, ortograficos y incluso gramaticales. También algunos errores de estilo, a grosso modo.";
        $map['gl'] = "Esta vai a ser unha mostra de de exemplo para amosar  o funcionamento de LanguageTool.";
        $map['ja'] = "これわ文章を入力して'Check Text'をクリックすると、誤記を探すことができる。着色した文字をクリックすると、間違いの詳細の表示する。";
        $map['km'] = "ឃ្លា​នេះ​បង្ហាញ​ពី​ពី​កំហុស​វេយ្យាករណ៍ ដើម្បី​បញ្ជាក់​ពី​ប្រសិទ្ធភាព​របស់​កម្មវិធី LanguageTool សំរាប់​ភាសាខ្មែរ។";
        $map['nl'] = "Languagetool doet van zelfsprekend veel meer dan spellingcontrole. Het ziet het ook fouten die minder inde gaten lopen, die je zelf geen eens ziet. De meldingen komen uit regels die door vrijwilligers gemaakt zijn aan de hand van suggesties van gebruikers en tips van taaldeskundigen. Ondanks het feit dat er veel aandacht aan de regels wordt besteed, blijven suggesties altijd welkom. Probeer het rustig zelf eens uit hier, of download een van de plugins op deze pagina.";
        $map['sk'] = "Toto je ukážkový vstup, na predvedenie funkčnosti LanguageTool. Pamätajte si si, že neobsahuje \"kontrolu\" preklepo.";
        $map['sl'] = "Tukaj vnesite svoje besedilo... Pa poglejmo primer besedila s nekaj napakami ki jih lahko razpozna orodje LanguageTool; ko opazite napake, jih lahko enostavno popiravite. ( Obenem se izvrši tudi preverjanje črkovanja črkovanja.";
        $map['ta'] = "இந்த பெட்டியில் உங்கள் உரையை ஒட்டி சரிவர சோதிக்கிறதா என பாருங்கள். 'லேங்குவேஜ் டூல்' சில இலக்கணப் பிழைகளைச் சரியாக கண்டுபிடிக்கும். பல பிழைகளைப் பிடிக்க தடுமாறலாம்.";
        $map['tl'] = "Ang LanguageTool ay maganda gamit sa araw-araw. Ang talatang ito ay nagpapakita ng ng kakayahan ng LanguageTool at hinahalimbawa kung paano ito gamitin. Litaw rin sa talatang ito na may mga bagaybagay na hindii pa kayang itama nng LanguageTool.";
        $map['uk'] = "УВАГА! Внизу наведено приклад тексту з помилками, які допоможе виправити LanguageTool. Будь-ласка, вставте тутт ваш текст, або перевірте цей текст на предмет помилок. Знайти всі помилки для LanguageTool є не по силах з багатьох причин але дещо він вам все таки підкаже. Порівняно з засобами перевірки орфографії LanguageTool також змайде граматичні та стильові проблеми. LanguageTool — ваш самий кращий помічник.";
        if (!Auth::guest()) {
            // we can assume that registered users are not interested in the demo text: 
            $map['en'] = "";
            $map['de'] = "";
        }
        return $map;
    }

    private function getDefaultDemoText($lang)
    {
        $map = $this->getDefaultDemoTexts();
        if (isset($map[$lang])) {
            return $map[$lang];
        } else {
            return "";
        }
    }

    private function getDefaultDemoTextMappingForJavaScript()
    {
        $map = $this->getDefaultDemoTexts();
        $result = "var languageToText = [];\n";
        foreach ($map as $key => $value) {
            $result = $result . "languageToText['$key'] = '" . str_replace("'", "\'", $value) . "';\n";
        }
        return $result;
    }

    private function getDefaultLanguage($locale)
    {
        return $this->getLanguageWithoutCountry($this->getDefaultLanguageAndCountry($locale));
    }

    private function getDefaultLanguageAndCountry($locale)
    {
        if (isset($_COOKIE["lt-language"])) {
            return $_COOKIE["lt-language"];
        }
        return $locale;
    }

    private function getBrowserLanguage()
    {
        if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
            return $this->parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
        } else {
            return $this->parseDefaultLanguage(NULL);
        }
    }

    private function parseDefaultLanguage($http_accept, $deflang = "en")
    {
        if (isset($http_accept) && strlen($http_accept) > 1) {
            # Split possible languages into array
            $x = explode(",", $http_accept);
            foreach ($x as $val) {
                #check for q-value and create associative array. No q-value means 1 by rule
                if (preg_match("/(.*);q=([0-1]{0,1}\.\d{0,4})/i", $val, $matches))
                    $lang[$matches[1]] = (float)$matches[2];
                else
                    $lang[$val] = 1.0;
            }

            #return default language (highest q-value)
            $qval = 0.0;
            foreach ($lang as $key => $value) {
                if ($value > $qval) {
                    $qval = (float)$value;
                    $deflang = $key;
                }
            }
        }
        return strtolower($deflang);
    }

    private function getLanguageWithoutCountry($langCode)
    {
        return preg_replace("/-.*$/", "", $langCode);  // de-DE -> de
    }
}
