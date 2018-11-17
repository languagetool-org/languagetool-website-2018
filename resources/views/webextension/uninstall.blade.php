@extends('layouts.app')

@section('title', 'Uninstallation successful')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">
        <div class="container">

            <h1>Uninstallation successful</h1>

            @if(Request::get('version') && strpos(Request::get('version'), '2') === 0)

                <p>We’re sorry to see you’ve uninstalled our extension. It would be great if you told us the
                    reason for your decision, so that we can fix it and improve LanguageTool:</p>
    
                <form id="mainform" action="submit-feedback.php" method="get" onsubmit="return checkLength()">
                    <input id="version" name="version" type="hidden" value="{{Request::get('version')}}">
                    <input id="usageCounter" name="usageCounter" type="hidden" value="{{Request::get('usageCounter')}}">
                    <input id="lastUsedOn" name="lastUsedOn" type="hidden" value="{{Request::get('lastUsedOn')}}">
                    <input id="autoCheck" name="autoCheck" type="hidden" value="{{Request::get('autoCheck')}}">
                    
                    <?php
                    $data = array(
                            "site-fail" => "it did not work on a site I use",
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
                        <input type="text" name="otherDetail" id="otherDetail"><br>
                    <!--
                    <br>
                    <div style="width:500px">
                        <b>Your email: <input style="width:300px" type="text" name="email" placeholder="you@provider.org">
                    </div>
                    -->
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
