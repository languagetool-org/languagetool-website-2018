<div class="section-qa">
    <div class="container">

        <h2 class="contentHead"><!--Top Headline--></h2>
        <!--<p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
        
        <div id="qa">
            
            {{-- 1 --}}
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                <!--headline-->
            </h3>
            <div>
                <p><strong>LanguageTool è uno strumento Open Source che permette la correzione di testi scritti in <a href="../languages/">più di 20 lingue</a>. Tra i linguaggi supportati abbiamo: italiano, inglese, francese e tedesco. Permette di identificare errori che un semplice correttore ortografico non può riconoscere. Suggerisce, ad esempio, l'uso corretto delle <em>eufoniche</em> o il corretto articolo per la parola <em>pneumatico</em>. Effettua numerosi controlli di tipo grammaticale grazie al contributo della community degli utenti stessi.</strong></p>

                <p>LanguageTool, infatti, è uno strumento molto potente che trova errori ricercando, all'interno del testo, delle combinazioni definite in regole di tipo XML ovvero codificate in Java.</p>
            </div>

            {{-- 2 --}}
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Scaricatelo
            </h3>
            <div>
                <p>LanguageTool richiede <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;8</a> o versioni successive.
                    <strong>State riscontrando dei problemi? Controllate la <a href="../issues">lista dei problemi noti</a>.</strong></p>
            </div>
            
        </div>
    
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#qa").accordion({
            heightStyle: "content",
            active: 0,
            collapsible: true
        });
    });
</script>