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
                                <li>die Seite, von der die Anfrage abgeschickt wurde (z.B. languagetool.org),</li>
                                <li>interne Fehler (wenn z.&nbsp;B. das Browser Add-on auf den zu prüfenden Text nicht zugreifen kann),</li>
                                <li>nur beim Browser Add-on: Add-on-Version; Datum der Installation; zufällige ID des Textfeldes, dessen Text geprüft wird
                                <li>nur bei einer Browser-Add-on-Deinstallation wird übertragen: die Anzahl der Nutzungen des Add-ons
                                    und die URL der Seite, auf der das Add-on zuletzt benutzt wurde</li>
                            </ul>
                            Keine dieser Informationen kann genutzt werden, um Sie zu identifizieren.
                        </li>
                        <li>
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

                            <p><b>Analyse-Cookies</b><br>
                                yieldlove verwendet Analyse-Cookies, um das Nutzungsverhalten (z. B. geklickte Werbebanner, besuchte Unterseiten, gestellte
                                Suchanfragen) ihrer Nutzer aufzeichnen und in statistischer Form auswerten zu können.

                            <p><b>Werbe-Cookies</b><br>
                                yieldlove verwendet auch Cookies zu werblichen Zwecken. Die mit Hilfe dieser Cookies erstellten Profile zum Nutzungsverhalten
                                (z. B. geklickte Werbebanner, besuchte Unterseiten, gestellte Suchanfragen) werden von yieldlove verwendet, um Ihnen
                                Werbung bzw. Angebote anzuzeigen, die auf Ihre Interessen zugeschnitten sind ("interessenbasierte Werbung").

                            <p><b>Werbe-Cookies Dritter</b><br>
                                yieldlove erlaubt auch anderen Unternehmen, Daten unserer Nutzer mithilfe von Werbe-Cookies zu erheben. Dies
                                ermöglicht yieldlove und Dritten, den Nutzern unseres Online-Angebots interessenbasierte Werbung anzuzeigen,
                                die auf einer Analyse ihres Nutzungsverhaltens (z. B. geklickte Werbebanner, besuchte Unterseiten, gestellte
                                Suchanfragen) insgesamt und nicht beschränkt auf unser Online-Angebot, basiert.

                            <p>Yieldlove liefert im Auftrag seiner Kunden Werbebanner aus. Alle yieldlive-Banner verwenden Cookies. yieldlove platziert
                                diese Banner mit Hilfe von Drittanbietern auf Websites Dritter, wie zum Beispiel einer Nachrichtenseite oder languagetool.org.

                            <p>Zu Diagnosezwecken, Fehlersuche und Aufdeckung von betrügerischem Verhalten sammelt yieldlove in einigen Anzeigeneinheiten
                                Benutzerinformationen mittels Cookies, die eine Lebensdauer von 6 Monaten haben. Die erfassten Benutzerinformationen
                                umfassen Benutzeragent, Gerät, HTTP-Referrer und die IP. Diese Daten werden nicht länger als 7 Tage aufbewahrt.

                            <p>Yieldlove unternimmt angemessene Schritte, um alle Informationen, die yieldlove verarbeitet, vor Missbrauch, Verlust,
                                unberechtigtem Zugriff, Änderung oder Benachrichtigung zu schützen. yieldlove ergreift physische, elektronische und
                                verfahrenstechnische Sicherheitsmaßnahmen, um die von yieldlove verarbeiteten Daten zu schützen. Dadurch beschränkt
                                yieldlove den Zugriff auf diese Informationen auf autorisierte Mitarbeiter.

                            <p>Für die Cookies, die yieldloves Drittanbieter zu Werbezwecken platzieren, verweist yieldlove auf die Disclaimer, die sie
                                zu dem Thema auf ihren eigenen Websites zur Verfügung gestellt haben. Beachten Sie, dass yieldlove sich nur auf diese
                                Haftungsausschlüsse beziehen kann, da sie sich regelmäßig ändern und Yieldlove keinen Einfluss darauf hat.


                            <h3>DRITTANBIETER UND OPT-OUT</h3>

                            <p>Eine zentrale Widerspruchsmöglichkeit für verschiedene Drittanbieter insbesondere US-amerikanischer Anbieter
                                ist auch unter folgendem Link erreichbar: <a href="https://optout.networkadvertising.org">optout.networkadvertising.org</a>
                                Sie können aber auch einen separaten Opt-out für jedes einzelne Unternehmen vornehmen mit dem yieldlove zusammenarbeiten.

                            <p>Für die Datenerhebung zur Auslieferung von nutzungsbasierter Online-Werbung zuständig sind folgende
                                Unternehmen im Auftrag der Yieldlove GmbH:


                            <p><b>4w Marketplace</b>

                            <p>4w Marketplace (www.4wmarketplace.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu
                                präsentieren. Anbieter von 4w Marketplace ist 4w Marketplace mit Sitz in Fisciano (Salerno) – 84084 in
                                Via Giovanni Paolo II n.100. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von 4w Marketplace
                                gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher
                                gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.

                                Datenschutzbestimmungen: <a href="http://www.4wmarketplace.com/privacy/">http://www.4wmarketplace.com/privacy/</a><br>
                                Opt-out: <a href="http://www.youronlinechoices.com/it/le-tue-scelte">http://www.youronlinechoices.com/it/le-tue-scelte</a><br>
                                <a href="https://www.neustar.biz/privacy/opt-out">https://www.neustar.biz/privacy/opt-out</a>

                            <p><b>Amazon</b>
                            <p>Amazon (https://www.aps.amazon.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Amazon publisher services ist Amazon publisher services mit Sitz in Washington – 410 Terry Ave. North, Seattle, WA 98109-5210. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Amazon publisher services gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&nodeId=468496">https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&nodeId=468496</a>
                                <br>Opt-out: <a href="https://www.amazon.com/adprefs/ref=hp_468496_advertisingpref2">https://www.amazon.com/adprefs/ref=hp_468496_advertisingpref2</a>

                            <p><b>Adform</b>
                            <p>Adform (https://www.adform.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Adform ist Adform mit Sitz in Wildersgade 10B, 1, 1408 Copenhagen, Dänemark. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten Adform gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://site.adform.com/privacy-policy-opt-out/">https://site.adform.com/privacy-policy-opt-out/</a>
                                <br>Opt-out: <a href="https://site.adform.com/privacy-policy-opt-out/">https://site.adform.com/privacy-policy-opt-out/</a>

                            <p><b>AppNexus</b>
                            <p>AppNexus (https://www.appnexus.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von AppNexus ist die AppNexus Group mit Sitz in New York – 28 W. 23rd  Street, New York, New York, 10010. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Appnexus gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.appnexus.com/en/company/privacy-policy">https://www.appnexus.com/en/company/privacy-policy</a>
                                <br>Opt-out: <a href="https://www.appnexus.com/en/company/platform-privacy-policy#choices">https://www.appnexus.com/en/company/platform-privacy-policy#choices</a>

                            <p><b>Conversant</b>
                            <p>Conversant (https://www.conversantmedia.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Conversant ist Conversant inc. mit Sitz in Chicago (IL) – 101 North Wacker, 23rd  Floor Chicago, IL 60606. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Conversant gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.conversantmedia.com/legal/privacy">http://www.conversantmedia.com/legal/privacy</a>
                                <br>Opt-out: <a href="http://optout.conversantmedia.com/">http://optout.conversantmedia.com/</a>

                            <p><b>Criteo</b>
                            <p>Criteo (https://www.criteo.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Criteo ist Criteo mit Sitz in Paris – 32 Rue Blanche – 75009 Paris - France. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Criteo gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.criteo.com/privacy/">http://www.criteo.com/privacy/</a>
                                <br>Opt-out: <a href="https://www.criteo.com/privacy/">https://www.criteo.com/privacy/</a>

                            <p><b>District M</b>
                            <p>District M (https://districtm.net) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von District M ist District M mit Sitz in Montreal – 5455 Gaspe Ave #730, Montreal, QC H2T 3B3, Canada. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von District M gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://districtm.net/en/page/platforms-data-and-privacy-policy/">https://districtm.net/en/page/platforms-data-and-privacy-policy/</a>
                                <br>Opt-out: <a href="https://cdn.districtm.ca/optout.html">https://cdn.districtm.ca/optout.html</a>

                            <p><b>Doublecklick</b>
                            <p>Doubleclick (www.doubleclickbygoogle.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Doubleclick ist Doubleclick ist Google Ireland Limited, Gordon House, Barrow St Dublin 4 Ireland. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Doubleclick gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.google.com/intl/en/policies/privacy/">http://www.google.com/intl/en/policies/privacy/</a>
                                <br>Opt-out: <a href="https://adssettings.google.com/authenticated?hl=en">https://adssettings.google.com/authenticated?hl=en</a>

                            <p><b>Facebook</b>
                            <p>Facebook (www.facebook.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Facebook ist Facebook Inc., located in 1601 S. California Ave, Palo Alto, CA 94304, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Facebook gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.facebook.com/full_data_use_policy">http://www.facebook.com/full_data_use_policy</a>
                                <br>Opt-out: <a href="http://www.facebook.com/ads/preferences">http://www.facebook.com/ads/preferences</a>

                            <p><b>Indexexchange</b>
                            <p>Indexexchange (www.indexexchange.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Indexexchange ist Indexexchange mit Sitz in New York – 20 W 22nd  St. Suite 1101, New York, NY 10010. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Indexexchange gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.indexexchange.com/privacy/">http://www.indexexchange.com/privacy/</a>
                                <br>Opt-out: <a href="http://optout.networkadvertising.org/?c=1#!/">http://optout.networkadvertising.org/?c=1#!/</a>


                            <p><b>Media.net</b>
                            <p>Media.net (http://www.media.net/privacy-policy) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Media.net ist Media.net Advertising Ltd. mit Sitz in Dubai – 107/108, DIC Building 5, Dubai Internet City, Dubai, 215028, United Arab Emirates. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Media.net gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.media.net/privacy-policy">http://www.media.net/privacy-policy</a>
                                <br>Opt-out: <a href="http://www.networkadvertising.org/choices/">http://www.networkadvertising.org/choices/</a>

                            <p><b>Oath</b>
                            <p>Oath (https://www.oath.com/) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Oath ist Oath (EMEA) Limited mit Sitz in Dublin - 5-7 Point Square, North Wall Quay. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Oath gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://privacy.aol.com/">http://privacy.aol.com/</a>
                                <br>Opt-out: <a href="https://aim.yahoo.com/aim/ie/en/optout/">https://aim.yahoo.com/aim/ie/en/optout/</a>

                            <p><b>OpenX</b>
                            <p>OpenX (https://www.OpenX.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von OpenX ist OpenX mit Sitz in Pasadena – 888 E Walnut St, 2nd Floor, Pasadena CA, 91101, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von OpenX gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.openx.com/de_de/privacy-policy/">https://www.openx.com/de_de/privacy-policy/</a>
                                <br>Opt-out: <a href="https://www.openx.com/legal/interest-based-advertising/">https://www.openx.com/legal/interest-based-advertising/</a>

                            <p><b>Pubmatic</b>
                            <p>Pubmatic (https://www.pubmatic.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Pubmatic ist Pubmatic, Inc. mit Sitz in Redwood City – 305 Main Street, First Floor, Redwood City, California 94063, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Pubmatic gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.openx.com/de_de/privacy-policy/">https://www.openx.com/de_de/privacy-policy/</a>
                                <br>Opt-out: <a href="https://pubmatic.com/legal/opt-out/">https://pubmatic.com/legal/opt-out/</a>

                            <p><b>Pulsepoint</b>
                            <p>Pulsepoint (https://www.pulsepoint.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Pulsepoint ist Pulsepoint, Inc. mit Sitz in New York – 360 Madison Avenue, 14th Floor, New York, NY 10017. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Template gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.pulsepoint.com/privacy-policy">https://www.pulsepoint.com/privacy-policy</a>
                                <br>Opt-out: <a href="http://optout.networkadvertising.org/?c=1#!/">http://optout.networkadvertising.org/?c=1#!/</a>

                            <p><b>Reachnet</b>
                            <p>Reachnet (https://www.reachnet.de) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Reachnet ist Reachnet DE Ltd. mit Sitz in Hamburg – Grindelallee 41, D-20146 Hamburg. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Reachnet gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.reachnet.de/unternehmen/agb.html">http://www.reachnet.de/unternehmen/agb.html</a>
                                <br>Opt-out: <a href="https://adfarm1.adition.com/opt?m=optout&n=73">https://adfarm1.adition.com/opt?m=optout&n=73</a>

                            <p><b>Rubicon Project</b>
                            <p>Rubicon Project (https://www.rubiconproject.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Rubicon Project ist Rubicon Project, inc. mit Sitz in Playa Vista – 12181 Bluff Creek Drive, 4th Floor, Playa Vista, CA 90094, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Rubicon Project gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.rubiconproject.com/privacy-policy/">http://www.rubiconproject.com/privacy-policy/</a>
                                <br>Opt-out: <a href="https://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/">https://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/</a>

                            <p><b>Primis</b>
                            <p>Primis (https://www.primis.tech) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Primis ist Primis LTD mit Sitz in 622 Third avenue, McCann New York House
                                10017 New York City, USA. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Primis gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf">https://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf</a>
                                <br>Opt-out: <a href="http://live.sekindo.com/utils/cookieOptOut.php">http://live.sekindo.com/utils/cookieOptOut.php</a>

                            <p><b>Smaato</b>
                            <p>Smaato (https://www.smaato.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Smaato ist Smaato Ad Services mit Sitz in Hamburg – Valentinskamp 70, Emporio, 20355 Hamburg, Germany. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Smaato gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.smaato.com/privacy/">https://www.smaato.com/privacy/</a>
                                <br>Opt-out: <a href="http://www.youronlinechoices.eu">http://www.youronlinechoices.eu</a>

                            <p><b>SmartAdserver</b>
                            <p>SmartAdserver (https://www.smartadserver.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von SmartAdserver ist SmartAdserver mit Sitz in Paris – 66 Rue de la Chaussée d´Antin, 75009 Paris, France. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von SmartAdserver gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://smartadserver.com/company/privacy-policy/">http://smartadserver.com/company/privacy-policy/</a>
                                <br>Opt-out: <a href="http://www.smartadserver.com/diffx/optout/IABOptout.aspx">http://www.smartadserver.com/diffx/optout/IABOptout.aspx</a>

                            <p><b>Sovrn</b>
                            <p>Sovrn (https://www.sovrn.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Sovrn ist Sovrn Holdings, Inc. mit Sitz in Boulder – 5541 Central Avenue, Boulder, CO 80301. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Sovrn gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.sovrn.com/privacy-policy-eu/">https://www.sovrn.com/privacy-policy-eu/</a>
                                <br>Opt-out: <a href="https://info.evidon.com/pub_info/15620?v=1&nt=0&nw=false">https://info.evidon.com/pub_info/15620?v=1&nt=0&nw=false</a>

                            <p><b>Ströer SSP</b>
                            <p>Ströer SSP (https://www.adscale.de) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Ströer SSP ist die Ströer media Deutschland GmbH mit Sitz in Köln – 50999 Köln, Ströer-Allee 1. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Adscale gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.adscale.de/datenschutz">http://www.adscale.de/datenschutz</a>
                                <br>Opt-out: <a href="http://ih.adscale.de/adscale-ih/oo">http://ih.adscale.de/adscale-ih/oo</a>

                            <p><b>Twiago</b>
                            <p>Twiago (https://www.twiago.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Twiago ist Twiago mit Sitz in Köln – Gustav-Heinemann-Ufer 72b, 50968 Köln. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Twiago gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="http://www.twiago.com/datenschutz/">http://www.twiago.com/datenschutz/</a>
                                <br>Opt-out: <a href="http://control.twiago.com/privacy.php?lang=0">http://control.twiago.com/privacy.php?lang=0</a>

                            <p><b>Mopub</b>
                            <p>Mopub (https://www.mopub.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Mopub ist Twitter, Inc. mit Sitz in San Francisco – 1355 Market Street, Suite 900, San Francisco, Ca 94103. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Moppub gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.mopub.com/legal/privacy/">https://www.mopub.com/legal/privacy/</a>
                                <br>Opt-out: <a href="https://www.mopub.com/legal/privacy/">https://www.mopub.com/legal/privacy/</a>

                            <p><b>Inmobi</b>
                            <p>Inmobi (https://www.inmobi.com) setzt Technologien ein, um Ihnen für Sie relevante Werbeanzeigen zu präsentieren. Anbieter von Inmobi ist Inmobi Pte Ltd mit Sitz in Bangalore – Embassy Tech Square, Kadubeesanahalli Village Outer Ring Roard, Varthur Hobli, Bangalore 560103. Wenn Sie nicht wollen, dass weiterhin anonymisierte Daten von Inmobi gesammelt werden, klicken Sie bitte unten auf den Opt-out Link. Dieses OptOut-Cookie löscht die bisher gespeicherten Informationen und verhindert ein weiteres Erfassen von Informationen.
                                <br>Datenschutzbestimmungen: <a href="https://www.inmobi.com/privacy-policy">https://www.inmobi.com/privacy-policy</a>
                                <br>Opt-out: <a href="https://www.inmobi.com/page/opt-out/">https://www.inmobi.com/page/opt-out/</a>

                            <h3>SONSTIGE / UNVORHERSEHBARE COOKIES</h3>

                            <p>Aufgrund der Funktionsweise von Internet und Websites ist es möglich, dass yieldlove nicht immer auf die Cookies achtet, die
                                durch yieldloves Banner von Drittanbietern platziert werden. Dies ist insbesondere dann der Fall, wenn yieldloves Banner
                                eingebettete Elemente wie Texte, Dokumente, Bilder oder Filmclips enthalten, die von einer anderen Partei gespeichert,
                                aber auf oder in yieldloves Banner angezeigt werden.

                            <p>Sollten Sie auf dieser Website Cookies finden, die in diese Kategorie fallen, die oben nicht erwähnt sind,
                                teilen Sie uns oder yieldlove dies bitte umgehend mit oder kontaktieren Sie direkt diesen Drittanbieter und fragen Sie, welche Cookies
                                platziert wurden, was der Grund dafür war, wie lange der Cookie bestehen bleibt und auf welche Weise Ihre Privatsphäre
                                geschützt wird.


                            <h3>IHRE RECHTE IN BEZUG AUF IHRE DATEN</h3>

                            <p>Yieldlove betrachtet die Daten der Werbebanner nicht als personenbezogene Daten gemäß geltendem Recht. Ebenso
                                sammelt oder verarbeitet yieldlove keine sensiblen persönlichen Daten wie Daten über Rasse oder ethnische Herkunft,
                                politische Meinungen, religiöse oder philosophische Überzeugungen, Gewerkschaftsmitgliedschaft, Gesundheit oder
                                Sexualleben. Darüber hinaus sammelt yieldlove wissentlich auch keine Daten von Kindern unter 12 Jahren.

                            <p>Wenn Sie die von yieldlove zur Verfügung gestellten Werbebannerdaten korrigieren, aktualisieren oder löschen
                                möchten oder wenn Sie die personenbezogenen Daten, die Sie yieldlove über das Kontaktformular auf yieldloves Homepage
                                zur Verfügung gestellt haben, korrigieren, aktualisieren oder löschen möchten, können Sie yieldlove kontaktieren per
                                E-Mail an datenschutzbeauftragter@stroeer.de.

                            <p>Yieldlove nimmt an den Selbstregulierungs-Programmen der European Digital Advertising Alliance (EDAA) teil und hält sich
                                an die EDAA-Prinzipien für Online Behavioral Advertising. Die EDAA fungiert hauptsächlich als zentrale Lizenzierungsstelle
                                für das OBA-Symbol und bietet den Verbrauchern technische Möglichkeiten, Transparenz und Kontrolle über OBA über die
                                Online-Plattform für Verbraucherwahl von youronlinechoices.eu auszuüben. Die EDAA wird von Organisationen auf EU-Ebene
                                geregelt, die die Wertschöpfungskette der OBA in Europa bilden und die europäische Konsistenz in der Vorgehensweise sicherstellen.
                                <a href="http://www.edaa.eu/">Klicken Sie hier</a>, um mehr über die EDAA zu erfahren.

                            <p>Wenn Sie Fragen und / oder Kommentare haben oder eine Beschwerde im Bereich Werbung einreichen möchten,
                                kontaktieren Sie uns oder yieldlove per E-Mail unter datenschutzbeauftragter@stroeer.de.

                        </li>
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

                            <p><b>Analysis cookies</b><br>
                                yieldlove uses analysis cookies in order to be able to record the usage behavior (eg clicked advertising banners,
                                visited sub-pages, made search queries) of our users and to evaluate them in statistical form.

                            <p><b>Advertising cookies</b><br>
                                yieldlove also uses cookies for promotional purposes. Usage profiles created using these cookies (eg, clicked 
                                banner ads, visited subpages, requested search queries) are used by us to show you advertisements or offers 
                                that are tailored to your interests ("interest-based advertising").

                            <p><b>Advertising cookies of third parties</b><br>
                                yieldlove also allows other companies to collect our users' data through advertising cookies.
                                This allows yieldlove and third parties to provide users of our online service with interest-based 
                                advertising based on an analysis of their usage behavior (eg, clicked banner ads, visited 
                                subpages, requested search queries), and not limited to our online offerings.


                            <p>Yieldlove delivers advertising banners on behalf of its customers. All our banners use cookies. yieldlove places
                                these banners on third-party websites, such as a news page or languagetool.org, with the help of third-party providers.

                            <p>For diagnostic purposes, troubleshooting, and detecting fraudulent behavior, yieldlove collects user information 
                                in cookies using yieldlove's 6-month lifecycle. The captured user information includes user agent, 
                                device, HTTP referrer and the IP. This data is not retained for more than 7 days.

                            <p>Yieldlove takes reasonable steps to protect any information yieldlove processs from misuse, loss,
                                unauthorized access, modification or notification. yieldlove takes physical, electronic and procedural 
                                security measures to protect the data yieldlove processes. By doing so, yieldlove restricts access to this 
                                information to authorized employees.

                            <p>For the cookies that our third-party advertisers place for advertising purposes, yieldlove refers to 
                                the disclaimers that they have provided on the topic on their own websites. Note that
                                yieldlove can only refer to these disclaimers, as they change regularly and Yieldlove has no control over them.



                            <p><b>THIRD PARTIES AND OPT-OUT</b>

                            <p>A central contradiction possibility for different third-party suppliers in particular US-companies is also
                                attainable under the following link: <a href="http://optout.networkadvertising.org">optout.networkadvertising.org</a> But you can also opt-out separately 
                                for each company we work with. Responsible for the data collection and for the delivery of interest 
                                based-based online advertising are the following companies on behalf of Yieldlove GmbH:



                            <p><b>4w Marketplace</b><br>
                                4w Marketplace (www.4wmarketplace.com) uses technologies, to show interest-based advertising to you. Provider of 4w Marketplace is 4w Marketplace srl located in Fisciano (Salerno) – 84084 in Via Giovanni Paolo II n.100. In case you would like to prevent 4w Marketplace from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.4wmarketplace.com/privacy/">www.4wmarketplace.com/privacy/</a>
                                <br>Opt-out: <a href="http://www.youronlinechoices.com/it/le-tue-scelte">www.youronlinechoices.com/it/le-tue-scelte</a>


                            <p><b>Adform</b><br>
                                Adform (www.adform.com) uses technologies, to show interest-based advertising to you. Provider of Adform is Adform located in Wildersgade 10B, 1, 1408 Copenhagen, Denmark. In case you would like to prevent Adform from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://site.adform.com/privacy-policy-opt-out/">site.adform.com/privacy-policy-opt-out/</a>
                                <br>Opt-out: <a href="http://site.adform.com/privacy-policy-opt-out/">site.adform.com/privacy-policy-opt-out/</a>


                            <p><b>Amazon</b><br>
                                Amazon (https://www.aps.amazon.com) uses technologies, to show interest-based advertising to you. Provider of Amazon publisher services is Amazon publisher services located in Washington – 410 Terry Ave. North, Seattle, WA 98109-5210. In case you would like to prevent Amazon publisher services from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&nodeId=468496">www.amazon.com/gp/help/customer/display.html/ref=hp_left_sib?ie=UTF8&nodeId=468496</a>
                                <br>Opt-out: <a href="https://www.amazon.com/adprefs/ref</a>=hp_468496_advertisingpref2">www.amazon.com/adprefs/ref=hp_468496_advertisingpref2</a>


                            <p><b>AppNexus</b><br>
                                AppNexus (https://www.appnexus.com) uses technologies, to show interest-based advertising to you. Provider of AppNexus is AppNexus Group located in in New York – 28 W. 23rd  Street, New York, New York, 10010. In case you would like to prevent Appnexus from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.appnexus.com/en/company/privacy-policy">www.appnexus.com/en/company/privacy-policy</a>
                                <br>Opt-out: <a href="http://www.appnexus.com/en/company/platform-privacy-policy#choices">www.appnexus.com/en/company/platform-privacy-policy#choices</a>


                            <p><b>Conversant</b><br>
                                Conversant (https://www.conversantmedia.com) uses technologies, to show interest-based advertising to you. Provider of Conversant is Conversant inc. located in in Chicago (IL) – 101 North Wacker, 23rd  Floor Chicago, IL 60606. In case you would like to prevent Conversant from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.conversantmedia.com/legal/privacy">www.conversantmedia.com/legal/privacy</a>
                                <br>Opt-out: <a href="http://optout.conversantmedia.com/">optout.conversantmedia.com/</a>


                            <p><b>Criteo</b><br>
                                Criteo (https://www.criteo.com) uses technologies, to show interest-based advertising to you. Provider of Criteo is Criteo located in Paris – 32 Rue Blanche – 75009 Paris - France. In case you would like to prevent Criteo from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.criteo.com/privacy/">www.criteo.com/privacy/</a>
                                <br>Opt-out: <a href="http://www.criteo.com/privacy/">www.criteo.com/privacy/</a>


                            <p><b>District M</b><br>
                                District M (https://districtm.net) uses technologies, to show interest-based advertising to you. Provider of District M is District M located in Montreal – 5455 Gaspe Ave #730, Montreal, QC H2T 3B3, Canada. In case you would like to prevent District M from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://districtm.net/en/page/platforms-data-and-privacy-policy/">districtm.net/en/page/platforms-data-and-privacy-policy/</a>
                                <br>Opt-out: <a href="http://cdn.districtm.ca/optout.html">cdn.districtm.ca/optout.html</a>


                            <p><b>Doubleclick</b><br>
                                Doubleclick (www.doubleclickbygoogle.com) uses technologies, to show interest-based advertising to you. Provider of Doubleclick is Google located in Ireland Limited, Gordon House, Barrow St Dublin 4 Ireland. In case you would like to prevent Doubleclick from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.google.com/intl/en/policies/privacy/">www.google.com/intl/en/policies/privacy/</a>
                                <br>Opt-out: <a href="http://adssettings.google.com/authenticated?hl=en">adssettings.google.com/authenticated?hl=en</a>

                            
                            <p><b>Facebook</b><br>
                                Facebook (www.facebook.com) uses technologies, to show interest-based advertising to you. Provider of Facebook is Facebook Inc., located in 1601 S. California Ave, Palo Alto, CA 94304, USA. In case you would like to prevent Facebook from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.facebook.com/full_data_use_policy">www.facebook.com/full_data_use_policy</a>
                                <br>Opt-out: <a href="http://www.facebook.com/ads/preferences">www.facebook.com/ads/preferences</a>


                            <p><b>Indexexchange</b><br>
                                Indexexchange (www.indexexchange.com) uses technologies, to show interest-based advertising to you. Provider of Indexexchange is Indexexchange located in New York – 20 W 22nd  St. Suite 1101, New York, NY 10010. In case you would like to prevent Indexexchange from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.indexexchange.com/privacy/">www.indexexchange.com/privacy/</a>
                                <br>Opt-out: <a href="http://optout.networkadvertising.org/">optout.networkadvertising.org/</a>?c=1#!/


                            <p><b>Media.net</b><br>
                                Media.net (http://www.media.net/privacy-policy) uses technologies, to show interest-based advertising to you. Provider of Media.net is Media.net Advertising Ltd. located in Dubai – 107/108, DIC Building 5, Dubai Internet City, Dubai, 215028, United Arab Emirates. In case you would like to prevent Media.net from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.media.net/privacy-policy">www.media.net/privacy-policy</a>
                                <br>Opt-out: <a href="http://www.networkadvertising.org/choices/">www.networkadvertising.org/choices/</a>


                            <p><b>Oath</b><br>
                                Oath (https://www.oath.com/) uses technologies, to show interest-based advertising to you. Provider of Oath is Oath (EMEA) Limited located in Dublin - 5-7 Point Square, North Wall Quay. In case you would like to prevent Oath from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://privacy.aol.com/">privacy.aol.com/</a>
                                <br>Opt-out: <a href="http://aim.yahoo.com/aim/ie/en/optout/">aim.yahoo.com/aim/ie/en/optout/</a>


                            <p><b>OpenX</b><br>
                                OpenX (https://www.OpenX.com) uses technologies, to show interest-based advertising to you. Provider of OpenX is OpenX located in Pasadena – 888 E Walnut St, 2nd Floor, Pasadena CA, 91101, USA. In case you would like to prevent OpenX from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.openx.com/de_de/privacy-policy/">www.openx.com/de_de/privacy-policy/</a>
                                <br>Opt-out: <a href="http://www.openx.com/legal/interest-based-advertising/">www.openx.com/legal/interest-based-advertising/</a>


                            <p><b>Pubmatic</b><br>
                                Pubmatic (https://www.pubmatic.com) uses technologies, to show interest-based advertising to you. Provider of Pubmatic is Pubmatic, Inc. located in Redwood City – 305 Main Street, First Floor, Redwood City, California 94063, USA. In case you would like to prevent Pubmatic from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.openx.com/de_de/privacy-policy/">www.openx.com/de_de/privacy-policy/</a>
                                <br>Opt-out: <a href="http://pubmatic.com/legal/opt-out/">pubmatic.com/legal/opt-out/</a>


                            <p><b>Pulsepoint</b><br>
                                Pulsepoint (https://www.pulsepoint.com) uses technologies, to show interest-based advertising to you. Provider of Pulsepoint is Pulsepoint, Inc. located in New York – 360 Madison Avenue, 14th Floor, New York, NY 10017. In case you would like to prevent Pulsepoint from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.pulsepoint.com/privacy-policy">www.pulsepoint.com/privacy-policy</a>
                                <br>Opt-out: <a href="http://optout.networkadvertising.org/">optout.networkadvertising.org/</a>?c=1#!/


                            <p><b>Reachnet</b><br>
                                Reachnet (https://www.reachnet.de) uses technologies, to show interest-based advertising to you. Provider of Reachnet is Reachnet DE Ltd. located in Hamburg – Grindelallee 41, D-20146 Hamburg. In case you would like to prevent Reachnet from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.reachnet.de/unternehmen/agb.html">www.reachnet.de/unternehmen/agb.html</a>
                                <br>Opt-out: <a href="http://adfarm1.adition.com/opt">adfarm1.adition.com/opt</a>?m=optout&n=73


                            <p><b>Rubicon Project</b><br>
                                Rubicon Project (https://www.rubiconproject.com) uses technologies, to show interest-based advertising to you. Provider of Rubicon Project is Rubicon Project, inc. located in Playa Vista – 12181 Bluff Creek Drive, 4th Floor, Playa Vista, CA 90094, USA. In case you would like to prevent Rubicon Project from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.rubiconproject.com/privacy-policy/">www.rubiconproject.com/privacy-policy/</a>
                                <br>Opt-out: <a href="http://rubiconproject.com/privacy/consumer-online-profile-and-opt-out/">rubiconproject.com/privacy/consumer-online-profile-and-opt-out/</a>


                            <p><b>Primis</b><br>
                                Primis (https://www.primis.tech) uses technologies, to show interest-based advertising to you. Provider of Primis is Primis LTD located in 622 Third avenue, McCann New York House 10017 New York City, USA. In case you would like to prevent Primis from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf">www.primis.tech/wp-content/uploads/2018/02/primisPrivacyPolicy2018.pdf</a>
                                <br>Opt-out: <a href="http://live.sekindo.com/utils/cookieOptOut.php">live.sekindo.com/utils/cookieOptOut.php</a>


                            <p><b>Smaato</b><br>
                                Smaato (https://www.smaato.com) uses technologies, to show interest-based advertising to you. Provider of Smaato is Smaato Ad Services located in Hamburg – Valentinskamp 70, Emporio, 20355 Hamburg, Germany. In case you would like to prevent Smaato from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.smaato.com/privacy/">www.smaato.com/privacy/</a>
                                <br>Opt-out: <a href="http://www.youronlinechoices.eu">www.youronlinechoices.eu</a>


                            <p><b>SmartAdserver</b><br>
                                SmartAdserver (https://www.smartadserver.com) uses technologies, to show interest-based advertising to you. Provider of SmartAdserver is SmartAdserver located in Paris – 66 Rue de la Chaussée d´Antin, 75009 Paris, France. In case you would like to prevent SmartAdserver from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://smartadserver.com/company/privacy-policy/">smartadserver.com/company/privacy-policy/</a>
                                <br>Opt-out: <a href="http://www.smartadserver.com/diffx/optout/IABOptout.aspx">www.smartadserver.com/diffx/optout/IABOptout.aspx</a>

                            
                            <p><b>Sovrn</b><br>
                                Sovrn (https://www.sovrn.com) uses technologies, to show interest-based advertising to you. Provider of Sovrn is Sovrn Holdings, Inc. located in Boulder – 5541 Central Avenue, Boulder, CO 80301. In case you would like to prevent Sovrn from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.sovrn.com/privacy-policy-eu/">www.sovrn.com/privacy-policy-eu/</a>
                                <br>Opt-out: <a href="http://info.evidon.com/pub_info/15620?v=1&nt=0&nw=false">info.evidon.com/pub_info/15620?v=1&nt=0&nw=false</a>


                            <p><b>Ströer SSP</b><br>
                                Ströer SSP (https://www.adscale.de) uses technologies, to show interest-based advertising to you. Provider of Ströer SSP is Ströer media Deutschland GmbH located in Köln – 50999 Köln, Ströer-Allee 1. In case you would like to prevent Adscale from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.adscale.de/datenschutz">www.adscale.de/datenschutz</a>
                                <br>Opt-out: <a href="http://ih.adscale.de/adscale-ih/oo">ih.adscale.de/adscale-ih/oo</a>


                            <p><b>Twiago</b><br>
                                Twiago (https://www.twiago.com) uses technologies, to show interest-based advertising to you. Provider of Twiago is Twiago located in Köln – Gustav-Heinemann-Ufer 72b, 50968 Köln. In case you would like to prevent Twiago from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.twiago.com/datenschutz/">www.twiago.com/datenschutz/</a>
                                <br>Opt-out: <a href="http://control.twiago.com/privacy.php?lang=0">control.twiago.com/privacy.php?lang=0</a>


                            <p><b>Mopub</b><br>
                                Mopub (https://www.mopub.com) uses technologies, to show interest-based advertising to you. Provider of Mopub is Twitter, Inc. located in San Francisco – 1355 Market Street, Suite 900, San Francisco, Ca 94103. In case you would like to prevent Moppub from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.mopub.com/legal/privacy/">www.mopub.com/legal/privacy/</a>
                                <br>Opt-out: <a href="http://www.mopub.com/legal/privacy/">www.mopub.com/legal/privacy/</a>


                            <p><b>Inmobi</b><br>
                                Inmobi (https://www.inmobi.com) uses technologies, to show interest-based advertising to you. Provider of Inmobi is Inmobi Pte Ltd located in Bangalore – Embassy Tech Square, Kadubeesanahalli Village Outer Ring Road, Varthur Hobli, Bangalore 560103. In case you would like to prevent Inmobi from gathering anonymised data you can do so by using the opt-out link below. This Opt-out cookie deletes all gathered information until now and prevents it from collecting any information in the future.
                                <br>Privacy Policy: <a href="http://www.inmobi.com/privacy-policy/">www.inmobi.com/privacy-policy/</a>
                                <br>Opt-out: <a href="http://www.inmobi.com/page/opt-out/">www.inmobi.com/page/opt-out/</a>


                            <h3>OTHER / UNFORESEEN COOKIES</h3>

                            <p>Due to the way in which Internet and websites work, it is possible that yieldlove does not always have
                                oversight into the cookies that are placed through our banners by third parties. This is 
                                particularly the case when our banners contain embedded elements such as texts, documents,
                                images or film clips that are stored by another party, but that are shown on, in or 
                                through our banners.
                                Should you encounter cookies on this website that fall into this category which yieldlove 
                                have not mentioned above, please let us or yieldlove know or contact the third party directly and 
                                ask which cookies they have placed, what the reason for this is, what the lifetime 
                                of the cookie is and in what way they have safeguarded your privacy.

                            <h3>YOUR RIGHTS WITH REGARDS TO YOUR DATA</h3>
                                Yieldlove does not view the banner advertising data it uses as personal data under the
                                applicable law. Likewise, yieldlove does not collect or process sensitive personal data such as data 
                                on racial or ethnic origin, political opinions, religious or philosophical beliefs, 
                                trade union membership, health, or sex life. yieldlove also does not knowingly collect 
                                data from children under the age of 12.
                                However, if you want to correct, update or delete the banner advertising data yieldlove has,
                                or if you would like to correct, update or delete the personal data that you have provided 
                                to yieldlove via the contact form on our homepage, you can contact us or yieldlove by e-mail at datenschutzbeauftragter@stroeer.de.

                            <h3>EDAA</h3>

                                yieldlove participates in the European Digital Advertising Alliance (EDAA) self-regulatory 
                                programs and adhere to the EDAA Principles for Online Behavioral Advertising. 
                                EDAA principally acts as the central licensing body for the OBA Icon and provides 
                                technical means for consumers to exercise transparency and control over OBA through 
                                the youronlinechoices.eu online consumer choice platform. EDAA is governed by 
                                EU-level organisations which make up the value chain of OBA within Europe and 
                                acts to ensure European consistency in approach. <a href="http://www.edaa.eu/">Click here</a> to learn more about the EDAA.

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
