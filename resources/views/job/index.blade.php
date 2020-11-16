@extends('layouts.app')

@section('title', 'Jobs bei LanguageTool')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">

        <div class="container">

            <h1>Aktuelle Jobs bei LanguageTool</h1>

            <ul>
                <li><a href="/job/devops">DevOps Engineer (m/w/d)</a></li>
                <li><a href="/job/java-dev">Java-Entwickler (m/w/d)</a></li>
                <!--<li><a href="/job/rule-developer">Rule Developer for American English</a></li>-->
                <li><a href="/job/rule-developer-french">Développeur·euse de règles (français)</a></li>
            </ul>

        </div>

    </div>
@endsection
