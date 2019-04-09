@extends('layouts.app')
<?php
$LATEST_VERSION = "2.1.9";
?>

@section('title', 'Uninstallation successful')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">
        <div class="container">

            <h1>Uninstallation successful</h1>

            @if(Request::get('version') && strpos(Request::get('version'), '2') === 0)
            
                @if(version_compare(Request::get('version'), $LATEST_VERSION) < 0)
                
                    <div class="oldVersionWarning">
                        Oops, you've been using an old version. Chances are good your problem has already
                        been fixed in the latest version.
                        
                        @if(Request::header('User-Agent') && strpos(Request::header('User-Agent'), 'Firefox/') !== false)
                            <div class="reinstallButton"><a href="https://addons.mozilla.org/firefox/addon/languagetool/?src=uninstall-page">Install latest version on Firefox</a></div>
                        @elseif(Request::header('User-Agent') && strpos(Request::header('User-Agent'), 'Chrome/') !== false)
                            <div class="reinstallButton"><a href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/oldceeleldhonbafppcapldpdifcinji">Install latest version on Chrome</a></div>
                        @else
                            <div class="reinstallButton"><a href="https://addons.mozilla.org/firefox/addon/languagetool/?src=uninstall-page">Install latest version on Firefox</a></div>
                            <div class="reinstallButton"><a href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/oldceeleldhonbafppcapldpdifcinji">Install latest version on Chrome</a></div>
                        @endif
                    </div> 
                
                @else
                
                    <div class="oldVersionWarning">
                        Have you removed the LanguageTool add-on by accident?
    
                        @if(Request::header('User-Agent') && strpos(Request::header('User-Agent'), 'Firefox/') !== false)
                            <div class="reinstallButton"><a href="https://addons.mozilla.org/firefox/addon/languagetool/?src=uninstall-page">Re-install now</a></div>
                        @elseif(Request::header('User-Agent') && strpos(Request::header('User-Agent'), 'Chrome/') !== false)
                            <div class="reinstallButton"><a href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/oldceeleldhonbafppcapldpdifcinji">Re-install now</a></div>
                        @else
                            <div class="reinstallButton"><a href="https://addons.mozilla.org/firefox/addon/languagetool/?src=uninstall-page">Re-install on Firefox</a></div>
                            <div class="reinstallButton"><a href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/oldceeleldhonbafppcapldpdifcinji">Re-install on Chrome</a></div>
                        @endif
                    </div>
                
                @endif

                <p>We’re sorry to see you’ve uninstalled our extension. It would be great if you told us the
                    reason for your decision, so that we can fix it and improve LanguageTool:</p>
    
                <form id="mainform" action="submit-feedback.php" method="get" onsubmit="return checkLength()">
                    <input id="version" name="version" type="hidden" value="{{Request::get('version')}}">
                    <input id="usageCounter" name="usageCounter" type="hidden" value="{{Request::get('usageCounter')}}">
                    <input id="lastUsedOn" name="lastUsedOn" type="hidden" value="{{Request::get('lastUsedOn')}}">
                    <input id="autoCheck" name="autoCheck" type="hidden" value="{{Request::get('autoCheck')}}">

                    <label><input name="reason" value="default-option" type="radio"> please select below</label><br>
                    <label><input name="reason" value="site-fail" type="radio" onclick="document.getElementById('siteDetail').focus()"> it did not work on a site I use</label>:
                        <input style="width:250px" type="text" name="siteDetail" id="siteDetail" placeholder="please enter the website"><br>
                    <label><input name="reason" value="lang-not-supported" type="radio" onclick="document.getElementById('languageDetail').focus()"> a language important to me is not supported</label>:
                        <input type="text" name="languageDetail" id="languageDetail" placeholder="which language"><br>
                    <?php
                    $data = array(
                            //"site-fail" => "it did not work on a site I use",
                            "checking-too-slow" => "the checking is too slow",
                            "browser-slow-down" => "it slows down my browser",
                            "error-not-found" => "it did not find enough errors",
                            "did-not-understand" => "I could not understand how it works",
                            "too-many-false-alarms" => "found too many matches that are not really errors",
                    );
                    foreach ($data as $id => $text) {
                        print "<label><input name='reason' value='".$id."' type='radio'> $text</label><br>\n";
                    }
                    ?>
                    <label><input name="reason" value="other" type="radio" onclick="document.getElementById('otherDetail').focus()"> something else</label>:
                        <input style="width:250px" type="text" name="otherDetail" id="otherDetail"><br>
                    <!--
                    <br>
                    <div style="width:500px">
                        <b>Your email: <input style="width:300px" type="text" name="email" placeholder="you@provider.org">
                    </div>
                    -->
                    
                    <br>
                    <p>If you have found a bug, please describe it 
                    <script>
                    <!--
                        var firstPart = "feedback";
                        var lastPart = "languagetool.org";
                        document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "?subject=Uninstall feedback ({{Request::get('version')}})'>via email<" + "/a>");
                    // -->
                    </script>
                    or post it at <a target="_blank" href="https://forum.languagetool.org">our forum</a> or
                    <a target="_blank" href="https://github.com/languagetool-org/languagetool-browser-addon/issues">at github</a>.
                    </p>
                    
                    <input style="margin-top: 10px;margin-bottom: 15px" type="submit" value="Submit feedback">
                </form>

            @else

                <p>We’re sorry to see you’ve uninstalled our extension. You can always
                use LanguageTool <a href="/">on our homepage</a>.</p>

            @endif
            
        </div>
    </div>

    <script>
        function checkLength() {
            if (typeof(_paq) !== 'undefined') {
                // Piwik tracking
                _paq.push(['trackEvent', 'UninstallFeedback', document.querySelector('input[name="reason"]:checked').value]);
            }
            setTimeout(function() {
                document.getElementById("mainform").submit();
            }, 500);
            return false;
        }
    </script>
    
@endsection
