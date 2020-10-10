@extends('layouts.app')

@section('title', 'Job: Rule editor for English')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">

        <div class="container">

            <p><a href="/job">All Open Jobs</a></p>
            <p style="text-align: right">Date: 2020-10-09</p>
            
            <h1>Rule Developer for American English</h1>

            <!--
            <p style="background-color: rgba(255,227,57,0.6); padding: 5px">
                This position has been staffed.
                <a href="/job">Click here to see our latest job ads</a>
            </p>
            -->

            <p>LanguageTooler is the company behind <a href="https://languagetool.org">languagetool.org</a> and <a href="https://languagetoolplus.com">languagetoolplus.com</a>,
                popular spelling, grammar, and style checkers. We proofread more than 1,000,000 texts a day. We’re looking for a</p>

            <h2 style="text-align: center">Rule Editor for American English,<br>20 to 40 hours/week</h2>

            <p><b>Your tasks</b></p>

            <ul>
                <li>write new error detection rules for mistakes people make when writing English</li>
                <li>write new style suggestion rules to help people improve their writing</li>
                <li>test your new rules and existing ones, and improve them</li>
                <li>give your input to the English rule developer team from a North American linguistic and cultural perspective</li>
            </ul>

            <p><b>Requirements</b></p>

            <ul>
                <li>excellent command of American English (native speaker: US or Canada)</li>
                <li>willingness to learn the syntax and technology needed to write error detection rules</li>
                <li>excellent feeling for the finer points of language</li>
            </ul>

            <p><b>Why should you apply?</b></p>

            <ul>
                <li>set your own working hours</li>
                <li>work from home</li>
                <li>help improve software that is used by hundreds of thousands of people each day</li>
            </ul>

            <p>Interested? Please send your questions or your application to Udo Mai.

            <p><script type="text/javascript">
                <!--
                var firstPart = "udo.mai";
                var lastPart = "languagetoolplus.com";
                document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "?subject=rule editor application'>" + firstPart +"@"+ lastPart + "<" + "/a>");
                // -->
            </script><noscript>(please turn on Javascript to see the email address)</noscript><br>
            LanguageTooler GmbH<br>
            Karl-Liebknecht-Str. 21/22<br>
            14482 Potsdam, Germany
            
        </div>

    </div>
@endsection
