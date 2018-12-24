@extends('layouts.app')

@section('title', 'Thanks for your Feedback')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">
        <div class="container">

            <h1>Thanks</h1>

            <p>We'll try to address your feedback. If it was about a bug - please
            <script>
            <!--
                var firstPart = "feedback";
                var lastPart = "languagetool.org";
                document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "?subject=Uninstall feedback ({{Request::get('version')}})'>send us an email<" + "/a>");
            // -->
            </script>
            with more details. <b>We read and individually reply to every mail, often with a solution!</b></p>
            
            <p>You can always use LanguageTool <a href="/">on our homepage</a> without any installation.</p>
            
        </div>
    </div>
@endsection
