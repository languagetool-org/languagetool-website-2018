<div class="section-qa">
    <div class="container" style="text-align: left;">

        <h2 class="contentHead"><!--Top Headline--></h2>
        <!--<p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->

        <h3>
            LibreOffice
        </h3>
        <div>
            <a title="O LanguageTool instalado como um complemento do LibreOffice" class="fancyboxImage"
               href="/images/pt/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="118" align="right"
                                                        src="/images/pt/LO_screenshot_small.png" alt="Screenshot do LanguageTool"/></a>

            <ul>
                <li><strong>Se utilizar o <a href="https://pt.libreoffice.org/">LibreOffice</a>, recomendamos a versão mais recente </strong>. Algumas versões mais antigas têm problemas no arranque.</li>
                <li>Utilize <em>Ferramentas -&gt; Gestor de Extensões -&gt; Adicionar…</em> no LibreOffice para instalar a extensão;</li>
                <li><strong>Reinicie</strong> o LibreOffice após a instalação da extensão;</li>
                <li>Se utilizar o LibreOffice 3.5.x (ou superior), <strong>desative o LightProof e ative o LanguageTool</strong> em <em>Opções -> Definições de idioma -> Auxiliares de escrita -> Editar…</em>.</li>
            </ul>
        </div>

        <h3>
            Outras versões
        </h3>
        <div>
            <p>Os <em>builds</em> diários experimentais, com o estado mais recente de desenvolvimento, estão disponíveis em <a href="../download/snapshots/?C=M;O=D">SNAPSHOTS</a>
                (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">lista de novidades</a>).</p>
            <p>As versões antigas continuam disponíveis no diretório de <a href="../download/">transferências</a>.</p>
        </div>

        <h3>
            Licença e Código-Fonte
        </h3>
        <div>
            <p>O LanguageTool está disponível gratuitamente sob a licença <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>. Os dicionários de verificação ortográfica utilizados são os <a href="https://github.com/TiagoSantos81/PortugueseLibreOfficeExtension">Dicionários Portugueses Complementares</a>. O sintetizador e o dicionário morfológico são baseados numa derivação do <a href="https://github.com/TiagoSantos81/FreeLing">Freeling</a>. Para informações sobre as licenças dos componentes consulte o <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/src/main/resources/third-party-licenses/README.txt">README.txt</a>.</p>
            <p>O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>

            <h2>Versão em Português do Brasil</h2>
            <p>Pode, também, visitar a página na versão para Português do Brasil, <a href="https://languagetool.org/pt-BR/">aqui</a>.</p>
        </div>

        
        <div id="qa">
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Versão 3.9 (lançada a 26 de setembro de 2017)
            </h3>
            <div>
                <ul>
                    <li>Esta edição teve principal foco na melhoria de regras e da verificação ortográfica, aumentando a capacidade de deteção, e diminuindo o número de avisos desnecessários.</li>
                </ul>

                <h3>Novidades</h3>

                <ul>
                    <li><strong>Estilo</strong>
                        <ul>
                            <li>Deteção de expressões propagandísticas, palavras que revelam fragilidade, ou enviesamentos de opinião (opcional);</li>
                        </ul>
                    </li>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Concordância de tempos verbais;</li>
                        </ul>
                    </li>
                    <li><strong>Tipografia</strong>
                        <ul>
                            <li>Melhorias significativas na deteção de espaçamentos incorretos, formatação de números e de operadores matemáticos;</li>
                        </ul>
                    </li>
                    <li><strong>Pontuação</strong>
                        <ul>
                            <li>Pontuação em abreviaturas, cumprimentos e despedidas em cartas formais;</li>
                        </ul>
                    </li>
                    <li><strong>Novas categorias</strong>
                        <ul>
                            <li>Sintaxe;</li>
                        </ul>
                    </li>
                    <li><strong>Atualização dos dicionários Dicionários Portugueses Complementares 2.0</strong>
                    <li><strong>Exceções à verificação ortográfica para abreviaturas, variáveis em fórmulas, unidades de medida, e vocabulário estatístico diverso.</strong>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
                    </li>
                </ul>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Versão 3.8 (lançada a 27 de julho de 2017)
            </h3>
            <div>
                <h3>Novidades</h3>
                <ul>
                    <li><strong>Estilo</strong>
                        <ul>
                            <li>Deteção de expressões prolixas;</li>
                            <li>Reconhecimento de formas infletidas de barbarismos e redundâncias;</li>
                            <li>Reconhecimento de cacofonias;</li>
                        </ul>
                    </li>
                    <li><strong>Níveis de discurso (Discurso formal)</strong>
                        <ul>
                            <li>Identificação de arcaísmos, linguagem infantil e gírias;</li>
                            <li>Melhorias significativas na deteção de linguagem informal;</li>
                        </ul>
                    </li>
                    <li><strong>Regras de tipografia</strong>
                        <ul>
                            <li>Regras para unidades do Sistema Internacional;</li>
                            <li>Melhorias significativas na formatação de números e símbolos matemáticos;</li>
                        </ul>
                    </li>
                    <li><strong>Novas categorias</strong>
                        <ul>
                            <li>Identificador de palavras alteradas pelo AO90;</li>
                            <li>Nomes Personalidades;</li>
                            <li>Regionalismos;</li>
                        </ul>
                    </li>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Regras para coerência de grafias;</li>
                            <li>Melhorias significativas em todos os subgrupos de regras;</li>
                        </ul>
                    </li>
                    <li><strong>Atualização dos dicionários Dicionários Portugueses Complementares 1.4</strong>
                    <li><strong>Exceções à verificação ortográfica para expressões comuns em Inglês e Francês. Melhorias na deteção de expressões em Latim.</strong>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
                    </li>
                </ul>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Versão 3.7 (lançada a 27 de março de 2017)
            </h3>
            <div>
                <a title="O LanguageTool instalado como um complemento do LibreOffice" class="fancyboxImage"
                   href="./images/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="118" align="right"
                                                          src="./images/LO_screenshot_small.png" alt="Screenshot do LanguageTool"/></a>

                <h3>Novidades</h3>
                <ul>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Regras para erros de crase;</li>
                            <li>Utilização de verbos impessoais;</li>
                            <li>Ajustes nas regras de concordância nominal e verbal;</li>
                            <li>Melhorias significativas na deteção de fragmentos;</li>
                            <li>Melhorias significativas na deteção de homónimos e parónimos acentuados (p.ex. mau-mal);</li>
                            <li>Melhorias significativas nas regras de colocação pronominal.</li>
                            <li>Novas regras gramaticais em categorias diversas</li>
                        </ul>
                    </li>
                    <li><strong>Capitalização</strong>
                        <ul>
                            <li>Novas regras para ambos os Acordos Ortográficos.</li>
                        </ul>
                    </li>
                    <li><strong>Estilo</strong>
                        <ul>
                            <li>Mais regras para deteção de duplicações;</li>
                            <li>Barbarismos;</li>
                            <li>Formatação de estrangeirismos.</li>
                        </ul>
                    </li>
                    <li><strong>Regras de tipografia</strong>
                        <ul>
                            <li>Pontuação de abreviaturas, reticências e unidades de medida;</li>
                            <li>Formatação de números;</li>
                            <li>Fórmulas químicas;</li>
                            <li>Graus, minutos e segundos;</li>
                            <li>Hífenes e travessões;</li>
                        </ul>
                    </li>
                    <li><strong>Regras de semântica (contexto)</strong>
                        <ul>
                            <li>Identificação de palavras mal utilizadas por identificação do contexto;</li>
                            <li>Melhorias significativas na verificação de datas;</li>
                            <li>Validador de URLs.</li>
                        </ul>
                    </li>
                    <li><strong>Novas categorias</strong>
                        <ul>
                            <li>Marcas comercias;</li>
                            <li>Erros de tradução.</li>
                        </ul>
                    </li>
                    <li><strong>Suporte para falsos cognatos</strong>
                        <ul>
                            <li>Português para Alemão, Espanhol, Francês, Galego e Inglês.</li>
                        </ul>
                    </li>
                    <li><strong>Novos dicionários baseados num fork do Projecto Natura (integram mais palavras derivadas)</strong>
                    <li><strong>Exceções à verificação ortográfica para certos nomes científicos, expressões estrangeiras ou em latim</strong>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
                    </li>
                    <li><strong>E muito mais…</strong></li>
                </ul>
            </div>
            
            <h3>
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                Versão 3.6 (lançada a 28 de dezembro de 2016)
            </h3>
            <div>
                <h3>Novidades</h3>
                <ul>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Concordância nominal de género e número; Concordância verbal entre sujeito e verbo; Verificação de homónimos e parónimos acentuados.</li>
                        </ul>
                    </li>
                    <li><strong>Palavras compostas</strong>
                        <ul>
                            <li>Novas regras para deteção de palavras compostas; Melhorias significativas no reconhecimento de palavras hifenizadas;</li>
                        </ul>
                    </li>
                    <li><strong>Regras para duplicação de elementos</strong>
                    </li>
                    <li><strong>Regras para reconhecimento de vícios de linguagem</strong>
                        <ul>
                            <li>Redundâncias; Clichés; Repetições;</li>
                        </ul>
                    </li>
                    <li><strong>Regras de tipografia</strong>
                        <ul>
                            <li>Símbolos monetários; Espaçamento; Sinais tipográficos;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                        </ul>
                    </li>
                    <li><strong>Regras de semântica</strong>
                        <ul>
                            <li>Reconhecimento e validação de datas;<!--  <span class="errorMarker" title="Möglicher Rechtschreibfehler gefunden. Vorschlag: normale">nromale</span> Rechtschreibprüfung:--></li>
                        </ul>
                    </li>
                    <li><strong>Regras de estilo</strong>
                        <ul>
                            <li>Repetições; Gerundismo; Voz passiva; Frases longas;  Deteção de fragmentos;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                        </ul>
                    </li>
                    <li><strong>Reconhecimento das várias variantes de Português</strong>
                        <ul>
                            <li>Regras específicas para Português de Portugal; Regras específicas para o Novo Acordo Ortográfico; Suporte adicionado para Português de Angola, Cabo Verde, Timor Leste, Guiné-Bissau, Macau, Moçambique e São Tomé e Príncipe; Atualização de dicionários e da base de dados morfológica;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <!-- <li> <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>-->
                        </ul>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong> <!-- <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:-->
                    </li>
                    <li><strong>E muito mais…</strong></li>
                </ul>
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