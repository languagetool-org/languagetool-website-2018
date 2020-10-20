@extends('layouts.app')

@section('title', 'LanguageTool Development')

@section('content')
    <div id="textContent" class="content-section page-development" style="text-align: left">
        <div class="container">

            <h1>Development</h1>

            <p>Jump to: <a href="#api">API</a> &middot;
            <a href="#funding">Funding</a> &middot;
            <a href="#improving">Improving LanguageTool</a> &middot;
            <a href="#embedding">Embedding LanguageTool on a Web Page</a> &middot;
            <a href="#thanks">Thanks</a>
            </p>


            <a name="api"></a>
            <h2>API</h2>

            <ul>
                <li><a href="http://dev.languagetool.org/http-server">How to run your own LanguageTool server</a></li>
                <li><a href="https://languagetool.org/http-api/swagger-ui/#!/default/post_check">HTTP API documentation</a>
                <li><a href="http://dev.languagetool.org/public-http-api">How to use our public server via HTTP</a>
                <li><a href="http://dev.languagetool.org/java-api">How to use LanguageTool from Java</a> (<a href="https://languagetool.org/development/api/index.html?org/languagetool/JLanguageTool.html">Javadoc</a>)
            </ul>


            <a name="funding"></a>
            <?php if (app()->getLocale() == "de") { ?>

                <h2>Förderung durch die Europäische Union</h2>
    
                <p>Die Europäische Union und der Europäische Fonds für regionale Entwicklung (EFRE) unterstützen
                    dieses Projekt finanziell. Konkret gefördert wird die Entwicklung von Verfahren zur
                    Fehlererkennung in multilingualen Texten, die Entwicklung unserer Browser Add-ons und unserer Website.
                </p>
                <img src="/images/Emblem-WEB-1.16189762.jpg" style="width:620px">
    
                <p style="margin-top:30px">Ein Arbeitsverhältnis wird durch das Ministerium für Wirtschaft, Arbeit und Energie aus
                    Mitteln des Europäischen Sozialfonds gefördert. Gefördert wird die Entwicklung der Stilprüfung.
                    Informationen zum ESF finden Sie unter <a href="https://esf.brandenburg.de">esf.brandenburg.de</a>.
                </p>
                <img src="/images/eu-esf-de.png" style="width:180px">
                <img src="/images/MASGF.png" style="width:135px;margin-left:40px">


            <?php } else { ?>

                <h2>Funding by the European Union</h2>

                <p>The European Union and the European Regional Development Fund (ERDF) support this project by providing funding.
                    They support the development of error detection algorithms in multilingual texts, and the development of
                    our browser add-ons and website.</p>
                <img src="/images/Emblem-WEB-1.16189762.jpg" style="width:620px">
    
                <p style="margin-top:30px">Supported by the Ministry for Economic Affairs, Labour, and Energy
                    from funds of the European Social Fund, who support the development of
                    our style checker. You can find information about the ESF at <a href="https://esf.brandenburg.de">esf.brandenburg.de</a>.
                </p>
                <img src="/images/eu-esf-en.png" style="width:180px">
                <img src="/images/MASGF.png" style="width:135px;margin-left:40px">
    
            <?php } ?>


            <a name="improving"></a>
            <h2>Improving LanguageTool</h2>

            <p>LanguageTool is an Open Source project and we're looking forward to your contributions.</p>

            <ul>
                <li><a href="https://github.com/languagetool-org/languagetool">Source code at github</a></li>
                <li><a href="http://dev.languagetool.org">dev.languagetool.org</a> contains the complete development documentation, including:
                    <ul>
                        <li><a href="http://dev.languagetool.org/development-overview">Development Overview</a>, for users who want to extend LanguageTool with their own rules
                    </ul>
                </li>
                <li><a href="http://community.languagetool.org">community.languagetool.org</a>,
                    includes <a href="http://community.languagetool.org/ruleEditor2/index?lang=en">a rule editor</a> and
                    <a href="http://community.languagetool.org/analysis">a text analyzer</a></li>
                <li><a href="https://forum.languagetool.org/c/development">Development discussion in our forum</a>
                    <ul>
                        <li><a href="http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/">Mailing list archive at mail-archive.com</a>
                            (alternatively, use the archive at <a href="http://markmail.org/search/?q=list%3Anet.sourceforge.lists.languagetool-devel">markmail.org</a> or
                            <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel">Sourceforge</a>) (up to September 2016)</li>
                    </ul>
                </li>
                <li><a href="https://github.com/languagetool-org/languagetool/issues?state=open">Issues / bug tracking at github</a>
                    <ul>
                        <li><a href="https://github.com/languagetool-org/languagetool/issues?labels=easy+fix&amp;state=open">Easy fixes</a>, easy issues for new contributors</li>
                    </ul>
                </li>
                <li><a href="https://github.com/languagetool-org">Source code of related projects at github</a></li>
            </ul>


            <a name="embedding"></a>
            <h2>Embedding LanguageTool on a Web Page</h2>

            <ul>
                <li><a href="http://wiki.languagetool.org/integration-on-websites">Integration on Websites</a></li>
            </ul>

            
            <a name="thanks"></a>
            <h2>Thanks to</h2>

            <ul>
                <li>Syncro Soft for a free license of the <a href="http://www.oxygenxml.com">oXygen XML editor</a></li>
                <li>ej-technologies for providing us with free licenses of their <a href="http://www.ej-technologies.com/products/jprofiler/overview.html">Java profiler</a></li>
                <li><a href="https://www.discoursehosting.com">DiscourseHosting.com</a> for sponsoring <a href="https://forum.languagetool.org/">our forum</a></li>
            </ul>
            
            <div>
                <a href="http://www.oxygenxml.com" title="Oxygen XML Editor">
                    <img src="/images/development/oxygen190x62.png" width="190" height="62" alt="Oxygen XML Editor" border="0">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.ej-technologies.com/products/jprofiler/overview.html">
                    <img src="/images/development/jprofiler_large.png" alt="JProfiler Java profiler logo">
                </a>
            </div>


        </div>
    </div>
@endsection
