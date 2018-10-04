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
                    <input id="version" name="version" type="hidden" value="">
                    <input id="usageCounter" name="usageCounter" type="hidden" value="-1">
    
                    <label><input name="reason" value="site-fail" type="radio" onclick="show('site-fail-detail', 'message1')"> it did not work on a site I use</label><br>
                    <label><input name="reason" value="checking-too-slow" type="radio"> the checking is too slow</label><br>
                    <label><input name="reason" value="browser-slow-down" type="radio" onclick="show('browser-slow-down-detail', 'message5')"> it slows down my browser</label><br>
                    <label><input name="reason" value="error-not-found" type="radio" onclick="show('error-not-found-detail', 'message2')"> it did not find enough errors</label><br>
                    <label><input name="reason" value="too-many-false-alarms" type="radio" onclick="track('too-many-false-alarms');show('too-many-false-alarms-detail', 'message3')"> found too many 'errors' that are not really errors</label><br>
                    <label><input name="reason" value="other" type="radio" onclick="track('other');"> something else</label><br>
                    <!--<label><input name="reason" value="something-else" type="radio" onclick="show('something-else-detail', 'message4')"> something else:</label><br>-->
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
        function show(id, messageFieldId) {
        }
    </script>
    
@endsection
