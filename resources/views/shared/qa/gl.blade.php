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
                LibreOffice
            </h3>
            <div>
                <a title="O LanguageTool instalado como un complemento do LibreOffice" class="fancyboxImage"
                   href="./images/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="118" align="right"
                                                          src="./images/LO_screenshot_small.png" alt="Screenshot do LanguageTool"/></a>

                <ul>
                    <li><strong>Se utilizar o <a href="https://gl.libreoffice.org/">LibreOffice</a>, recomendamos a versión máis recente </strong>. Algunhas versións máis antigas teñen problemas no arranque.</li>
                    <li>Utilice <em>Ferramentas -&gt; Xestor de Extensións -&gt; Agregar…</em> no LibreOffice para instalar a extensión;</li>
                    <li><strong>Reinicie</strong> o LibreOffice tras a instalación da extensión;</li>
                    <li>Se utilizar o LibreOffice 3.5.x (ou superior), <strong>desactive o LightProof e active o LanguageTool</strong> en Opcións <em>-> Definicións de idioma -> Auxiliares de escrita -> Editar…</em>.</li>
                </ul>
            </div>

            {{-- 2 --}}
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Outras versións
            </h3>
            <div>
                <p>Os <em>builds</em> diarios experimentais, co estado máis recente de desenvolvemento, están dispoñíbeis en SNAPSHOTS <a href="../download/snapshots/?C=M;O=D"></a>
                    (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">lista de novidades</a>).</p>
                <p>As versións antigas continúan dispoñíbeis no diretório de transferencias <a href="../download/"></a>.</p>
            </div>
            
            {{-- 2 --}}
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Licenza e Código-Fonte
            </h3>
            <div>
                <p>O LanguageTool está dispoñíbel gratuitamente so a licenza <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>. Para informacións sobre as licenzas dos compoñentes consulte o <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/src/main/resources/third-party-licenses/README.txt">README.txt</a>.</p>
                <p>O código-fonte está dispoñíbel en GitHub <a href="https://github.com/languagetool-org/"></a>.</p>
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