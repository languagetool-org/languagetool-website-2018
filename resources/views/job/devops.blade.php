@extends('layouts.app')

@section('title', 'Job: DevOps Engineer (m/w/d)')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">

        <div class="container">

            <p><a href="/job">Alle Stellenanzeigen</a></p>
            <p style="text-align: right">Datum: 19.07.2020</p>
            
            <h1>Stellenanzeige: DevOps Engineer (m/w/d)</h1>

            <!--
            <p style="background-color: rgba(255,227,57,0.6); padding: 5px">
                Diese Position ist bereits vergeben
            </p>-->

            <p>Die LanguageTooler GmbH ist die Firma hinter <a href="https://languagetool.org/">languagetool.org</a>,
                <a href="https://languagetoolplus.com">languagetoolplus.com</a> und
                <a href="https://openthesaurus.de">openthesaurus.de</a>. Auf unseren Websites und mit unseren Add-ons prüfen
                wir jeden Tag mehr als eine Million Texte vollautomatisch. Wir suchen einen</p>

            <h2 style="text-align: center">DevOps Engineer (m/w/d),<br>32-40 h/Woche</h2>

            <p><b>Deine Aufgaben</b></p>
            
            <p>Du arbeitest daran, LanguageTool zu erweitern und unsere HTTP-API stabil und performant zu betreiben:</p>

            <ul>
                <li>Du administrierst unsere über 50 Server und unsere Load Balancer (via Ansible)</li>
                <li>Du erweiterst das Monitoring unserer Server (Grafana, Prometheus)</li>
                <li>Du baust neue Features in den Core von LanguageTool ein und optimierst die Performance (Java)</li>
                <li>Du baust neue Features in das Backend der Website ein (Java, PHP)</li>
                <li>Du kannst selbstständig arbeiten und denkst über Verbesserungen nach, auch wenn es noch keine dringenden Probleme gibt</li>
            </ul>

            <p><b>Was wir erwarten</b></p>

            <ul>
                <li>Begeisterung für Entwicklung und Betrieb von Software</li>
                <li>Mindestens drei Jahre Berufserfahrung</li>
                <li>Kenntnisse im Betrieb virtueller Server und/oder Cloud-Umgebungen unter Linux</li>
                <li>Programmierkenntnisse in Java</li>
                <li>Gute Englischkenntnisse</li>
                <li>Kenntnisse in Python, PHP und MySQL sind gerne gesehen</li>
            </ul>

            <p><b>Was wir bieten</b></p>

            <ul>
                <li>Du arbeitest in einem kleinen, flexiblen Team</li>
                <li>Du arbeitest im Büro (in der Nähe der S-Bahn Babelsberg) oder von zu Hause, mit regelmäßigen Besuchen im Büro</li>
                <li>Du arbeitest an einer Software, die jeden Tag von hunderttausenden Menschen benutzt wird</li>
                <li>Deine Ideen kannst Du direkt umsetzen und sie sind am nächsten Tag schon online</li>
            </ul>

            <p>Interesse? Sende Deine Fragen oder direkt Deine Bewerbung per
                <script type="text/javascript">
                    <!--
                    var firstPart = "daniel.naber";
                    var lastPart = "languagetool.org";
                    document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "?subject=DevOps Engineer (m/w/d)'>E-Mail an Daniel Naber<" + "/a>");
                    // -->
                </script>.<noscript>(bitte Javascript aktivieren, um die E-Mail-Adresse zu sehen)</noscript>

            <p>LanguageTooler GmbH<br>
                Karl-Liebknecht-Str. 21/22<br>
                14482 Potsdam
            
        </div>

    </div>
@endsection
