@extends('layouts.app')

@section('title', 'Leichte Sprache - LanguageTool')

@section('content')
    <div id="textContent" class="content-section">
        <div id="languagesOverview">
            <div class="container">

                <h1>Leichte Sprache</h1>

                <p>Die Leichte Sprache ist eine besonders leicht verständliche Ausdrucksweise.
                Es existiert kein offizieller Standard, was genau Leichte Sprache ausmacht, es gibt zur Orientierung allerdings
                einige Regeln. Mit dieser Seite können Sie LanguageTool benutzen, um Texte gegen einige (nicht alle) dieser
                Regeln zu prüfen. Hier ist eine <a href="https://multisprech.org/einfache-sprache/einfach-schreiben/languagetool-leichte-sprache/">Übersicht der Regeln</a>. Mögliche Fehler werden farbig markiert. Durch Klick auf die markierten Wörter erhalten
                Sie eine genauere Beschreibung des möglichen Problems. Mehr Informationen zu Leichter Sprache finden Sie beim
                <a href="http://www.leichtesprache.org/">Netzwerk Leichte Sprache</a> und im Artikel
                <a href="http://www.melaniesiegel.de/publications/2014_tekom_Lieske-Siegel.pdf">Verstehen leicht gemacht</a>.</p>

                <div style="width: 90%;padding-top:15px;padding-bottom:0;">
                    <div style="width:90%;margin: auto;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);border-radius:5px;padding-top:4px">

                        <form id="checkform" class="" name="checkform" action="#" method="post">
                            <div id="handle"><div id="feedbackMessage"></div></div>
                            <div class="window">
                                <div class="fullscreen-toggle">
                                    <a href="#" title="toggle fullscreen mode" onClick="fullscreen_toggle();return false;"></a>
                                </div>
                                <p id="checktextpara" style="margin: 0;">
                                    <textarea id="checktext" name="text" style="width: 100%" rows="10">Fügen Sie hier Ihren Text ein oder benutzen Sie diesen Text als Beispiel. Dieser Text wurde nur zum Testen geschrieben. Die Donaudampfschifffahrt darf da nicht fehlen. Und die Nutzung des Genitivs auch nicht.</textarea>
                                </p>
                                <div id="editor_controls">
                                    <div id="feedbackErrorMessage"></div>
                                    <div id="sentenceContributionMessage"></div>
                                    <div class="dropdown" style="display: none">
                                        <select class="dropkick" name="lang" id="lang">
                                            <option value="de-DE-x-simple-language" >Deutsch, Leichte Sprache</option>
                                        </select>
                                        <div id="subLangDropDown" style="display: none;float:left;margin-left:6px">
                                            <select class="dropkick" name="subLang" id="subLang">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="submit">
                                        <span style="margin-right: 15px;" id="matchCountArea"></span>
                                        <button type="submit" name="_action_checkText"
                                                onClick="doit(true);return false;" title="">
                                            Text prüfen
                                        </button>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                        
            </div>

        </div>
    </div>

@endsection
