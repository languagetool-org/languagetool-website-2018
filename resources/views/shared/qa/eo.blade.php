
<div class="section-qa">
    <div class="container">

        <!--
        <h2 class="contentHead">Questions? Look here!</h2>
        <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        -->
        
        <div id="qa">
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
            </h3>
            <div>

                <p>Lingvoilo atentigas pri tiuj eraroj, kiujn literuma kontrolilo ne trovas.
                              Lingvoilo povas ankaŭ atentigi pri literumaj eraroj, sed la versio por
                              Libreoffice/OpenOffice nur atentigas pri gramatikaj eraroj. Uzu Esperantan vortaron
                    kune kun Lingvoilo por literumaj eraroj en Libreoffice/OpenOffice.</p>
                
                <p>Por iuj eraroj, Lingvoilo sugestas korektojn, kaj
                    fojfoje havas ligilon al retaj gramatikoj
                    (<a href="http://bertilow.com/pmeg/enhavo.html">PMEG</a> de B. Wennergren,
                    <a href="http://www.esperanto.mv.ru/Seppik/index.html">La tuta Esperanto</a> de H. Seppik,
                    aŭ <a href="http://www.lernu.net">Lernu!</a>) aŭ al la
                    <a href="http://www.reta-vortaro.de/revo/">Reta Vortaro</a>
                    por pliaj detalaj klarigoj pri la eraro.</p>

                <p>Lingvoilo daŭre pliboniĝas. Reguloj estas ofte aldonitaj aŭ ŝanĝitaj.
                    Por tiuj, kiuj deziras uzi la plej freŝan version,
                    <a href="../download/snapshots/?C=M;O=D">versioj ĝisdatigitaj ĉiu-tage</a> el
                    la lasta versio en la git-deponejo ankaŭ haveblas
                    (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">liston de ŝanĝoj</a>).
                    Sed atentu: tiuj versioj estas malpli testitaj ol la oficiala versio.
                    Tamen, Lingvoilo enhavas multajn aŭtomatajn testojn, do la ĉiu-tagaj versioj
                    estas ankaŭ sufiĉe sencimaj.
                    Pli malnovaj oficialaj versioj ankoraŭ haveblas en la
                    <a href="../download/">dosierujo de elŝuto</a>.</p>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Ekrankopio en LibreOffice
            </h3>
            <div>
                <img src="/images/eo/Lingvoilo-LibreOffice.png" alt="Lingvoilo"/>
                <p>Lingvoilo povas atentigi pri pli da eraroj ol tiuj en la ĉi-supra ekrankopio. Gramatikaj eraroj trovitaj per Lingvoilo estas blue emfazitaj. Literumaj eraroj trovitaj per la Esperanta vortaro de LibreOffice/OpenOffice estas ruĝe emfazitaj.</p>
                <p>Certigu, ke la elektita lingvo de la teksto en LibreOffice/OpenOffice estas Esperanto, por ke la korektilo povu atentigi pri Esperantaj eraroj.</p>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Ĉu vi bezonas helpon?
            </h3>
            <div>
                <p>Bonvolu vidi <a href="../issues">liston de la plej oftaj problemoj</a>.
                    Por plia helpo, vi povas demandi en <a href="http://www.languagetool.org/forum/">la
                        forumo</a> (eblas demandi en Esperanto tie) aŭ retpoŝti al la
                    <a href="mailto:dominique.pelle@gmail.com">verkisto de la Esperanta versio</a>.</p>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Ligiloj al aliaj Esperantaj kontroliloj
            </h3>
            <div>
                Lingvoilo ne estas la nura Esperanta gramatika kontrolilo. Vidu ankaŭ:

                <ul>
                    <li><a href="http://lingvohelpilo.ikso.net/">Lingvohelpilo</a></li>
                    <li><a href="http://www.esperantilo.org/index.html">Esperantilo</a></li>
                </ul>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Permesilo kaj kodofonto
            </h3>
            <div>
                <p>Lingvoilo libere haveblas sub la permesilo <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
                    Kodofonto elŝuteblas ĉe <a href="https://github.com/languagetool-org/languagetool">github</a> per git:
                <pre>$ git clone https://github.com/languagetool-org/languagetool.git</pre>

                <p>La enhavo de la hejmpaĝo haveblas sub la permesilo
                    <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>
            </div>
            
        </div>
    
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#qa").accordion({
            heightStyle: "content",
            active: 0
        });
    });
</script>
