@extends('layouts.app')

@section('title', 'Datenschutzerklärung')
@section('noindex')
    <meta name="robots" content="noindex">
@stop

@section('content')
    <div id="textContent" class="content-section">
        <div class="container">
            <div style="text-align:left">

                <!--<a href="?lang=en">English</a> | <a href="?lang=de">Deutsch</a>-->

                <?php if (app()->getLocale() == "de") { ?>
                
                    <h1>Datenschutzerklärung</h1>

                    <p>LanguageTool ist eine Software zur Textprüfung. Ihre Texte werden dazu vom Browser
                        über eine verschlüsselte Verbindung an unsere Server übertragen. Auf dieser Seite beschreiben wir,
                        welche Daten wir speichern.</p>

                    <p>Die Verarbeitung personenbezogener Daten auf dieser Website erfolgt im Einklang mit
                        der europäischen Datenschutz-Grundverordnung (DSGVO) und dem Bundesdatenschutzgesetz (BDSG 2018).</p>

                    <p><a href="/legal/">Unsere Kontaktinformationen finden Sie hier.</a></p>

                    <p>Hinweis: Sie können auch die Desktop-Version von <a href="/">unserer Homepage</a> herunterladen, die lokal läuft und
                        keinerlei Daten ins Internet überträgt.</p>

                    <p><b>Haben Sie uns eine Einwilligung zur Nutzung Ihrer Daten gegeben, z. B. durch Abonnieren des Newsletters,
                            können Sie diese jederzeit wie im Folgenden beschrieben widerrufen.</b></p>

                    <ul>
                        <li>Ihre zur Prüfung abgeschickten Texte werden nicht gespeichert, mit folgenden Ausnahmen:
                            <ul>
                                <li>Wenn Sie explizit Feedback geben, z.&nbsp;B. über Fehlalarme oder nicht erkannte Fehler, speichern wir dieses Feedback.</li>
                                <li>Wenn Sie Korrekturvorschläge für einen Tippfehler akzeptieren, speichern wir das ursprüngliche Wort und
                                    die von Ihnen gewählte Korrektur.</li>
                                <li>Wenn Sie Korrekturvorschläge akzeptieren oder Regeln abstellen/ignorieren, speichern wir die interne ID dieser Regel
                                    (z.&nbsp;B. <tt>EIN_PAAR</tt> für die Regel, die Verwechslungen zwischen Paar/paar findet) und das
                                    als fehlerhaft markierte Textfragment (also den kleinen Teil des Satzes, der als Fehler unterstrichen wurde)
                                    und 7 Zeichen rechts und links davon. Dies ermöglicht es uns, Fehlalarme zu erkennen und zu vermeiden.
                                </li>
                                <li>Im sehr seltenen Fall eines internen Softwarefehlers speichern wir den Satz, der den Fehler ausgelöst hat, um so die
                                    Ursache zu finden und den Fehler zu beheben.</li>
                            </ul>
                            In all diesen Fällen speichern wir weder Ihre IP-Adresse, noch sonstige Informationen,
                            die es uns erlauben würden, Sie zu identifizieren.
                            Um dieses Tracking in Ihrem Browser-Add-on trotzdem zu deaktivieren, können Sie in Ihrem Browser <a
                                    href="https://www.webnots.com/how-to-enable-do-not-track-in-chrome-firefox-safari-and-edge/">Do Not Track aktivieren</a>.
                            Da wir Ihnen Ihre Daten nicht mehr zuordnen können,
                            ist es auch nicht möglich, Ihre Daten gezielt wieder zu löschen.
                        </li>
                        <li>Alle unsere Server werden bei der Hetzner Online GmbH in Deutschland betrieben.</li>
                        <li>Um unser Angebot zu verbessern, speichern wir folgende Informationen:
                            <ul>
                                <li>Datum und Zeit, Länge des Textes, Sprache des Textes, Dauer der Verarbeitung, Anzahl
                                    der erkannten Fehler (aber nicht den fehlerhaften Text, außer Sie haben dem zugestimmt),</li>
                                <li>Die Seite, von der die Anfrage abgeschickt wurde (z.B. languagetool.org),</li>
                                <li>Interne Fehler (wenn z.&nbsp;B. das Browser Add-on auf den zu prüfenden Text nicht zugreifen kann),</li>
                                <li>Nur beim Browser Add-on: Add-on-Version; Datum der Installation; zufällige ID des Textfeldes, dessen Text geprüft wird
                                <li>Nur bei einer Browser-Add-on-Deinstallation wird übertragen: die Anzahl der Nutzungen des Add-ons
                                    und die URL der Seite, auf der das Add-on zuletzt benutzt wurde</li>
                                <li>Nur, wenn Sie ein Konto auf languagetoolplus.com haben und wenn Sie mit diesem Konto im Add-On
                                    angemeldet sind: Das Add-On kontaktiert regelmäßig (etwa einmal täglich) unsere Server, um
                                    uns mitzuteilen, dass Sie ein aktiver Benutzer sind. Dazu gehört Ihr Browser (Firefox/Chrome/...)
                                    und Ihre E-Mail-Adresse (die
                                    wir bereits kennen, weil Sie bereits ein Konto auf unserem System haben), aber nicht
                                    der Text, den Sie geschrieben haben.</li>
                            </ul>
                            Keine dieser Informationen kann genutzt werden, um Sie zu identifizieren.
                        </li>
                        <li>
                            <a name="feedback"></a>
                            Wenn Sie uns Feedback direkt über die im Browser-Add-on integrierte Feedback-Funktion schicken, übertragen
                            wir folgende Informationen, um das Problem besser analysieren zu können:
                            Kundenstatus (Premium oder Basic), Premium-Account (falls gesetzt), Add-on-Version,
                            vom Browser akzeptierte Sprachen und Sprache der Browser-Oberfläche,
                            Land des Nutzers ermittelt anhand der IP-Adresse, aktuell besuchte Website,
                            HTML des aktuellen Textfeldes <b>ohne dessen Textinhalt</b>, Anzahl CPU-Kerne, Datum der ersten Nutzung,
                            Bewertung des Add-ons (Daumen rauf/runter), Aktivierungsstatus des Synonym-Features, Dauer der Add-on-Nutzung,
                            Adresse des genutzten LanguageTool-API-Server (z.B. api.languagetool.org), Status "Do not track"-Einstellung,
                            Geschwindigkeit der Internet-Verbindung, vom Nutzer ausgestellte Regeln
                        </li>
                        <!--<li>Wenn Sie ein Kontaktformular ausfüllen, werden Ihre Daten per E-Mail an uns übertragen und gespeichert.</li>-->
                        <li>In unseren Logdateien wird Ihre IP-Adresse in gekürzter Form (wie <tt>192.168.xxx.xxx</tt>) gespeichert,
                            so dass sie nicht benutzt werden kann, um Sie zu identifizieren. Fehlermeldungen wie bei der Überschreitung des
                            Anfragelimits werden bis zu 48 Stunden lang mit der vollständigen IP-Adresse gespeichert, damit wir gegen Missbrauch
                            vorgehen können.</li>
                        <li>Wenn Sie unseren Newsletter abonnieren, wird Ihre E-Mail-Adresse bei
                            unserem Newsletter-Anbieter (<a href="https://www.newsletter2go.com/">newsletter2go.com</a>, Newsletter2Go GmbH,
                            Köpenicker Straße 126, 10179 Berlin, <a href="https://www.newsletter2go.de/datenschutz/">Datenschutzerklärung</a>) gespeichert.
                            Newsletter2Go ist es dabei untersagt, Ihre Daten zu verkaufen und für andere Zwecke, als für den Versand von Newslettern zu 
                            nutzen. Newsletter2Go ist ein deutscher, zertifizierter Anbieter, welcher nach den Anforderungen der 
                            Datenschutz-Grundverordnung und des Bundesdatenschutzgesetzes ausgewählt wurde.
                            Ihre E-Mail-Adresse wird wieder gelöscht, wenn Sie sich über den in jedem Newsletter vorhandenen Abmelde-Link
                            abmelden. Sie können uns dazu auch per E-Mail kontaktieren.
                            Weitere Informationen finden Sie hier: <a href="https://www.newsletter2go.de/informationen-newsletter-empfaenger/">https://www.newsletter2go.de/informationen-newsletter-empfaenger/</a>
                        </li>
                        <li>
                            <a href="https://forum.languagetool.org/">Unser Forum</a> wird von discoursehosting.com
                            betrieben. Details zu der Datenspeicherung finden Sie in der 
                            <a href="https://www.discoursehosting.com/privacy-policy/">Datenschutzerklärung von discoursehosting.com</a>.
                        </li>
                        <li>
                            <p>Unsere Website verwendet Piwik/Matomo. Dabei handelt es sich um einen sogenannten Webanalysedienst.
                                Piwik verwendet sog. “Cookies”, das sind Textdateien, die auf Ihrem Computer gespeichert werden und die unsererseits eine
                                Analyse der Benutzung der Webseite ermöglichen. Zu diesem Zweck werden die durch den Cookie erzeugten Nutzungsinformationen
                                (einschließlich Ihrer gekürzten IP-Adresse) an unseren Server übertragen und zu Nutzungsanalysezwecken gespeichert, was
                                der Webseitenoptimierung unsererseits dient. Ihre IP-Adresse wird bei diesem Vorgang umgehend anonymisiert, so
                                dass Sie als Nutzer für uns anonym bleiben. Sie können die Verwendung der Cookies durch eine entsprechende Einstellung
                                Ihrer Browser-Software verhindern, es kann jedoch sein, dass Sie in diesem Fall gegebenenfalls nicht sämtliche
                                Funktionen dieser Website in vollem Umfang nutzen können.</p>
                            <p>Wenn Sie mit der Speicherung und Auswertung dieser Daten aus Ihrem Besuch nicht einverstanden sind, dann können Sie der
                                Speicherung und Nutzung nachfolgend per Mausklick jederzeit widersprechen. In diesem Fall wird in Ihrem Browser ein sog.
                                Opt-Out-Cookie abgelegt, was zur Folge hat, dass Piwik keinerlei Sitzungsdaten erhebt. <b>Achtung:</b> Wenn Sie Ihre Cookies
                                löschen, so hat dies zur Folge, dass auch das Opt-Out-Cookie gelöscht wird und ggf. von Ihnen erneut aktiviert werden muss.</p>

                            <iframe frameborder="no" width="600px" height="250px" src="https://analytics.languagetoolplus.com/matomo/index.php?module=CoreAdminHome&amp;action=optOut"></iframe>
                        </li>
                        <li>Bestellen Sie ein kostenpflichtiges Premium-Paket, wird die Bestellung über unseren Reseller <a href="https://fastspring.com">fastspring</a>
                            (Bright Market, LLC d/b/a FastSpring. 801 Garden St., Santa Barbara, CA 93101) abgewickelt.
                            Die Daten bei Fastspring unterliegen dem <a href="https://www.privacyshield.gov">EU-US Privacy Shield</a> und
                            fastspring hat sich zur Einhaltung der EU-Datenschutzverordnung ab dem 25. Mai 2018 verpflichtet.
                            Ihre Daten werden nach einer Abo-Kündigung aus steuerlichen Gründen bei fastspring aufbewahrt. Details
                            dazu finden Sie in der <a href="https://fastspring.com/privacy/">Datenschutzerklärung von fastspring</a>.
                            Ihre Kreditkartendaten - sofern Sie eine Kreditkarte zum Erwerb des Premium-Produkts benutzen - werden an fastspring
                            übertragen und sind LanguageTool nicht bekannt.
                        </li>
                        <li>Sie haben das Recht, auf Antrag unentgeltlich Auskunft zu erhalten über die personenbezogenen Daten, die über Sie
                            gespeichert wurden.</li>
                        <li>Wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer personenbezogenen Daten rechtswidrig erfolgt, haben Sie das Recht,
                            sich bei einer Aufsichtsbehörde zu beschweren.</li>
                        <li>
                            Gelegentlich müssen wir Passagen dieser Datenschutzbestimmungen anpassen. Zum Beispiel, wenn wir unsere Website ändern
                            oder wenn sich die Gesetze für Cookies oder Datenschutz ändern. Bitte kehren Sie zu
                            dieser Seite zurück, um die neueste Version zu prüfen.
                        </li>
                        <li>
                            <h2>Werbung</h2>

                            <p>languagetool.org enthält nutzungsbasierte Online-Werbung von Drittanbietern. Diese wird über unseren Werbevermarkter Yieldlove GmbH,
                            Neuer Pferdemarkt 1, 20359 Hamburg („Yieldlove“) ausgespielt. Um die Werbeauslieferung zu optimieren, werden von Yieldlove
                            und deren Partnern Cookies eingesetzt.

                            <p>Informationen dazu, wie Yieldlove Daten verarbeitet und welche Daten betroffen sind, erhalten Sie auch in der Privacy
                            Policy von Yieldlove: <a href="http://www.yieldlove.com/privacy">www.yieldlove.com/privacy</a>.

                            <h3>COOKIES</h3>

                            <p>Was sind Cookies?

                            <p>Cookies sind kleine Textdateien, die beim Besuch einer Internetseite verschickt und im Browser des Nutzers gespeichert werden.
                                Wird die entsprechende Internetseite erneut aufgerufen, sendet der Browser des Nutzers den Inhalt der Cookies zurück
                                und ermöglicht so eine Wiedererkennung des Nutzers. Bestimmte Cookies werden nach Beendigung der Browser-Sitzung
                                automatisch gelöscht (sogenannte Session Cookies), andere werden für eine vorgegebene Zeit bzw. dauerhaft im
                                Browser des Nutzers gespeichert und löschen sich danach selbständig (sogenannte temporäre oder permanente Cookies).

                            <p>Welche Daten werden in den Cookies gespeichert?

                            <p>In Cookies werden grundsätzlich keine personenbezogenen Daten gespeichert, sondern nur eine Online-Kennung.

                            <p>Wie können Sie die Verwendung von Cookies verhindern bzw. Cookies löschen?

                            <p>Sie können die Speicherung von Cookies über Ihre Browser-Einstellungen deaktivieren und bereits gespeicherte
                                Cookies jederzeit in Ihrem Browser löschen (siehe Abschnitt Technikhinweise). Bitte beachten Sie jedoch,
                                dass dieses Online-Angebot ohne Cookies möglicherweise nicht oder nur noch eingeschränkt funktioniert.

                            <p>Bitte beachten Sie weiterhin, dass Widersprüche gegen die Erstellung von Nutzungsprofilen teilweise über
                                einen sogenannten "Opt-Out-Cookie" funktionieren. Sollten Sie alle Cookies löschen, findet ein Widerspruch
                                daher evtl. keine Berücksichtigung mehr und muss von Ihnen erneut erhoben werden.


                            <p>Was für Cookies verwendet yieldlove?

                             <!-- yieldlove -->

                                <h1 class="P26"><span
                                        class="T1">WERBE-COOKIES DRITTER</span></p>
                                <p class="Standard"><span class="T1">Yieldlove ermöglicht es</span><span class="T1"> anderen Unternehmen, Daten seiner Nutzer mithilfe von Werbe-Cookies zu erheben. Dies ermöglicht es Dritten, den Nutzern seines Online-Angebots interessenbasierte Werbung anzuzeigen, die auf einer Analyse ihres Nutzungsverhaltens (z. B. geklickte Werbebanner, besuchte Unterseiten, gestellte Suchanfragen) insgesamt und nicht beschränkt auf sein Online-Angebot, basiert.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Yieldlove liefert im Auftrag seiner Kunden Werbebanner aus. Alle Yieldlove Banner verwenden Cookies. Yieldlove platziert diese Banner mit Hilfe von Drittanbietern auf Websites Dritter, wie zum Beispiel einer Nachrichtenseite.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Für die Cookies, die Yieldloves Drittanbieter zu Werbezwecken platzieren, verweist Yieldlove auf den Disclaimer, den sie zu dem Thema auf ihren eigenen Websites zur Verfügung gestellt haben. Beachten Sie, dass Yieldlove sich nur auf diese Haftungsausschlüsse beziehen kann, da sie sich regelmäßig ändern und Yieldlove keinen Einfluss darauf hat.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">DRITTANBIETER UND OPT-OUT</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Eine zentrale Widerspruchsmöglichkeit für verschiedene Drittanbieter insbesondere US-amerikanischer Anbieter ist auch unter folgendem Link erreichbar: optout.networkadvertising.org</span>
                                </p>
                                <p class="Standard"><span class="T1">Sie können aber auch einen separaten Opt-out für jedes einzelne Unternehmen vornehmen mit dem Yieldlove zusammenarbeitet. </span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Für die Datenerhebung zur Auslieferung von nutzungsbasierter Online-Werbung zuständig sind folgende Unternehmen im Auftrag der Yieldlove GmbH:</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T12">4w Marketplace</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">4w Marketplace (www.4wmarketplace.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von 4w Marketplace ist 4w 4w Marketplace mit Sitz in Fisciano (Salerno) – 84084 in Via Giovanni Paolo II n.100. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von 4w Marketplace gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-</span><span
                                        class="T1">Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen. </span>
                                </p>
                                <p class="P2"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__http___www_4wmarketplace_com_privacy_"><span/></a><span
                                        class="T14">Datenschutzbestimmungen: </span><a href="http://www.4wmarketplace.com/privacy/"
                                                                                       class="ListLabel_20_1"><span class="T3">http://www.4wmarketplace.com/privacy/</span></a>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Opt-out__http___www_youronlinechoices_com_it_le-tue-scelte"><span/></a><span
                                        class="T1">Opt-out: </span><a href="http://www.youronlinechoices.com/it/le-tue-scelte"
                                                                      class="ListLabel_20_2"><span class="T21">http://www.youronlinechoices.com/it/le-tue-scelte</span></a>
                                </p>
                                <p class="Standard"><a href="https://www.neustar.biz/privacy/opt-out" class="ListLabel_20_2"><span
                                        class="T21">https://www.neustar.biz/privacy/opt-out</span></a></p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T12">Active Agent </span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T14">Active Agent (</span><a href="http://www.active-agent.com/de/"
                                                                                              class="ListLabel_20_3"><span
                                        class="Internet_20_link"><span class="T3">http://www.active-agent.com/de/</span></span></a><span
                                        class="T14">) </span><span class="T1">setzt Technologien ein, um</span><span
                                        class="T14"> </span><span class="T1">Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Active Agent ist die Active Agent AG, Ellen-Gottlieb-Straße 16, 79106 Freiburg i.Br., Deutschland. Active Agent ist eine Plattform für einfaches und transparentes Handling von Werbekampagnen im Real Time &amp; Data Driven Advertising Umfeld.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Datenschutzbestimmungen: </span><a
                                        href="http://www.active-agent.com/de/unternehmen/datenschutzerklaerung/" class="ListLabel_20_4"><span
                                        class="Internet_20_link"><span class="T1">http://www.active-agent.com/de/unternehmen/datenschutzerklaerung/</span></span></a>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Opt-out: <a href="http://www.active-agent.com/de/unternehmen/opt-out/">http://www.active-agent.com/de/unternehmen/opt-out/</a></span>
                                </p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Amazon"><span/></a><span class="T12">Amazon</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">Amazon (https://aps.amazon.com/aps/index.html) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Amazon publisher services ist Amazon publisher services mit Sitz in Washington – 410 Terry Ave. North, Seattle, WA 98109-5210. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Amazon publisher services gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T14">Datenschutzbestimmungen:</span><span class="T18"> </span><a
                                        href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&amp;nodeId=468496"
                                        class="ListLabel_20_5"><span class="Internet_20_link"><span class="T10">https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&amp;nodeId=468496</span></span></a>
                                </p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Opt-out__https___www_amazon_com_adprefs_ref=hp_468496_advertisingpref2"><span/></a><span
                                        class="T14">Opt-out: </span><a
                                        href="https://www.amazon.com/adprefs/ref=hp_468496_advertisingpref2"
                                        class="ListLabel_20_1"><span class="T3">https://www.amazon.com/adprefs/ref=hp_468496_advertisingpref2</span></a>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Adform"><span/></a><span class="T2">Adform</span></p>
                                <p class="P2"/>
                                <p class="Standard"><span class="T1">Adform (https://www.adform.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Adform ist Adform mit Sitz in Wildersgade 10B, 1, 1408 Copenhagen, Dänemark. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten Adform gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__https___site_adform_com_privacy-policy-opt-out_"><span/></a><span
                                        class="T14">Datenschutzbestimmungen:</span><span class="T18"> </span><a
                                        href="https://site.adform.com/privacy-policy-opt-out/" class="ListLabel_20_5"><span
                                        class="Internet_20_link"><span
                                        class="T10">https://site.adform.com/privacy-policy-opt-out/</span></span></a></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Opt-out__https___site_adform_com_privacy-policy-opt-out_"><span/></a><span
                                        class="T14">Opt-out: </span><a href="https://site.adform.com/privacy-policy-opt-out/"
                                                                       class="ListLabel_20_4"><span class="Internet_20_link"><span
                                        class="T1">https://site.adform.com/privacy-policy-opt-out/</span></span></a></p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__AppNexus"><span/></a><span class="T12">AppNexus</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">AppNexus (https://www.appnexus.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von AppNexus ist die AppNexus Group mit Sitz in New York – 28 W. 23rd  Street, New York, New York, 10010. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Appnexus gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T14">Datenschutzbestimmungen:</span><span class="T22"> </span><a
                                        href="https://www.appnexus.com/en/company/privacy-policy" class="ListLabel_20_6"><span
                                        class="Internet_20_link"><span
                                        class="T4">https://www.appnexus.com/en/company/privacy-policy</span></span></a></p>
                                <p class="P17"></p>
                                <p class="Standard"><span class="T15">Opt-out: <a href="https://www.appnexus.com/en/company/platform-privacy-policy#choices">https://www.appnexus.com/en/company/platform-privacy-policy#choices</a></span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Conversant"><span/></a><span class="T12">Conversant</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Conversant (https://www.conversantmedia.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Conversant ist Conversant inc. mit Sitz in Chicago (IL) – 101 North Wacker, 23rd  Floor Chicago, IL 60606. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Conversant gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_conversantmedia_com_legal_privacy"><span/></a><span
                                        class="T14">Datenschutzbestimmungen: </span><a
                                        href="http://www.conversantmedia.com/legal/privacy" class="ListLabel_20_7"><span class="T14">http://www.conversantmedia.com/legal/privacy</span></a>
                                </p>
                                <p class="P2"/>
                                <p class="P1"><a id="a__Opt-out__http___optout_conversantmedia_com_"><span/></a><span class="T14">Opt-out: </span><a
                                        href="http://optout.conversantmedia.com/" class="ListLabel_20_3"><span class="Internet_20_link"><span
                                        class="T3">http://optout.conversantmedia.com/</span></span></a></p>
                                <p class="P5"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Criteo"><span/></a><span class="T12">Criteo</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Criteo (https://www.criteo.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Criteo ist Criteo mit Sitz in Paris – 32 Rue Blanche – 75009 Paris - France. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Criteo gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_criteo_com_privacy_"><span/></a><span
                                        class="T1">Datenschutzbestimmungen:</span><span class="T22"> </span><a
                                        href="http://www.criteo.com/privacy/" class="ListLabel_20_8"><span
                                        class="Internet_20_link"><span class="T5">http://www.criteo.com/privacy/</span></span></a></p>
                                <p class="P1"><a id="a__Opt-out__https___www_criteo_com_privacy_"><span/></a><span class="T15">Opt-out: <a href="https://www.criteo.com/privacy/">https://www.criteo.com/privacy/</a></span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__District_M"><span/></a><span class="T12">District M</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">District M (https://districtm.net) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von District M ist District M mit Sitz in Montreal – 5455 Gaspe Ave #730, Montreal, QC H2T 3B3, Canada. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von District M gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses Opt-Out-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T15">Datenschutzbestimmungen: </span><a
                                        href="https://districtm.net/en/page/platforms-data-and-privacy-policy/"
                                        class="ListLabel_20_9"><span class="T22">https://districtm.net/en/page/platforms-data-and-privacy-policy/</span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__https___cdn_districtm_ca_optout_html"><span/></a><span class="T15">Opt-out:</span><span
                                        class="T1"> </span><a href="https://cdn.districtm.ca/optout.html" class="ListLabel_20_10"><span
                                        class="T15">https://cdn.districtm.ca/optout.html</span></a></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Doublecklick"><span/></a><span class="T12">Doublecklick</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Doubleclick (https://marketingplatform.google.com/about/enterprise/) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Doubleclick ist Doubleclick ist Google Ireland Limited, Gordon House, Barrow St Dublin 4 Ireland. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Doubleclick gesammelt werden, klicken Sie bitte unten auf den Opt-out </span><span
                                        class="T1">Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen___http___www_google_com_intl_en_policies_privacy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22"> : </span><a
                                        href="http://www.google.com/intl/en/policies/privacy/" class="ListLabel_20_6"><span
                                        class="Internet_20_link"><span class="T4">http://www.google.com/intl/en/policies/privacy/</span></span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__https___adssettings_google_com_authenticated?hl=en"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><a
                                        href="https://adssettings.google.com/authenticated?hl=en" class="ListLabel_20_10"><span
                                        class="T15">https://adssettings.google.com/authenticated?hl=en</span></a></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Facebook"><span/></a><span class="T12">Facebook</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Facebook (www.facebook.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Facebook ist Facebook Inc., located in 1601 S. California Ave, Palo Alto, CA 94304, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Facebook gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen___https___www_facebook_com_about_privacy_update"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22"> : </span><span
                                        class="Internet_20_link"><span
                                        class="T3"><a href="https://www.facebook.com/about/privacy/update">https://www.facebook.com/about/privacy/update</a></span></span></p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__www_facebook_com_ads_preferences"><span/></a><span class="T15">Opt-out:</span><span
                                        class="T1"> </span><a href="http://www.facebook.com/ads/preferences"
                                                              class="ListLabel_20_3"><span class="Internet_20_link"><span class="T3">www.facebook.com/ads/preferences</span></span></a>
                                </p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Freewheel"><span/></a><span class="T12">Freewheel</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Freewheel (http://freewheel.tv) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Freewheel ist FreeWheel Media, Inc., mit Sitz in 301 Howard Street19th Floor San Francisco, California 94105, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Freewheel gesammelt werden, schreiben Sie bitte eine E-Mail an die unten stehende E-Mail Adresse. </span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__http___freewheel_tv_privacy-policy_?noredirect"><span/></a><span
                                        class="T1">Datenschutzbestimmungen:</span><span class="T22"> </span><span
                                        class="Internet_20_link"><span class="T3"><a href="http://freewheel.tv/privacy-policy/?noredirect">http://freewheel.tv/privacy-policy/?noredirect</a></span></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__legalnotices@freewheel_tv_"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><span class="Internet_20_link"><span
                                        class="T3">legalnotices@freewheel.tv.</span></span></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Gumgum"><span/></a><span class="T12">Gumgum</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Gumgum (https://gumgum.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Gumgum ist Gumgum, Inc.Wenn Sie </span><span
                                        class="T1">nicht wollen, dass weiterhin anonymisierte Daten von Gumgum gesammelt werden, schreiben Sie bitte eine E-Mail an die unten stehende E-Mail Adresse. </span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___gumgum_com_cookies-policy"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><span
                                        class="Internet_20_link"><span class="T3"><a href="https://gumgum.com/cookies-policy">https://gumgum.com/cookies-policy</a></span></span></p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__https___gumgum_com_opt-out"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><span class="Internet_20_link"><span
                                        class="T3"><a href="https://gumgum.com/opt-out">https://gumgum.com/opt-out</a></span></span></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Improve_Digital"><span/></a><span class="T12">Improve Digital</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Improve Digital (www.indexexchange.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Improve Digital ist die Improve Digital GmbH mit Sitz in Nußbaumstraße 10, 80336 München. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Improve Digital gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__https___www_improvedigital_com_platform-privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: <a href="https://www.improvedigital.com/platform-privacy-policy/">https://www.improvedigital.com/platform-privacy-policy/</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__https___www_improvedigital_com_opt-out-page_"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><span class="T15"><a href="https://www.improvedigital.com/opt-out-page/">https://www.improvedigital.com/opt-out-page/</a></span>
                                </p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P14"></p>
                                <p class="P16"></p>
                                <p class="P1"><a id="a__Indexexchange"><span/></a><span class="T12">Indexexchange</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Indexexchange (www.indexexchange.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Indexexchange ist Indexexchange mit Sitz in New York – 20 W 22nd  St. Suite 1101, New York, NY 10010. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Indexexchange gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__http___www_indexexchange_com_privacy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="http://www.indexexchange.com/privacy/" class="ListLabel_20_9"><span class="T22">http://www.indexexchange.com/privacy/</span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__http___optout_networkadvertising_org_?c=1#!_"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><span class="T15"><a href="http://optout.networkadvertising.org/?c=1#!/">http://optout.networkadvertising.org/?c=1#!/</a></span>
                                </p>
                                <p class="P17"/>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__LKQD"><span/></a><span class="T12">LKQD</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">LKQD (https://www.lkqd.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von LKQD ist Nexstar Digital Digital LLC mit Sitz in 27422 Portola Parkway, Suite 100, Foothill Ranch, CA 92610, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von LKQD gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_lkqd_com_privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: <a href="http://www.lkqd.com/privacy-policy/">http://www.lkqd.com/privacy-policy/</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="Standard"><span class="T15">Opt-out:</span><span class="T1"> </span><span class="T26"><a href="http://www.networkadvertising.org/choices/">http://www.networkadvertising.org/choices/</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Loopme"><span/></a><span class="T12">Loopme</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Loopme (https://loopme.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Loopme ist LoopMe Ltd. mit Sitz in Ground Floor, 32-38 Saffron Hill, London EC1N 8FH, Großbrittanien. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Loopme gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___loopme_com_privacy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: <a href="https://loopme.com/privacy/">https://loopme.com/privacy/</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="Standard"><span class="T15">Opt-out:</span><span class="T1"> </span><span class="T26"><a href="https://gdpr.loopme.com/opt-out.html">https://gdpr.loopme.com/opt-out.html</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Media_net"><span/></a><span class="T12">Media.net</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Media.net (http://www.media.net/privacy-policy) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Media.net ist Media.net Advertising Ltd. mit Sitz in Dubai – 107/108, DIC Building 5, Dubai Internet City, Dubai, 215028, United Arab Emirates. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Media.net gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_media_net_privacy-policy"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="http://www.media.net/privacy-policy" class="ListLabel_20_11"><span class="T25">http://www.media.net/privacy-policy</span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__http___www_networkadvertising_org_choices_"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><a
                                        href="http://www.networkadvertising.org/choices/" class="ListLabel_20_9"><span class="T22">http://www.networkadvertising.org/choices/</span></a>
                                </p>
                                <p class="P1"><a id="a__MediaMath"><span/></a><span class="T13">MediaMath</span></p>
                                <p class="Standard"><span class="T1">Mediamath (</span><a href="http://www.mediamath.com"
                                                                                          class="ListLabel_20_12"><span class="T1">http://www.mediamath.com</span></a><span
                                        class="T1">) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren.  Anbieter von MediaMath ist die MediaMath Inc., 4 World Trade Center, 150 Greenwich Street, 45th Floor, New York, NY 10007, United States. MediaMath setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen auszuliefern.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T15">Datenschutzbestimmungen:</span><span class="T27"> </span><a
                                        href="http://www.mediamath.com/de/datenschutzrichtlinie/" class="ListLabel_20_13"><span
                                        class="T23">http://www.mediamath.com/de/datenschutzrichtlinie/</span></a></p>
                                <p class="P24"></p>
                                <p class="Standard"><span class="T15">Opt-Out:</span><span class="T28"> </span><a
                                        href="http://www.mediamath.com/de/ad-choices-opt-out/" class="ListLabel_20_13"><span
                                        class="T23">http://www.mediamath.com/de/ad-choices-opt-out/</span></a></p>
                                <p class="P24"></p>
                                <p class="P1"><a id="a__Nano_Interactive"><span/></a><span class="T13">Nano Interactive</span></p>
                                <p class="P17"></p>
                                <p class="Standard"><span class="T1">Nano Interactive (https://www.nanointeractive.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren.  Anbieter von Nano Interactive ist die Nano Interactive GmbH Moosstr. 7, 82319 Starnberg. Nano Interactive setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen auszuliefern.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T15">Datenschutzbestimmungen:</span><span class="T27"> </span><span
                                        class="T23"><a href="https://www.nanointeractive.com/privacy-policy/">https://www.nanointeractive.com/privacy-policy/</a></span><span class="T27"> </span></p>
                                <p class="P24"></p>
                                <p class="Standard"><span class="T15">Opt-Out:</span><span class="T28"> </span><span class="T23"><a href="https://audiencemanager.de/public/opt-out">https://audiencemanager.de/public/opt-out</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Oath"><span/></a><span class="T12">Oath</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Oath (https://www.oath.com/) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Oath ist Oath (EMEA) Limited mit Sitz in Dublin - 5-7 Point Square, North Wall Quay. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Oath gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___privacy_aol_com_"><span/></a><span class="T15">Datenschutzbestimmungen:</span><span
                                        class="T1"> </span><a href="http://privacy.aol.com/" class="ListLabel_20_8"><span
                                        class="Internet_20_link"><span class="T5">http://privacy.aol.com/</span></span></a></p>
                                <p class="P17"/>
                                <p class="P1"><a id="a__Opt-out__https___aim_yahoo_com_aim_ie_en_optout_"><span/></a><span class="T15">Opt-out: </span><span
                                        class="Internet_20_link"><span class="T32"><a href="https://aim.yahoo.com/aim/ie/en/optout">https://aim.yahoo.com/aim/ie/en/optout/</a></span></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__OpenX"><span/></a><span class="T12">OpenX</span></p>
                                <p class="P23"></p>
                                <p class="Standard"><span class="T1">OpenX (https://www.OpenX.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von OpenX ist OpenX mit Sitz in Pasadena – 888 E Walnut St, 2nd Floor, Pasadena CA, 91101, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von OpenX gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P14"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__https___www_openx_com_legal_privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">:</span> <span class="T22"><a href="https://www.openx.com/legal/privacy-policy/">https://www.openx.com/legal/privacy-policy/</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a
                                        id="a__Opt-out__https___www_openx_com_legal_interest-based-advertising_"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><span class="T15"><a href="https://www.openx.com/legal/interest-based-advertising/">https://www.openx.com/legal/interest-based-advertising/</a></span>
                                </p>
                                <p class="P11"></p>
                                <p class="P11"></p>
                                <p class="P1"><a id="a__Otto"><span/></a><span class="T13">Otto </span></p>
                                <p class="Standard"><span class="T27">Otto (</span><a href="https://www.otto.de/"
                                                                                      class="ListLabel_20_12"><span class="T1">https://www.otto.de/</span></a><span
                                        class="T1">)</span> <span class="T1">setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. </span><span
                                        class="T29">Anbieter von Otto ist die Otto (GmbH &amp; Co KG), Werner-Otto-Straße 1-7, 22179 Hamburg, Deutschland. Otto Group Media setzt Technologien ein, um die Einblendung von Werbemitteln für den User auszusteuern und zu optimieren.</span>
                                </p>
                                <p class="P11"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___ottogroup_media_kontakt_datenschutz_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">:</span> <span class="T22"><a href="https://ottogroup.media/kontakt/datenschutz/">https://ottogroup.media/kontakt/datenschutz/</a></span>
                                </p>
                                <p class="P11"></p>
                                <p class="Standard"><span class="T16">Opt-out: </span><span class="T22"><a href="https://ottogroup.media/kontakt/datenschutz/">https://ottogroup.media/kontakt/datenschutz/</a></span>
                                </p>
                                <p class="P12"></p>
                                <p class="P12"></p>
                                <p class="P1"><a id="a__Pubmatic"><span/></a><span class="T17">Pubmatic</span></p>
                                <p class="P11"></p>
                                <p class="Standard"><span class="T1">Pubmatic (https://www.pubmatic.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Pubmatic ist Pubmatic, Inc. mit Sitz in Redwood City – 305 Main Street, First Floor, Redwood City, California 94063, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Pubmatic gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P11"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__https___pubmatic_com_legal_privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><span
                                        class="Internet_20_link"><span
                                        class="T6"><a href="https://pubmatic.com/legal/privacy-policy/">https://pubmatic.com/legal/privacy-policy/</a></span></span></p>
                                <p class="P22"></p>
                                <p class="P1"><a id="a__Opt-out__https___pubmatic_com_legal_opt-out_"><span/></a><span class="T15">Opt-out:</span><span
                                        class="T1"> </span><a href="https://pubmatic.com/legal/opt-out/" class="ListLabel_20_14"><span
                                        class="Internet_20_link"><span class="T7">https://pubmatic.com/legal/opt-out/</span></span></a>
                                </p>
                                <p class="P11"></p>
                                <p class="P11"></p>
                                <p class="P1"><a id="a__Pulsepoint"><span/></a><span class="T17">Pulsepoint</span></p>
                                <p class="P11"></p>
                                <p class="Standard"><span class="T1">Pulsepoint (https://www.pulsepoint.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Pulsepoint ist Pulsepoint, Inc. mit Sitz in New York – 360 Madison Avenue, 14th Floor, New York, NY 10017. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Template gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P11"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___www_pulsepoint_com_privacy-policy"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="https://www.pulsepoint.com/privacy-policy" class="ListLabel_20_15"><span class="T24">https://www.pulsepoint.com/privacy-policy</span></a>
                                </p>
                                <p class="P22"></p>
                                <p class="P1"><a id="a__Opt-out__http___optout_networkadvertising_org_?c=1#!_"><span/></a><span
                                        class="T15">Opt-out:</span><span class="T1"> </span><a
                                        href="http://optout.networkadvertising.org/?c=1#!/" class="ListLabel_20_14"><span
                                        class="Internet_20_link"><span
                                        class="T7">http://optout.networkadvertising.org/?c=1#!/</span></span></a></p>
                                <p class="P22"></p>
                                <p class="P22"></p>
                                <p class="P1"><a id="a__Reachnet"><span/></a><span class="T17">Reachnet</span></p>
                                <p class="P11"></p>
                                <p class="Standard"><span class="T1">Reachnet (https://www.reachnet.de) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Reachnet ist Reachnet DE Ltd. mit Sitz in Hamburg – Grindelallee 41, D-20146 Hamburg. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Reachnet gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P11"></p>
                                <p class="Standard"><span class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><span
                                        class="Internet_20_link"><span
                                        class="T6"><a href="https://www.reachnet.de/unternehmen/datenschutz.html">https://www.reachnet.de/unternehmen/datenschutz.html</a></span></span></p>
                                <p class="P22"></p>
                                <p class="P1"><a id="a__Opt-out__https___imagesrv_adition_com_1x1_gif"><span/></a><span class="T15">Opt-out:</span><span
                                        class="T1"> </span><span class="Internet_20_link"><span class="T7"><a href="https://imagesrv.adition.com/1x1.gif">https://imagesrv.adition.com/1x1.gif</a></span></span>
                                </p>
                                <p class="P22"></p>
                                <p class="P11"></p>
                                <p class="P1"><a id="a__Rubicon_Project"><span/></a><span class="T17">Rubicon Project</span></p>
                                <p class="P11"></p>
                                <p class="Standard"><span class="T1">Rubicon Project (https://www.rubiconproject.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Rubicon Project ist Rubicon Project, inc. mit Sitz in Playa Vista – 12181 Bluff Creek Drive, 4th Floor, Playa Vista, CA 90094, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte </span><span
                                        class="T1">Daten von Rubicon Project gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P11"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_rubiconproject_com_privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="http://www.rubiconproject.com/privacy-policy/" class="ListLabel_20_6"><span
                                        class="Internet_20_link"><span
                                        class="T4">http://www.rubiconproject.com/privacy-policy/</span></span></a></p>
                                <p class="P17"></p>
                                <p class="Standard"><span class="T15">Opt-out:</span><span class="T1"> </span><a
                                        href="https://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/"
                                        class="ListLabel_20_8"><span class="Internet_20_link"><span class="T5">https://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/</span></span></a>
                                </p>
                                <p class="P14"></p>
                                <p class="P16"></p>
                                <p class="P1"><a id="a__Primis"><span/></a><span class="T17">Primis</span></p>
                                <p class="P14"></p>
                                <p class="Standard"><span class="T1">Primis (https://www.primis.tech) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Primis ist Primis LTD mit Sitz in 622 Third avenue, McCann New York House</span>
                                </p>
                                <p class="Standard"><span class="T1">10017 New York City, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Primis gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="https://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf"
                                        class="ListLabel_20_6"><span class="Internet_20_link"><span class="T4">https://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf</span></span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="Standard"><span class="T15">Opt-out: </span><a
                                        href="https://web.archive.org/web/20180116234711/http:/live.sekindo.com/utils/cookieOptOut.php"
                                        class="ListLabel_20_8"><span class="Internet_20_link"><span class="T5">https://web.archive.org/web/20180116234711/http:/live.sekindo.com/utils/cookieOptOut.php</span></span></a>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Smaato"><span/></a><span class="T12">Smaato</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Smaato (https://www.smaato.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Smaato ist Smaato Ad Services mit Sitz in Hamburg – Valentinskamp 70, Emporio, 20355 Hamburg, Germany. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Smaato gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___www_smaato_com_privacy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="https://www.smaato.com/privacy/" class="ListLabel_20_9"><span class="T22">https://www.smaato.com/privacy/</span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__http___www_youronlinechoices_eu"><span/></a><span
                                        class="T15">Opt-out: </span><a href="https://www.youronlinechoices.eu/" class="ListLabel_20_16"><span
                                        class="T33">http://www.youronlinechoices.eu</span></a></p>
                                <p class="P14"/>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__SmartAdserver"><span/></a><span class="T12">SmartAdserver</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T14">SmartAdserver (https://www.smartadserver.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von SmartAdserver ist SmartAdserver mit Sitz in Paris – 66 Rue de la Chaussée d´Antin, 75009 Paris, France. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von SmartAdserver gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__http___smartadserver_com_company_privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="http://smartadserver.com/company/privacy-policy/" class="ListLabel_20_6"><span
                                        class="Internet_20_link"><span
                                        class="T4">http://smartadserver.com/company/privacy-policy/</span></span></a></p>
                                <p class="P19"></p>
                                <p class="P1"><a
                                        id="a__Opt-out__http___www_smartadserver_com_diffx_optout_IABOptout_aspx"><span/></a><span
                                        class="T15">Opt-out: </span><span class="T22"><a href="http://www.smartadserver.com/diffx/optout/IABOptout.aspx">http://www.smartadserver.com/diffx/optout/IABOptout.aspx</a></span>
                                </p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Smartclip"><span/></a><span class="T12">Smartclip</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Smartclip (http://www.smartclip.com/) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Smartclip ist die Smartclip Holding AG mit Sitz Kleiner Burstah 12, 20457 Hamburg, Deutschland. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Smartclip gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___privacy-portal_smartclip_net_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: <a href="http://privacy-portal.smartclip.net/">http://privacy-portal.smartclip.net/</a></span>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__https___privacy-portal_smartclip_net_de_opt-out"><span/></a><span
                                        class="T15">Opt-out: </span><span
                                        class="T33"><a href="https://privacy-portal.smartclip.net/de/opt-out">https://privacy-portal.smartclip.net/de/opt-out</span></a></p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Sovrn"><span/></a><span class="T12">Sovrn</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">Sovrn (https://www.sovrn.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Sovrn ist Sovrn Holdings, Inc. mit Sitz in Boulder – 5541 Central Avenue, Boulder, CO 80301. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Sovrn gesammelt werden, klicken Sie bitte unten </span><span
                                        class="T1">auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__https___www_sovrn_com_privacy-policy-eu_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="https://www.sovrn.com/privacy-policy-eu/" class="ListLabel_20_9"><span class="T22">https://www.sovrn.com/privacy-policy-eu/</span></a>
                                </p>
                                <p class="P19"></p>
                                <p class="P1"><a
                                        id="a__Opt-out__https___info_evidon_com_pub_info_15620?v=1_nt=0_nw=false"><span/></a><span
                                        class="T15">Opt-out: </span><span class="T22"><a href="https://info.evidon.com/pub_info/15620?v=1&nt=0&nw=false">https://info.evidon.com/pub_info/15620?v=1&amp;nt=0&amp;nw=false</a></span>
                                </p>
                                <p class="P5"></p>
                                <p class="P7"></p>
                                <p class="Standard"><span class="T12">Spotxchange</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">Spotxchange (https://</span> <span class="T1">www.spotx.tv) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Spotxchange ist </span><span
                                        class="T34">SpotX</span></p>
                                <p class="Standard"><span class="T1">Mit Sitz in 8181 Arista Place Broomfield, CO 80021, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Spotxchange gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___www_spotx_tv_privacy-policy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: <a href="https://www.spotx.tv/privacy-policy/">https://www.spotx.tv/privacy-policy/</a></span>
                                </p>
                                <p class="P19"></p>
                                <p class="Standard"><span class="T15">Opt-out: </span><span class="T14"><a href="https://www.spotx.tv/privacy-policy/gdpr/">https://www.spotx.tv/privacy-policy/gdpr/</a></span>
                                </p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Ströer_SSP"><span/></a><span class="T8">Ströer SSP</span></p>
                                <p class="P4"></p>
                                <p class="Standard"><span class="T1">Ströer SSP (https://www.adscale.de) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Ströer SSP ist die Ströer media Deutschland GmbH mit Sitz in Köln – 50999 Köln, Ströer-Allee 1. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Adscale gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_adscale_de_datenschutz"><span/></a><span
                                        class="T14">Datenschutzbestimmungen: </span><a href="http://www.adscale.de/datenschutz"
                                                                                       class="ListLabel_20_9"><span class="T22">http://www.adscale.de/datenschutz</span></a>
                                </p>
                                <p class="P17"></p>
                                <p class="P1"><a id="a__Opt-out__ih_adscale_de_adscale-ih_oo"><span/></a><span
                                        class="T14">Opt-out: </span><span class="T15">ih.adscale.de/adscale-ih/oo</span></p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T9">The Tradedesk</span><span class="Strong"><span class="T30"> </span></span>
                                </p>
                                <p class="P2"></p>
                                <p class="P27"><span class="T29">Thetradedesk (</span><a href="https://www.thetradedesk.com/"
                                                                                         class="ListLabel_20_17"><span class="T31">https://www.thetradedesk.com/</span></a><span
                                        class="T1">)</span><span class="T29"> </span><span class="T1">setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren.</span><span
                                        class="T29"> Anbieter von The Tradedesk ist The Trade Desk, Inc, Große Theaterstraße 31, 1st Floor, 20354 Hamburg, Deutschland. </span><span
                                        class="T29">The Tradedesk ist eine Plattform für einfaches und transparentes Handling von Werbekampagnen im Real Time &amp; Data Driven Advertising Umfeld.</span>
                                </p>
                                <p class="Standard"><span class="T14">Datenschutzbestimmungen: <a href="https://www.thetradedesk.com/general/privacy">https://www.thetradedesk.com/general/privacy</a></span>
                                </p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T14">Opt-out: </span><a href="https://www.adsrvr.org/"
                                                                                         class="ListLabel_20_7"><span class="T14">https://www.adsrvr.org/</span></a>
                                </p>
                                <p class="P5"></p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Twiago"><span/></a><span class="T12">Twiago</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">Twiago (https://www.twiago.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Twiago ist Twiago mit Sitz in Köln – Gustav-Heinemann-Ufer 72b, 50968 Köln. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Twiago gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__http___www_twiago_com_datenschutz_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="http://www.twiago.com/datenschutz/" class="ListLabel_20_6"><span class="Internet_20_link"><span
                                        class="T4">http://www.twiago.com/datenschutz/</span></span></a></p>
                                <p class="P19"></p>
                                <p class="P1"><a id="a__Opt-out__http___control_twiago_com_privacy_php?lang=0"><span/></a><span
                                        class="T15">Opt-out: </span><a href="http://control.twiago.com/privacy.php?lang=0"
                                                                       class="ListLabel_20_8"><span class="Internet_20_link"><span
                                        class="T5">http://control.twiago.com/privacy.php?lang=0</span></span></a></p>
                                <p class="P19"></p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Mopub"><span/></a><span class="T12">Mopub</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">Mopub (https://www.mopub.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Mopub ist Twitter, Inc. mit Sitz in San Francisco – 1355 Market Street, Suite 900, San Francisco, Ca 94103. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Moppub gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P5"></p>
                                <p class="P1"><a id="a__Datenschutzbestimmungen__https___www_mopub_com_legal_privacy_"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T22">: </span><a
                                        href="https://www.mopub.com/legal/privacy/" class="ListLabel_20_6"><span
                                        class="Internet_20_link"><span class="T4">https://www.mopub.com/legal/privacy/</span></span></a>
                                </p>
                                <p class="P13"></p>
                                <p class="P1"><a id="a__Opt-out__https___www_mopub_com_legal_privacy_"><span/></a><span class="T15">Opt-out: </span><a
                                        href="https://www.mopub.com/legal/privacy/" class="ListLabel_20_8"><span
                                        class="Internet_20_link"><span class="T5">https://www.mopub.com/legal/privacy/</span></span></a>
                                </p>
                                <p class="P5"></p>
                                <p class="P9"></p>
                                <p class="P1"><a id="a__Inmobi"><span/></a><span class="T12">Inmobi</span></p>
                                <p class="P5"></p>
                                <p class="Standard"><span class="T1">Inmobi (https://www.inmobi.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Inmobi ist Inmobi Pte Ltd mit Sitz in Bangalore – Embassy Tech Square, Kadubeesanahalli Village Outer Ring Roard, </span><span
                                        class="T1">Varthur Hobli, Bangalore 560103. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Inmobi gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.</span>
                                </p>
                                <p class="P25"></p>
                                <p class="P1"><a
                                        id="a__Datenschutzbestimmungen__https___www_inmobi_com_privacy-policy"><span/></a><span
                                        class="T15">Datenschutzbestimmungen</span><span class="T23">: </span><a
                                        href="https://www.inmobi.com/privacy-policy" class="ListLabel_20_4"><span
                                        class="Internet_20_link"><span
                                        class="T1">https://www.inmobi.com/privacy-policy</span></span></a></p>
                                <p class="P14"></p>
                                <p class="P1"><a id="a__Opt-out__https___www_inmobi_com_page_opt-out_"><span/></a><span class="T15">Opt-out: </span><a
                                        href="https://www.inmobi.com/page/opt-out/" class="ListLabel_20_18"><span
                                        class="Internet_20_link"><span
                                        class="T11">https://www.inmobi.com/page/opt-out/</span></span></a></p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__SONSTIGE___UNVORHERSEHBARE_COOKIES"><span/></a><span class="T1">SONSTIGE / UNVORHERSEHBARE COOKIES</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Aufgrund der Funktionsweise von Internet und Websites ist es möglich, dass Yieldlove nicht immer auf die Cookies achtet, die durch seine Banner von Drittanbietern platziert werden. Dies ist insbesondere dann der Fall, wenn seine Banner eingebettete Elemente wie Texte, Dokumente, Bilder oder Filmclips enthalten, die von einer anderen Partei gespeichert, aber auf oder in seinen Banner angezeigt werden.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Sollten Sie auf dieser Website Cookies finden, die in diese Kategorie fallen, die Yieldlove oben nicht erwähnt hat, teilen Sie uns dies bitte umgehend mit oder kontaktieren Sie direkt diesen Drittanbieter und fragen Sie, welche Cookies platziert wurden, was der Grund dafür war, wie lange der Cookie bestehen bleibt und auf welche Weise Ihre Privatsphäre geschützt wird.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__IHRE_RECHTE_IN_BEZUG_AUF_IHRE_DATEN"><span/></a><span class="T1">IHRE RECHTE IN BEZUG AUF IHRE DATEN</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Yieldlove betrachtet die Daten der Werbebanner nicht als personenbezogene Daten gemäß geltendem Recht. Ebenso sammelt oder verarbeitet Yieldlove keine sensiblen persönlichen Daten wie Daten über Rasse oder ethnische Herkunft, politische Meinungen, religiöse oder philosophische Überzeugungen, Gewerkschaftsmitgliedschaft, Gesundheit oder Sexualleben. Darüber hinaus sammelt Yieldlove wissentlich auch keine Daten von Kindern unter 12 Jahren.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Yieldlove nimmt an den Selbstregulierungs-Programmen der European Digital Advertising Alliance (EDAA) teil und hält sich an die EDAA-Prinzipien für Online Behavioral Advertising. Die EDAA fungiert hauptsächlich als zentrale Lizenzierungsstelle für das OBA-Symbol und bietet den Verbrauchern technische Möglichkeiten, Transparenz und Kontrolle über OBA über die Online-Plattform für </span><span
                                        class="T1">Verbraucherwahl von youronlinechoices.eu auszuüben. Die EDAA wird von Organisationen auf EU-Ebene geregelt, die die Wertschöpfungskette der OBA in Europa bilden und die europäische Konsistenz in der Vorgehensweise sicherstellen. Klicken Sie </span><a
                                        href="http://www.edaa.eu/" class="ListLabel_20_4"><span class="Internet_20_link"><span
                                        class="T1">hier</span></span></a><span class="T1">, um mehr über die EDAA zu erfahren.</span>
                                </p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P2"></p>
                                <p class="P1"><a id="a__ANPASSUNGEN_UND_KONTAKT"><span/></a><span
                                        class="T1">ANPASSUNGEN UND KONTAKT</span></p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Gelegentlich muss Yieldlove Passagen dieser Datenschutzbestimmungen anpassen. Zum Beispiel, wenn Yieldlove seine Webseite ändert oder wenn sich die Gesetze für Cookies oder Datenschutz ändern. Yieldlove und seine Partner können den Inhalt der Aussagen und der Cookies, die ohne vorherige Warnung angegeben werden, jederzeit ändern. </span>
                                </p>
                                <p class="P2"></p>
                                <p class="Standard"><span class="T1">Wenn Sie Fragen und / oder Kommentare haben oder eine Beschwerde einreichen möchten, kontaktieren Sie bitte den Datenschutzbeauftragten von Yieldlove per E-Mail unter </span><a
                                        href="mailto:datenschutzbeauftragter@stroeer.de" class="ListLabel_20_4"><span
                                        class="Internet_20_link"><span class="T1">datenschutzbeauftragter@stroeer.de</span></span></a>
                                </p>
                                <p class="P2"></p>

                            <!-- /yieldlove -->

                    </ul>

                <?php } else { ?>

                    <h1>Privacy Policy</h1>

                    <p>LanguageTool is a proofreading software. It works by sending the text to be checked to our servers over an
                        encrypted connection. This policy describes what kind of data we store.</p>

                    <p>The processing of personal data on this website is carried out in accordance with
                        the European General Data Protection Regulation (GDPR) and the German Federal Data Protection Act,
                        Bundesdatenschutzgesetz (BDSG 2018).</p>

                    <p><a href="/legal/">Here's how you can contact us.</a></p>

                    <p>Note: If you don't want any information to be transferred, download the desktop version from
                        <a href="/">our homepage</a>. It works locally without internet access and thus doesn't transfer any data.

                    <p><b>Have you given us permission to use your data, e.g. by subscribing to the newsletter?
                            You can revoke this permission at any time as described below.</b></p>

                    <ul>
                        <li>We don't store the text that you submit for style and grammar checking on languagetool.org, with the following exceptions:
                            <ul>
                                <li>If you explicitly submit feedback, for example about false alarms or undetected errors, we store that feedback.</li>
                                <li>If you accept correction suggestions or disable/ignore rules, we save the internal ID of this rule </li>
                                <li>If you accept or explicitly ignore corrections, we log the internal rule id of that error
                                    (this is something like <tt>ENGLISH_WORD_REPEAT_RULE</tt> for word repetition errors)  and
                                    the text fragment marked as incorrect (i.e. the small part of the sentence that was underlined as an error)
                                    and 7 characters to the left and to the right. This enables us to analyze and avoid false alarms.</li>
                                <li>If you accept a correction of a spelling error, we log the original word and the correction you selected.</li>
                                <li>In case of an internal software error (which is extremely rare), we log the sentence that caused the error so
                                    we can reproduce and fix the error.</li>
                                <li>Only transferred when you have an account on languagetoolplus.com and when you're logged in with that
                                    account in the add-on: the add-on regularly (about once a day) contacts our servers to let us know
                                    that you're an active user. This includes your browser (Firefox/Chrome/...) and your email address (which we already know because you
                                    already have an account on our system), but not any text you have written.</li>
                            </ul>
                            In any case, we don't store the data with your IP address or any other meta information
                            that would allow us to identify you.
                            To turn off tracking in the browser add-on, <a
                                    href="https://www.webnots.com/how-to-enable-do-not-track-in-chrome-firefox-safari-and-edge/">activate "Do Not Track"</a> in your browser.
                            As your data is stored anonymously, it's not possible to delete this part of your data.
                        </li>
                        <li>All of our servers are hosted at Hetzner Online GmbH in Germany.</li>
                        <li>To improve our proofreading service, we keep a log of the following information:
                            <ul>
                                <li>date and time, length of submitted text, text language, processing time on server, number of detected errors (but not the actual errors unless you have agreed to that),</li>
                                <li>the page on which you submitted the request (referrer, e.g. languagetool.org),</li>
                                <li>internal errors that occur (e.g. the browser add-on not being able to access the text to be checked),</li>
                                <li>only for the browser add-on: add-on version; date of installation; random id of the text field that is being checked
                                <li>only transferred when you uninstall the browser add-on: the number of times you used the add-on
                                    and the URL of the page where the add-on was last used</li>
                            </ul>
                            None of this information can be used to identify you.
                        </li>
                        <li>
                            <a name="feedback"></a>
                            If you send feedback directly via the "feedback" function integrated in the browser add-on, the
                            following information will be transferred so we can better analyze the problem:
                            customer status (Premium or Basic), premium account (if set), Add-on version,
                            languages accepted by the browser and language of the browser interface,
                            the user's country as determined by the IP address, 
                            the currently visited website,
                            HTML of the current text field <b>without its text content</b>,
                            number of CPU cores,
                            date of first use, rating of the add-on (thumbs up/down),
                            activation status of the synonym feature,
                            duration of add-on usage,
                            address of the LanguageTool API server used (e.g. api.languagetool.org),
                            status of the "Do not track" setting,
                            internet connection speed, rules deactivated by the user
                        </li>
                        <!--<li>If you enter data in a contact form, this data will be transferred via email and it will be stored.</li>-->
                        <li>In our web server log files, your IP address is stored in an abbreviated form (like <tt>192.168.xxx.xxx</tt>)
                            so it cannot be used to identify you. Error messages like for exceeding the query limit are stored with the
                            full IP for up to 48 hours so we can prevent misuse of the service.</li>
                        <li>If you subscribe to our newsletter, your email address will be stored
                            at our newsletter provider (<a href="https://www.newsletter2go.com/">newsletter2go.com</a>, Newsletter2Go GmbH,
                            Köpenicker Straße 126, 10179 Berlin, Germany, <a href="https://www.newsletter2go.de/datenschutz/">Privacy Policy</a>).
                            Newsletter2Go is prohibited from selling your data and from using it for purposes other than sending newsletters.
                            Newsletter2Go is a certified German newsletter software provider, working in accordance with the European
                            General Data Protection Regulation, as well as the German Federal Data Protection Act (BDSG).
                            Your email will be deleted when you unsubscribe using the unsubscribe link that is included in every
                            newsletter we send. You can also contact us to unsubscribe from the newsletter.
                            More information: <a href="https://www.newsletter2go.com/information-for-newsletter-recipients/">https://www.newsletter2go.com/information-for-newsletter-recipients/</a>
                        </li>
                        <li>
                            <a href="https://forum.languagetool.org/">Our forum</a> is run by discoursehosting.com.
                            You can find details about how your data is stored in 
                            <a href="https://www.discoursehosting.com/privacy-policy/">discoursehosting.com's privacy policy</a>.
                        </li>
                        <li>
                            <p>Our website uses Piwik/Matomo. This is a so-called web analysis service.
                                Piwik uses "cookies", which are text files placed on your computer, to help us analyze your use of the website.
                                For this purpose, the usage information generated by the cookie (including your shortened IP address) is 
                                transmitted to our server and stored for usage analysis purposes, which in turn serves to optimize our
                                website. Your IP address will be immediately made anonymous during this process, so that you as a user
                                remain anonymous to us. You may refuse the use of cookies by selecting the appropriate settings on your 
                                browser, however, if you do this you may not be able to use the full functionality of this website.</p>

                            <p>If you do not agree to the storage and evaluation of this data from your visit, you can use the storage 
                                and use at any time at the click of a mouse. In this case, your browser will display a so-called 
                                Opt-Out cookie, which means that Piwik does not collect any session data. <b>Beware:</b> If you 
                                set your cookies the result is that the opt-out cookie is also deleted and you may have to activate it again.</p>

                            <iframe frameborder="no" width="600px" height="250px" src="https://analytics.languagetoolplus.com/matomo/index.php?module=CoreAdminHome&amp;action=optOut"></iframe>
                        </li>
                        <li>In case you order a premium subscription, your order will be processed by our reseller <a href="https://fastspring.com">fastspring</a>
                            (Bright Market, LLC d/b/a FastSpring. 801 Garden St., Santa Barbara, CA 93101).
                            The data at fastspring is protected under the <a href="https://www.privacyshield.gov">EU-US Privacy Shield</a>, additionally
                            fastspring has committed to follow all EU privacy laws starting 2018-05-28.
                            Your data will be kept at fastspring after you cancel a subscription for tax reasons. See
                            <a href="https://fastspring.com/privacy/">their privacy policy</a> for details.
                            Your credit card information - if you use a credit card to purchase the premium product - is
                            transmitted to fastspring, we do not know your credit card data.
                        </li>
                        <li>You have the right, upon request and free of charge, to receive information about your personal data we store.</li>
                        <li>If you believe that the processing of your personal data is unlawful, you have the right to complain to a regulatory agency.</li>
                        <li>
                            
                            <h2>Advertising</h2>

                            <p>We deliver advertising with the help of Yieldlove GmbH, Kehrwieder 9, 20457 Hamburg.
                            The following information refers to this.

                            <h3>COOKIES</h3>

                            <p>What are cookies?
                            <p>Cookies are small text files that are sent when you visit a website and stored in the browser of the 
                                user. If the corresponding Internet page is retrieved, the browser of the user sends back the 
                                content of the cookies and thus enables recognition of the user. Certain cookies are automatically 
                                deleted after the end of the browser session (so-called session cookies), others are stored 
                                for a predetermined time or permanently in the user's browser and then delete 
                                themselves (so-called temporary or permanent cookies)


                            <p>What data is stored in the cookies?
                            <p>In cookies, no personal data is stored, but only an online identifier.

                            <p>How can you prevent the use of cookies or delete cookies?
                            <p>You can deactivate the storage of cookies via your browser settings and delete already stored cookies at any time in your browser (see the section "Technical notes"). Please note, however, that this online offering without cookies may not work or may only work to a limited extent.

                            <p>Please note, furthermore, that contradictions against the creation of usage profiles partly work through
                                a so-called "opt-out cookie". If you delete all cookies, a contradiction may therefore no longer 
                                be taken into account and must be collected again by you.

                            <p>What cookies does yieldlove use?

                            <!-- yieldlove -->

                            <p>THIRD-PARTY
                            ADVERTISING COOKIES</p>
                            <p><br/>

                            </p>
                            <p>Yieldlove also
                            allows other companies to collect information from its users using
                            advertising cookies. This enables third parties to display
                            interest-based advertising to the users of their online offer, which
                            is based on an analysis of their usage behaviour (e.g. clicked
                            advertising banners, visited subpages, search queries made) in total
                            and not limited to their online offer.</p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p>Yieldlove delivers
                            advertising banners on behalf of its customers. All Yieldlove banners
                            use cookies. Yieldlove places these banners on third party websites,
                            such as a news site, with the help of third party providers.</p>
                            <p><br/>

                            </p>
                            <p>For the cookies that
                            Yieldlove's third party providers place for advertising purposes,
                            Yieldlove refers to the disclaimer that they have provided on their
                            own websites on the subject. Please note that Yieldlove can only
                            refer to these disclaimers, as they change regularly and Yieldlove
                            has no influence on them.</p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><a name="_GoBack"></a>
                            THIRD PARTIES AND OPT-OUT</p>
                            <p><br/>

                            </p>
                            <p>A central
                            contradiction possibility for various third party providers,
                            especially US providers, can also be reached under the following
                            link: optout.networkadvertising.org</p>
                            <p>You can also opt out
                            separately for each individual company with whom Yieldlove works.
                            </p>
                            <p><br/>

                            </p>
                            <p>The following
                            companies are responsible for data collection for the delivery of
                            usage-based online advertising on behalf of Yieldlove GmbH:</p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>4w Marketplace</b></p>
                            <p><br/>

                            </p>
                            <p>4w Marketplace
                            (www.4wmarketplace.com) uses technology to present you with
                            advertisements that are relevant to you. The provider of 4w
                            Marketplace is 4w 4w Marketplace with its registered office in
                            Fisciano (Salerno) - 84084 in Via Giovanni Paolo II n.100. If you do
                            not want 4w Marketplace to continue collecting anonymous data, please
                            click on the opt-out link below. This opt-out cookie will delete the
                            previously stored information and prevent further collection of
                            information.
                            </p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.4wmarketplace.com/privacy/">http://www.4wmarketplace.com/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            http://www.youronlinechoices.com/it/le-tue-scelte</p>
                            <p><a href="https://www.neustar.biz/privacy/opt-out">https://www.neustar.biz/privacy/opt-out</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Active Agent </b>
                            </p>
                            <p><br/>

                            </p>
                            <p>Active Agent
                            (http://www.active-agent.com/de/) uses technology to bring you
                            advertisements that are relevant to you. The provider of Active Agent
                            is Active Agent AG, Ellen-Gottlieb-Straße 16, 79106 Freiburg i.Br.,
                            Germany. Active Agent is a platform for simple and transparent
                            handling of advertising campaigns in the Real Time &amp; Data Driven
                            Advertising environment.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.active-agent.com/de/unternehmen/datenschutzerklaerung/">http://www.active-agent.com/de/unternehmen/datenschutzerklaerung/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://www.active-agent.com/de/unternehmen/opt-out/">http://www.active-agent.com/de/unternehmen/opt-out/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Amazon</b></p>
                            <p><br/>

                            </p>
                            <p>Amazon
                            (https://aps.amazon.com/aps/index.html) uses technology to bring you
                            advertisements that are relevant to you. The provider of Amazon
                            publisher services is Amazon publisher services, based in Washington
                            - 410 Terry Ave. North, Seattle, WA 98109-5210. If you do not want
                            Amazon publisher services to continue to collect anonymous
                            information, please click the opt-out link below. This opt-out cookie
                            deletes the information previously stored and prevents further
                            collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&amp;nodeId=468496">https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&amp;nodeId=468496</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.amazon.com/adprefs/ref=hp_468496_advertisingpref2">https://www.amazon.com/adprefs/ref=hp_468496_advertisingpref2</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Adform</b></p>
                            <p><br/>

                            </p>
                            <p>Adform
                            (https://www.adform.com) uses technologies to present you with
                            advertisements that are relevant to you. The provider of Adform is
                            Adform, with headquarters at Wildersgade 10B, 1, 1408 Copenhagen,
                            Denmark. If you do not want Adform to continue collecting anonymous
                            data, please click on the opt-out link below. This opt-out cookie
                            deletes the information previously stored and prevents further
                            collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://site.adform.com/privacy-policy-opt-out/">https://site.adform.com/privacy-policy-opt-out/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://site.adform.com/privacy-policy-opt-out/">https://site.adform.com/privacy-policy-opt-out/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>AppNexus</b></p>
                            <p><br/>

                            </p>
                            <p>AppNexus
                            (https://www.appnexus.com) uses technology to bring you
                            advertisements that are relevant to you. AppNexus is provided by the
                            AppNexus Group, based in New York - 28 W. 23rd Street, New York, New
                            York, 10010. If you do not want AppNexus to continue to collect
                            anonymous information, please click on the opt-out link below. This
                            opt-out cookie deletes the information previously stored and prevents
                            further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://www.appnexus.com/en/company/privacy-policy">https://www.appnexus.com/en/company/privacy-policy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.appnexus.com/en/company/platform-privacy-policy#choices">https://www.appnexus.com/en/company/platform-privacy-policy#choices</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Conversant</b></p>
                            <p><br/>

                            </p>
                            <p>Conversant
                            (https://www.conversantmedia.com) uses technologies to present you
                            with advertisements that are relevant to you. The provider of
                            Conversant is Conversant inc. with headquarters in Chicago (IL) - 101
                            North Wacker, 23rd Floor Chicago, IL 60606.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.conversantmedia.com/legal/privacy">http://www.conversantmedia.com/legal/privacy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://optout.conversantmedia.com/">http://optout.conversantmedia.com/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Criteo</b></p>
                            <p><br/>

                            </p>
                            <p>Criteo
                            (https://www.criteo.com) uses technology to deliver ads that are
                            relevant to you. The provider of Criteo is Criteo, based in Paris -
                            32 Rue Blanche - 75009 Paris - France. If you do not want Criteo to
                            continue to collect anonymous information, please click on the
                            opt-out link below. This opt-out cookie deletes the information
                            previously stored and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="http://www.criteo.com/privacy/">http://www.criteo.com/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.criteo.com/privacy/">https://www.criteo.com/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>District M</b></p>
                            <p><br/>

                            </p>
                            <p>District M
                            (https://districtm.net) uses technology to bring you advertisements
                            that are relevant to you. The provider of District M is District M,
                            based in Montreal - 5455 Gaspe Ave #730, Montreal, QC H2T 3B3,
                            Canada. If you do not want District M to continue collecting
                            anonymous information, please click on the opt-out link below. This
                            opt-out cookie deletes the information previously stored and prevents
                            further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://districtm.net/en/page/platforms-data-and-privacy-policy/">https://districtm.net/en/page/platforms-data-and-privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://cdn.districtm.ca/optout.html">https://cdn.districtm.ca/optout.html</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Doublecklick</b></p>
                            <p><br/>

                            </p>
                            <p>Doubleclick
                            (https://marketingplatform.google.com/about/enterprise/) uses
                            technology to present you with advertisements that are relevant to
                            you. The provider of Doubleclick is Doubleclick is Google Ireland
                            Limited, Gordon House, Barrow St Dublin 4 Ireland If you do not want
                            Doubleclick to continue to collect anonymous information, please
                            click on the opt-out link below. This opt-out cookie deletes the
                            information previously stored and prevents further collection of
                            information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy :
                            <a href="http://www.google.com/intl/en/policies/privacy/">http://www.google.com/intl/en/policies/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://adssettings.google.com/authenticated?hl=en">https://adssettings.google.com/authenticated?hl=en</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Facebook</b></p>
                            <p><br/>

                            </p>
                            <p>Facebook
                            (www.facebook.com) uses technology to bring you advertisements that
                            are relevant to you. The provider of Facebook is Facebook Inc,
                            located at 1601 S. California Ave, Palo Alto, CA 94304, USA. If you
                            do not want Facebook to continue to collect anonymous information,
                            please click on the opt-out link below. This opt-out cookie deletes
                            the information previously stored and prevents further collection of
                            information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy :
                            <a href="https://www.facebook.com/about/privacy/update">https://www.facebook.com/about/privacy/update</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://www.facebook.com/ads/preferences">www.facebook.com/ads/preferences</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Freewheel</b></p>
                            <p><br/>

                            </p>
                            <p>Freewheel
                            (http://freewheel.tv) uses technology to bring you advertisements
                            that are relevant to you. The provider of Freewheel is FreeWheel
                            Media, Inc. with headquarters at 301 Howard Street19th Floor San
                            Francisco, California 94105, USA. If you do not want Freewheel to
                            continue to collect anonymous data, please send an email to the email
                            address below.
                            </p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://freewheel.tv/privacy-policy/?noredirect">http://freewheel.tv/privacy-policy/?noredirect</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="mailto:legalnotices@freewheel.tv">legalnotices@freewheel.tv</a>.
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Gumgum</b></p>
                            <p><br/>

                            </p>
                            <p>Gumgum
                            (https://gumgum.com) uses technologies to present you with
                            advertisements that are relevant for you. If you do not want Gumgum,
                            Inc. to continue collecting anonymous data, please send an e-mail to
                            the e-mail address below.
                            </p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://gumgum.com/cookies-policy">https://gumgum.com/cookies-policy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://gumgum.com/opt-out">https://gumgum.com/opt-out</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Improve Digital</b></p>
                            <p><br/>

                            </p>
                            <p>Improve Digital
                            (www.indexexchange.com) uses technology to bring you advertisements
                            that are relevant to you. The provider of Improve Digital is Improve
                            Digital GmbH with its registered office at Nußbaumstraße 10, 80336
                            Munich, Germany. If you do not want Improve Digital to continue to
                            collect anonymous information, please click on the opt-out link
                            below. This opt-out cookie deletes the information previously stored
                            and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://www.improvedigital.com/platform-privacy-policy/">https://www.improvedigital.com/platform-privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.improvedigital.com/opt-out-page/">https://www.improvedigital.com/opt-out-page/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Index Exchange</b></p>
                            <p><br/>

                            </p>
                            <p>Indexexchange
                            (www.indexexchange.com) uses technology to bring you advertisements
                            that are relevant to you. The provider of Indexexchange is
                            Indexexchange, based in New York - 20 W 22nd St. Suite 1101, New
                            York, NY 10010. If you do not want Indexexchange to continue to
                            collect anonymous data, please click on the opt-out link below. This
                            opt-out cookie deletes the information previously stored and prevents
                            further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.indexexchange.com/privacy/">http://www.indexexchange.com/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://optout.networkadvertising.org/?c=1#!/">http://optout.networkadvertising.org/?c=1#!/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>LKQD</b></p>
                            <p><br/>

                            </p>
                            <p>LKQD
                            (https://www.lkqd.com) uses technologies to present you with
                            advertisements that are relevant to you. The provider of LKQD is
                            Nexstar Digital Digital LLC with headquarters at 27422 Portola
                            Parkway, Suite 100, Foothill Ranch, CA 92610, USA. If you do not want
                            LKQD to continue to collect anonymous information, please click on
                            the opt-out link below. This opt-out cookie deletes the information
                            previously stored and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.lkqd.com/privacy-policy/">http://www.lkqd.com/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://www.networkadvertising.org/choices/">http://www.networkadvertising.org/choices/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Loopme</b></p>
                            <p><br/>

                            </p>
                            <p>Loopme
                            (https://loopme.com) uses technologies to present you with
                            advertisements that are relevant to you. Loopme's provider is LoopMe
                            Ltd. with headquarters at Ground Floor, 32-38 Saffron Hill, London
                            EC1N 8FH, United Kingdom. If you do not want Loopme to continue to
                            collect anonymous data, please click on the opt-out link below. This
                            opt-out cookie deletes the information previously stored and prevents
                            further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://loopme.com/privacy/">https://loopme.com/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://gdpr.loopme.com/opt-out.html">https://gdpr.loopme.com/opt-out.html</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Media.net</b></p>
                            <p><br/>

                            </p>
                            <p>Media.net
                            (http://www.media.net/privacy-policy) uses technology to present you
                            with advertisements that are relevant to you. The provider of
                            Media.net is Media.net Advertising Ltd. with headquarters in Dubai -
                            107/108, DIC Building 5, Dubai Internet City, Dubai, 215028, United
                            Arab Emirates. If you do not want Media.net to continue collecting
                            anonymous data, please click on the opt-out link below. This opt-out
                            cookie deletes the information previously stored and prevents further
                            collection of information.</p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.media.net/privacy-policy">http://www.media.net/privacy-policy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://www.networkadvertising.org/choices/">http://www.networkadvertising.org/choices/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>MediaMath</b></p>
                            <p><br/>

                            </p>
                            <p>Mediamath
                            (http://www.mediamath.com) uses technologies to present you with
                            advertisements that are relevant to you.  The provider of MediaMath
                            is MediaMath Inc, 4 World Trade Center, 150 Greenwich Street, 45th
                            Floor, New York, NY 10007, United States. MediaMath uses technology
                            to deliver ads that are relevant to you.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="http://www.mediamath.com/de/datenschutzrichtlinie/">http://www.mediamath.com/de/datenschutzrichtlinie/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://www.mediamath.com/de/ad-choices-opt-out/">http://www.mediamath.com/de/ad-choices-opt-out/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Nano Interactive</b></p>
                            <p><br/>

                            </p>
                            <p>Nano Interactive
                            (https://www.nanointeractive.com) uses technologies to present you
                            with advertisements that are relevant to you.  The provider of Nano
                            Interactive is Nano Interactive GmbH Moosstr. 7, 82319 Starnberg,
                            Germany. Nano Interactive uses technologies to deliver advertisements
                            relevant to you.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.nanointeractive.com/privacy-policy/">https://www.nanointeractive.com/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://audiencemanager.de/public/opt-out">https://audiencemanager.de/public/opt-out</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Oath</b></p>
                            <p><br/>

                            </p>
                            <p>Oath
                            (https://www.oath.com/) uses technologies to present you with
                            advertisements that are relevant to you. The provider of Oath is Oath
                            (EMEA) Limited, based in Dublin - 5-7 Point Square, North Wall Quay.
                            If you do not want Oath to continue to collect anonymous data, please
                            click on the opt-out link below. This opt-out cookie deletes the
                            information previously stored and prevents further collection of
                            information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://privacy.aol.com/">http://privacy.aol.com/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://aim.yahoo.com/aim/ie/en/optout/">https://aim.yahoo.com/aim/ie/en/optout/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>OpenX</b></p>
                            <p><br/>

                            </p>
                            <p>OpenX
                            (https://www.OpenX.com) uses technologies to present you with
                            advertisements that are relevant to you. The provider of OpenX is
                            OpenX with headquarters in Pasadena - 888 E Walnut St, 2nd Floor,
                            Pasadena CA, 91101, USA. If you do not want OpenX to continue
                            collecting anonymous data, please click on the opt-out link below.
                            This opt-out cookie deletes the information previously stored and
                            prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.openx.com/legal/privacy-policy/">https://www.openx.com/legal/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.openx.com/legal/interest-based-advertising/">https://www.openx.com/legal/interest-based-advertising/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Otto </b>
                            </p>
                            <p><br/>

                            </p>
                            <p>Otto
                            (https://www.otto.de/) uses technologies to present you with
                            advertisements that are relevant to you. Otto's provider is Otto
                            (GmbH &amp; Co KG), Werner-Otto-Straße 1-7, 22179 Hamburg, Germany.
                            Otto Group Media uses technologies to control and optimise the
                            display of advertising material for the user.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://ottogroup.media/kontakt/datenschutz/">https://ottogroup.media/kontakt/datenschutz/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://ottogroup.media/kontakt/datenschutz/">https://ottogroup.media/kontakt/datenschutz/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Pubmatic</b></p>
                            <p><br/>

                            </p>
                            <p>Pubmatic
                            (https://www.pubmatic.com) uses technology to bring you
                            advertisements that are relevant to you. The provider of Pubmatic is
                            Pubmatic, Inc. with headquarters in Redwood City - 305 Main Street,
                            First Floor, Redwood City, California 94063, USA. If you do not wish
                            to continue to receive anonymous information from Pubmatic, please
                            click on the opt-out link below. This opt-out cookie deletes the
                            information previously stored and prevents further collection of
                            information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://pubmatic.com/legal/privacy-policy/">https://pubmatic.com/legal/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://pubmatic.com/legal/opt-out/">https://pubmatic.com/legal/opt-out/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Pulsepoint</b></p>
                            <p><br/>

                            </p>
                            <p>Pulsepoint
                            (https://www.pulsepoint.com) uses technology to bring you
                            advertisements that are relevant to you. The provider of Pulsepoint
                            is Pulsepoint, Inc. with headquarters in New York - 360 Madison
                            Avenue, 14th Floor, New York, NY 10017. If you do not want Template
                            to continue to collect anonymous information, please click on the
                            opt-out link below. This opt-out cookie deletes the information
                            previously stored and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://www.pulsepoint.com/privacy-policy">https://www.pulsepoint.com/privacy-policy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://optout.networkadvertising.org/?c=1#!/">http://optout.networkadvertising.org/?c=1#!/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Reachnet</b></p>
                            <p><br/>

                            </p>
                            <p>Reachnet
                            (https://www.reachnet.de) uses technologies to present you with
                            advertisements that are relevant to you. The provider of Reachnet is
                            Reachnet DE Ltd. based in Hamburg - Grindelallee 41, D-20146 Hamburg.
                            If you do not want that Reachnet continues to collect anonymous data,
                            please click on the opt-out link below. This opt-out cookie deletes
                            the previously stored information and prevents further collection of
                            information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.reachnet.de/unternehmen/datenschutz.html">https://www.reachnet.de/unternehmen/datenschutz.html</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://imagesrv.adition.com/1x1.gif">https://imagesrv.adition.com/1x1.gif</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Rubicon Project</b></p>
                            <p><br/>

                            </p>
                            <p>Rubicon Project
                            (https://www.rubiconproject.com) uses technology to present you with
                            advertisements that are relevant to you. The provider of Rubicon
                            Project is Rubicon Project, inc. with headquarters in Playa Vista -
                            12181 Bluff Creek Drive, 4th Floor, Playa Vista, CA 90094, USA. If
                            you do not want Rubicon Project to continue to collect anonymous
                            information, please click on the opt-out link below. This opt-out
                            cookie deletes the information previously stored and prevents further
                            collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="http://www.rubiconproject.com/privacy-policy/">http://www.rubiconproject.com/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/">https://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Primis</b></p>
                            <p><br/>

                            </p>
                            <p>Primis
                            (https://www.primis.tech) uses technologies to present you with
                            advertisements that are relevant to you. The provider of Primis is
                            Primis LTD with headquarters at 622 Third avenue, McCann New York
                            House</p>
                            <p>10017 New York City,
                            USA. If you do not want Primis to continue to collect anonymous
                            information, please click on the opt-out link below. This opt-out
                            cookie deletes the information previously stored and prevents further
                            collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf">https://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://web.archive.org/web/20180116234711/http:/live.sekindo.com/utils/cookieOptOut.php">https://web.archive.org/web/20180116234711/http:/live.sekindo.com/utils/cookieOptOut.php</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Smaato</b></p>
                            <p><br/>

                            </p>
                            <p>Smaato
                            (https://www.smaato.com) uses technology to deliver advertisements
                            that are relevant to you. The provider of Smaato is Smaato Ad
                            Services with headquarters in Hamburg - Valentinskamp 70, Emporio,
                            20355 Hamburg, Germany. If you do not want Smaato to continue
                            collecting anonymous information, please click on the opt-out link
                            below. This opt-out cookie deletes the information previously stored
                            and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://www.smaato.com/privacy/">https://www.smaato.com/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://www.youronlinechoices.eu/">http://www.youronlinechoices.eu</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>SmartAdserver</b></p>
                            <p><br/>

                            </p>
                            <p>SmartAdserver
                            (https://www.smartadserver.com) uses technology to present you with
                            advertisements that are relevant to you. The provider of
                            SmartAdserver is SmartAdserver, based in Paris - 66 Rue de la
                            Chaussée d'Antin, 75009 Paris, France. If you do not want
                            SmartAdserver to continue collecting anonymous data, please click on
                            the opt-out link below. This opt-out cookie deletes the information
                            previously stored and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://smartadserver.com/company/privacy-policy/">http://smartadserver.com/company/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <font color="#0563c1"><u><a href="http://www.smartadserver.com/diffx/optout/IABOptout.aspx">http://www.smartadserver.com/diffx/optout/IABOptout.aspx</a></u></font></p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Smartclip</b></p>
                            <p><br/>

                            </p>
                            <p>Smartclip
                            (http://www.smartclip.com/) uses technology to present you with
                            advertisements that are relevant to you. The provider of Smartclip is
                            the Smartclip Holding AG with headquarters at Kleiner Burstah 12,
                            20457 Hamburg, Germany. If you do not want Smartclip to continue
                            collecting anonymous data, please click on the opt-out link below.
                            This opt-out cookie deletes the previously stored information and
                            prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://privacy-portal.smartclip.net/">http://privacy-portal.smartclip.net/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://privacy-portal.smartclip.net/de/opt-out">https://privacy-portal.smartclip.net/de/opt-out</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Sovrn</b></p>
                            <p><br/>

                            </p>
                            <p>Sovrn
                            (https://www.sovrn.com) uses technologies to present you with
                            advertisements that are relevant to you. Sovrn's provider is Sovrn
                            Holdings, Inc. with headquarters at 5541 Central Avenue, Boulder, CO
                            80301. If you do not want Sovrn to continue to collect anonymous
                            information from you, please click on the opt-out link below. This
                            opt-out cookie deletes the information previously stored and prevents
                            further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.sovrn.com/privacy-policy-eu/">https://www.sovrn.com/privacy-policy-eu/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://info.evidon.com/pub_info/15620?v=1&amp;nt=0&amp;nw=false">https://info.evidon.com/pub_info/15620?v=1&amp;nt=0&amp;nw=false</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Spotxchange</b></p>
                            <p><br/>

                            </p>
                            <p>Spotxchange
                            (https:// www.spotx.tv) uses technology to bring you advertisements
                            that are relevant to you. The provider of Spotxchange is SpotX</p>
                            <p>Based at 8181 Arista
                            Place Broomfield, CO 80021, USA. If you do not want Spotxchange to
                            continue to collect anonymous data, please click on the opt-out link
                            below. This opt-out cookie deletes the information previously stored
                            and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.spotx.tv/privacy-policy/">https://www.spotx.tv/privacy-policy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.spotx.tv/privacy-policy/gdpr/">https://www.spotx.tv/privacy-policy/gdpr/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Ströer SSP</b></p>
                            <p><br/>

                            </p>
                            <p>Ströer SSP
                            (https://www.adscale.de) uses technology to present you with
                            advertisements that are relevant to you. The provider of Ströer SSP
                            is Ströer media Deutschland GmbH, located in Cologne - 50999
                            Cologne, Ströer-Allee 1. If you do not want Adscale to continue to
                            collect anonymous data, please click on the opt-out link below. This
                            opt-out cookie deletes the previously stored information and prevents
                            further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="http://www.adscale.de/datenschutz">http://www.adscale.de/datenschutz</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://ih.adscale.de/adscale-ih/oo">http://ih.adscale.de/adscale-ih/oo</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>The Tradedesk </b>
                            </p>
                            <p><br/>

                            </p>
                            <p>Thetradedesk
                            (https://www.thetradedesk.com/) uses technology to bring you
                            advertisements that are relevant to you. The provider of The
                            Tradedesk is The Trade Desk, Inc, Große Theaterstraße 31, 1st
                            Floor, 20354 Hamburg, Germany. The Tradedesk is a platform for easy
                            and transparent handling of advertising campaigns in the Real Time &amp;
                            Data Driven Advertising environment.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.thetradedesk.com/general/privacy">https://www.thetradedesk.com/general/privacy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.adsrvr.org/">https://www.adsrvr.org/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Twiago</b></p>
                            <p><br/>

                            </p>
                            <p>Twiago
                            (https://www.twiago.com) uses technology to present you with
                            advertisements that are relevant to you. The provider of Twiago is
                            Twiago with headquarters in Cologne - Gustav-Heinemann-Ufer 72b,
                            50968 Cologne. If you do not want Twiago to continue to collect
                            anonymous data, please click on the opt-out link below. This opt-out
                            cookie deletes the previously stored information and prevents further
                            collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="http://www.twiago.com/datenschutz/">http://www.twiago.com/datenschutz/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="http://control.twiago.com/privacy.php?lang=0">http://control.twiago.com/privacy.php?lang=0</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Mopub</b></p>
                            <p><br/>

                            </p>
                            <p>Mopub
                            (https://www.mopub.com) uses technology to bring you advertisements
                            that are relevant to you. The provider of Mopub is Twitter, Inc. with
                            headquarters in San Francisco - 1355 Market Street, Suite 900, San
                            Francisco, Ca 94103. If you do not wish to continue to have anonymous
                            information collected by Mopub, please click on the opt-out link
                            below. This opt-out cookie deletes the information previously stored
                            and prevents further collection of information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy policy:
                            <a href="https://www.mopub.com/legal/privacy/">https://www.mopub.com/legal/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <a href="https://www.mopub.com/legal/privacy/">https://www.mopub.com/legal/privacy/</a>
                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><b>Inmobi</b></p>
                            <p><br/>

                            </p>
                            <p>Inmobi
                            (https://www.inmobi.com) uses technology to present you with
                            advertisements that are relevant to you. Inmobi's provider is Inmobi
                            Pte Ltd, located in Bangalore - Embassy Tech Square, Kadubeesanahalli
                            Village Outer Ring Roard, Varthur Hobli, Bangalore 560103. If you do
                            not want Inmobi to continue to collect anonymous information, please
                            click on the opt-out link below. This opt-out cookie deletes the
                            information previously stored and prevents further collection of
                            information.</p>
                            <p><br/>

                            </p>
                            <p>Privacy Policy:
                            <a href="https://www.inmobi.com/privacy-policy">https://www.inmobi.com/privacy-policy</a>
                            </p>
                            <p><br/>

                            </p>
                            <p>Opt-out:
                            <font color="#0563c1"><u><a href="https://www.inmobi.com/page/opt-out/">https://www.inmobi.com/page/opt-out/</a></u></font></p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p>OTHER /
                            UNFORESEEABLE COOKIES</p>
                            <p><br/>

                            </p>
                            <p>Due to the way the
                            Internet and websites work, Yieldlove may not always be aware of the
                            cookies placed by its third-party banners. This is especially the
                            case if its banners contain embedded elements such as text,
                            documents, images or film clips that are stored by another party but
                            are displayed on or in its banners.</p>
                            <p><br/>

                            </p>
                            <p>If you find cookies
                            on this website that fall into this category, which Yieldlove did not
                            mention above, please let us know immediately or contact this third
                            party directly and ask which cookies were placed, what the reason
                            was, how long the cookie lasts and how your privacy is protected.</p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p>YOUR RIGHTS WITH
                            REGARD TO YOUR DATA</p>
                            <p><br/>

                            </p>
                            <p>Yieldlove does not
                            consider the data of the advertising banners as personal data
                            according to applicable law. Likewise, Yieldlove does not collect or
                            process sensitive personal data such as data about race or ethnic
                            origin, political opinions, religious or philosophical beliefs, union
                            membership, health or sex life. Furthermore, Yieldlove does not
                            knowingly collect data from children under the age of 12.</p>
                            <p><br/>

                            </p>
                            <p>Yieldlove
                            participates in the self-regulatory programs of the European Digital
                            Advertising Alliance (EDAA) and adheres to the EDAA Principles for
                            Online Behavioral Advertising. The EDAA acts primarily as the central
                            licensing entity for the OBA symbol and provides technical means for
                            consumers to exercise transparency and control over OBA through the
                            online consumer choice platform of youronlinechoices.eu. The EDAA is
                            regulated by organisations at EU level, which form the value chain of
                            OBA in Europe and ensure European consistency of approach. Click here
                            to learn more about the EDAA.</p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p><br/>

                            </p>
                            <p>ADAPTATIONS AND
                            CONTACT</p>
                            <p><br/>

                            </p>
                            <p>Occasionally
                            Yieldlove must adapt passages of this privacy policy. For example,
                            when Yieldlove changes its website or when the laws for cookies or
                            privacy change. Yieldlove and its partners may change the content of
                            the statements and cookies provided without prior warning at any
                            time.
                            </p>
                            <p><br/>

                            </p>
                            <p>If you have any
                            questions and/or comments or wish to make a complaint, please contact
                            Yieldlove's Privacy Officer by email at
                            datenschutzbeauftragter@stroeer.de.</p>

                            <!-- /yieldlove -->

                        </li>
                    </ul>

                <?php } ?>

            </div>
        </div>
    </div>

    <script>
        $('.iframe').load( function() {
            $('.iframe').contents().find("body").css('font-size', '30px');
        });
    </script>

@endsection
