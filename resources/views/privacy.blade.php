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
