$(document).ready(function() {
    if (navigator.userAgent.indexOf("Android") === -1) {
        if (navigator.userAgent.indexOf("Chrome/") !== -1) {
            $('#nav').append('<a onclick="return installChromeExtension()" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">Add to Chrome</a>');
        } else if (navigator.userAgent.indexOf("Firefox/") !== -1) {
            $('#nav').append('<a href="https://addons.mozilla.org/firefox/addon/languagetool?src=external-lt-homepage">Add to Firefox</a>');
        }
    }

    $('.mobile-toggle').on('click', function() {
        $('body').toggleClass('menu-open');
    });
});

function installChromeExtension() {
    if ($('#extension-is-installed').length > 0) {  // requires 0.8.7 or later of the extension to work
        alert("Looks like the extension is installed already. Look for the 'LT' icon with a blue underline.");
    } else {
        chrome.webstore.install();
        if (typeof(_paq) !== 'undefined') {  // Piwik tracking
            _paq.push(['trackEvent', 'Extension', 'InstallChromeExtension']);
        }
        //debug: chrome.webstore.install('', function() {alert('success');}, function(e) {alert('fail:'+e);});
    }
    return false;
}

// translation of language variant names:
var lt_i18n = {
    'de': {
        'DE': 'Deutschland',
        'AT': 'Österreich',
        'CH': 'Schweiz'
    }
};

function fillSubLanguageSelect(langCode) {
    //console.log("fillSubLanguageSelect " + langCode);

    // 'auto' doesn't work in MSIE, so we switch manually:
    if (langCode === 'fa') {
        tinymce.get('checktext').getBody().dir = "rtl";
    } else {
        tinymce.get('checktext').getBody().dir = "ltr";
    }

    var subLang = $('#subLang');
    subLang.find('option').remove();
    // For languages that have variants, offer those in a different select:
    // NOTE: keep in sync with checkform.php!
    var langToSubLang = {
        'en': [
            {code: 'US', name: 'American'},
            {code: 'GB', name: 'British'},
            {code: 'ZA', name: 'South Africa'},
            {code: 'CA', name: 'Canada'},
            {code: 'AU', name: 'Australia'},
            {code: 'NZ', name: 'New Zealand'}
        ],
        'de': [
            //{code: 'DE', name: 'Germany'},
            //{code: 'AT', name: 'Austria'},
            //{code: 'CH', name: 'Switzerland'}
            {code: 'DE', name: 'Deutschland'},
            {code: 'AT', name: 'Österreich'},
            {code: 'CH', name: 'Schweiz'}
        ],
        'pt': [{code: 'PT', name: 'Portugal'}, {code: 'BR', name: 'Brazil'}, {code: 'AO', name: 'Angola'}, {code: 'MZ', name: 'Mozambique'}],
        'ca': [{code: 'ES', name: 'General'}, {code: 'ES-Valencia', name: 'Valencian'}]
    };
    if (langToSubLang[langCode]) {
        var subLangs = langToSubLang[langCode];
        var langCodeWithCountry = checkDefaultLangWithCountry;
        var langCountry = langCodeWithCountry.replace(/^.*-/, "").toUpperCase();
        var urlLang;
        if (window.location.href) {
            urlLang = window.location.href.replace(/.*\/(..)\/.*/, "$1");
            if (urlLang.length != 2) {
                urlLang = null;
            }
        }
        var i18n = lt_i18n[urlLang];
        //var i18n = lt_i18n['<?= $checkDefaultLang?>'];
        //var i18n = lt_i18n[langCode];
        subLangs.forEach(function(entry) {
            var displayName = entry.name;
            if (i18n && i18n[entry.code]) {
                displayName = i18n[entry.code];
            }
            if (entry.code == langCountry) {
                subLang.append($("<option selected/>").val(entry.code).text(displayName));
            } else {
                subLang.append($("<option />").val(entry.code).text(displayName));
            }
        });
        $('#subLangDropDown').show();
        subLang.dropkick('refresh');
    } else {
        $('#subLangDropDown').hide();
    }
}

function fullscreen_toggle() {
    if ($('form#checkform').hasClass('fullscreen')) {
        turnOffFullScreenView();
    } else {
        turnOnFullScreenView();
        if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'Action', 'SwitchToFullscreen']); } // Piwik tracking
    }
    return false;
}

function turnOffFullScreenView() {
    // re-init the editor - this way we lose the error markers, but it's needed
    // to get proper position of the context menu:
    // source: http://stackoverflow.com/questions/4651676/how-do-i-remove-tinymce-and-then-re-add-it
    tinymce.EditorManager.execCommand('mceRemoveControl',true, 'checktext');
    tinymce.EditorManager.execCommand('mceAddControl', true, 'checktext');
    $('form#checkform').removeClass('fullscreen');
    $('body').removeClass('fullscreen');
    tinymce.execCommand('mceFocus', false, 'checktext');
}

function turnOnFullScreenView() {
    tinymce.EditorManager.execCommand('mceRemoveControl',true, 'checktext');
    tinymce.EditorManager.execCommand('mceAddControl', true, 'checktext');
    $('body').addClass('fullscreen');
    $('form#checkform').addClass('fullscreen');
    $('iframe#checktext_ifr').height( $(window).height() - $('#editor_controls').outerHeight() - $('#handle').outerHeight() );
    tinymce.execCommand('mceFocus', false, 'checktext');
}

function doit(doLog) {
    document.checkform._action_checkText.disabled = true;
    var langCode = document.checkform.lang.value;
    if (document.checkform.subLang && document.checkform.subLang.value) {
        langCode = langCode.replace(/-..$/, "")  // en-US -> en
            + "-" + document.checkform.subLang.value;
    }
    if (doLog) {
        if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'Action', 'CheckText', langCode]); } // Piwik tracking
    }
    tinyMCE.activeEditor.execCommand('mceWritingImprovementTool', langCode);
    // save language as default for next visit:
    document.cookie = "lt-language=" + langCode + ";max-age=1314000";  // one year
}

function proofread() {
    var textarea = document.createElement('textarea')
    textarea.style.display = 'none';
    textarea.name = 'proofread_text';
    var langCode = document.checkform.lang.value;
    var $dummy = $("<div>").html(tinymce.activeEditor.getContent());
    if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'Action', 'ClickProofread', langCode]); } // Piwik tracking
    textarea.value = $dummy.text();
    document.checkform.action = '/human-proofreading/'
    document.checkform.appendChild(textarea);
}

function resize_buttons(){
    var max_height = 0;
    $('.button_container .title').each(function(){
        $(this).height('auto');
        if ($(this).height() > max_height) {
            max_height = $(this).height();
        }
    });
    $('.button_container .title').height(max_height);
}

function setDemoText() {
    var lang = $('#lang').val().replace(/-..$/, "");
    var demoText = languageToText[lang];
    if (demoText) {
        tinyMCE.activeEditor.setContent(demoText);
        doit();
    }
    return false;
}

$(function(){

    tinyMCE.init({
        mode : "textareas",
        plugins                     : "AtD,paste",
        //directionality              : 'auto',   // will display e.g. Persian in right-to-left -- doesn't work in MSIE

        //Keeps Paste Text feature active until user deselects the Paste as Text button
        paste_text_sticky : true,
        content_style: "@media (max-width: 750px) { body { margin: 8px 16px !important; } }",
        //select pasteAsPlainText on startup
        setup : function(ed) {
            ed.onInit.add(function(ed) {
                ed.pasteAsPlainText = true;
                if (document.checkform.lang.value) {
                    // needed so we don't get invalid lang + subLang combinations when
                    // user enters the page via back button:
                    fillSubLanguageSelect(document.checkform.lang.value.replace(/-..$/, ""));
                }
                doit();  // check immediately when entering the page
            });
            ed.onKeyDown.add(function(ed, e) {
                if (e.ctrlKey && e.keyCode == 13) {  // Ctrl+Return
                    doit(true);
                    tinymce.dom.Event.cancel(e);
                } else if (e.keyCode == 27) {   // Escape
                    // doesn't work in firefox, the re-init in turnOffFullScreenView()
                    // might clash with event handling:
                    if ($('form#checkform').hasClass('fullscreen')) {
                        setTimeout(turnOffFullScreenView, 100);  // use timeout to prevent problems on Firefox
                    }
                }
            });
            // remove any 'no errors found' message:
            ed.onKeyUp.add(function(ed, e) {
                if (!e.keyCode || e.keyCode != 17) {  // don't hide if user used Ctrl+Return
                    $('#feedbackMessage').html('');
                }
            });
            ed.onPaste.add(function(ed, e) {
                $('#feedbackMessage').html('');
            });
        },

        /* translations: */
        languagetool_i18n_no_errors :
            {
                // "No errors were found.":
                'ast': 'Nun s\'atoparon errores',
                'br': 'Fazi ebet.',
                'ca': 'No s\'ha trobat cap error',
                'de-DE': 'Keine Fehler gefunden.',
                'de-DE-x-simple-language': 'Keine möglichen Verstöße gegen Leichte Sprache gefunden.',
                'eo': 'Neniuj eraroj trovitaj.',
                'fr': 'Aucune erreur trouvée.',
                'nl': 'Geen aandachtspunten gevonden.',
                'pl': 'Nie znaleziono błędów',
                'pt': 'Não foram encontrados erros.',
                'ru': 'Ошибки не найдены.',
                'fake': 'last entry so all previous items can end with a comma'
            },
        languagetool_i18n_explain :
            {
                // "Explain..." - shown if there's an URL with a more detailed description:
                'ast': 'Más información…',
                'br': 'Muioc’h a ditouroù…',
                'ca': 'Més informació…',
                'de-DE': 'Mehr Informationen...',
                'de-DE-x-simple-language': 'Mehr Informationen...',
                'eo': 'Pliaj klarigoj…',
                'fr': 'Plus d’informations…',
                'nl': 'Uitleg...',
                'pl': 'Więcej informacji…',
                'pt': 'Explicação…',
                'ru': 'Подробнее…',
                'fake': 'last entry so all previous items can end with a comma'
            },

        languagetool_i18n_ignore_once :
            {
                // "Ignore this type of error" -- for non-spelling errors:
                'br': 'Na ober van ouzh fazi a seurt-se',
                'ca': 'Ignora aquesta classe d\'errors',
                'de-DE': 'Fehler dieser Art ignorieren',
                'de-DE-x-simple-language': 'Fehler dieser Art ignorieren',
                'eo': 'Ignori tiun tipon de eraro',
                'es': 'Ignorar este tipo de error',
                'fr': 'Ignorer ce type d’erreur',
                'nl': 'Negeer dergelijke fouten',
                'pl': 'Pomijaj błędy tego typu',
                'pt': 'Ignorar este tipo de erros',
                'sl': 'Prezri te vrste napako',
                'ru': 'Пропустить этот вид ошибок',
                'fake': 'last entry so all previous items can end with a comma'
            },
        languagetool_i18n_ignore_all :
            {
                // "Ignore error for this word" -- for spelling errors:
                'ca': 'Ignora l\'error d\'aquesta paraula',
                'de-DE': 'dieses Mal ignorieren',
                'de-DE-x-simple-language': 'Fehlermeldung für dieses Wort ignorieren',
                'eo': 'Ignori eraron por tiu vorto',
                'es': 'Ignorar el error para esta palabra',
                'fr': 'Ignorer l’erreur pour ce mot',
                'nl': 'Negeer deze spelfout',
                'pl': 'Pomijaj błąd w tym słowie',
                'pt': 'Ignorar erros para esta palavra',
                'sl': 'Prezri napako za to besedo',
                'ru': 'Игнорировать эту ошибку',
                'fake': 'last entry so all previous items can end with a comma'
            },

        add_to_dictionary : 
            {
                'de-DE': 'ins Wörterbuch aufnehmen'
            
            },

        added_to_dictionary : 
            {
                'de-DE': 'Wort ins Wörterbuch aufgenommen'
            
            },

        need_to_login: 
            {
                'de-DE': '(einloggen, um ins Wörterbuch aufzunehmen)'
            
            },

        languagetool_i18n_rule_examples :
            {
                // "Examples", i.e. examples of incorrect and correct sentences for the matching rule:
                'br': 'Skouerioù…',
                'ca': 'Exemples...',
                'de-DE': 'Beispiele...',
                'de-DE-x-simple-language': 'Beispiele...',
                'eo': 'Ekzemploj…',
                'fr': 'Exemples…',
                'pl': 'Przykłady...',
                'pt': 'Exemplos…',
                'ru': 'Примеры...',
                'sl': 'Primeri ...',
                'fake': 'last entry so all previous items can end with a comma'
            },

        languagetool_i18n_rule_no_examples :
            {
                // "Sorry, no examples found for this rule.":
                'ca': 'No s\'han trobat exemmples per a aquesta regla.',
                'de-DE': 'Leider wurden keine Beispiele für diese Regel gefunden.',
                'eo': 'Neniu ekzemplo trovita por tiu regulo.',
                'fr': 'Aucun exemple trouvé pour cette règle.',
                'pl': 'Niestety nie znaleziono żadnych przykładów',
                'pt': 'Não encontramos exemplos para esta regra.',
                'ru': 'Ни одного примера для этого правила не было найдено.',
                'sl': 'Žal za to napako ni primerov.',
                'fake': 'last entry so all previous items can end with a comma'
            },

        languagetool_i18n_rule_implementation :
            {
                // "Rule implementation":
                'ca': 'Implementació de la regla...',
                'de-DE': 'Technische Details...',
                'de-DE-x-simple-language': 'Technische Details...',
                'eo': 'Realigo de la regulo…',
                'fr': 'Implémentation de la règle…',
                'nl': 'De techniek erachter...',
                'pl': 'Dodatkowe informacje o regule…',
                'pt': 'Detalhes técnicos…',
                'ru': 'Описание реализации правила...',
                'sl': 'Implementacija pravila ...',
                'fake': 'last entry so all previous items can end with a comma'
            },

        languagetool_i18n_suggest_word :
            {
                // "Suggest word for dictionary...":
                // *** Also set languagetool_i18n_suggest_word_url below if you set this ***
                'ca': 'Suggereix una paraula per al diccionari...',
                'de-DE': 'Wort zur Aufnahme vorschlagen...',
                'eo': 'Sugesti vorton por la vortaro…',
                'fr': 'Suggerer un mot pour le dictionnaire…',
                'nl': 'Suggest word for dictionary...',
                'pl': 'Zaproponuj dodanie wyrazu do słownika...',
                'pt': 'Adicionar ao dicionário…',
                'ru': 'Предложить слово для словаря...',
                'fake': 'last entry so all previous items can end with a comma'
            },
        languagetool_i18n_suggest_word_url :
            {
                // "Suggest word for dictionary..." - if you add a community.languagetool.org URL,
                // ask Daniel for the password to the web tool that helps managing the suggestions:
                'ca': 'https://community.languagetool.org/suggestion?word={word}&lang=ca',
                'de-DE': 'https://community.languagetool.org/suggestion?word={word}&lang=de&email=off',
                'nl': 'http://www.opentaal.org/suggesties?word={word}',
                'pl': 'http://www.sjp.pl',
                'pt': 'https://community.languagetool.org/suggestion?word={word}&lang=pt',
                'ru': 'http://myooo.ru/index.php?option=com_addtodictsuggest&Itemid=135&word={word}',
                'fake': 'last entry so all previous items can end with a comma'
            },

        languagetool_i18n_current_lang :    function() { return document.checkform.lang.value; },
        /* the URL of your LanguageTool server or the URL of your proxy file: */
        languagetool_rpc_url                 : "https://languagetoolplus.com/api/v2/check",  // requires the server to be started with '--allow-origin ...'
        //languagetool_rpc_url                 : "http://localhost:8081/v2/check",
        /* edit this file to customize how LanguageTool shows errors: */
        languagetool_css_url                 : "/vendors/tiny_mce/plugins/atd-tinymce/css/content.css?v5",
        /* this stuff is a matter of preference: */
        theme                              : "advanced",
        theme_advanced_buttons1            : "",
        theme_advanced_buttons2            : "",
        theme_advanced_buttons3            : "",
        theme_advanced_toolbar_location    : "none",
        theme_advanced_toolbar_align       : "left",
        theme_advanced_statusbar_location  : "bottom",  // activated so we have a resize button
        theme_advanced_path                : false,     // don't display path in status bar
        theme_advanced_resizing            : true,
        theme_advanced_resizing_use_cookie : false,
        /* disable the gecko spellcheck since AtD provides one */
        gecko_spellcheck                   : false
    });

    prevLang = $('#lang').val().replace(/-..$/, "");
    
    $('#lang').dropkick({
        change: function (value, label) {
            //alert("!");
            value = value.replace(/-..$/, "");  // en-US -> en
            fillSubLanguageSelect(value);
            var newText = languageToText[value];  // 'languageToText' comes from default_texts.php
            var currentText = tinyMCE.activeEditor.getContent({format: 'text'});
            if (newText) {
                var oldDemoText = languageToText[prevLang];
                if (currentText.trim() === "" || currentText === oldDemoText) {
                    tinyMCE.activeEditor.setContent(newText);
                    tinyMCE.get('checktext').focus();
                    doit();
                    $('#feedbackMessage').html('');
                } else {
                    $('#feedbackMessage').html('<a href="#" onclick="return setDemoText()">Demo Text</a>');
                }
            } else {
                if (currentText.trim() === "" || currentText === oldDemoText || currentText === "Text hier einfügen" || currentText === "Add your text here") {
                    if (value === "de") {
                        tinyMCE.activeEditor.setContent("Text hier einfügen");
                    } else {
                        tinyMCE.activeEditor.setContent("Add your text here");
                    }
                }
                tinyMCE.get('checktext').focus();
                tinyMCE.activeEditor.selection.select(tinyMCE.activeEditor.getBody(), true);
                $('#feedbackMessage').html('');
            }
            prevLang = value;
        }
    });
    $('#subLang').dropkick({
        // TODO: this messes up the text - it gets called more than once after the main
        // language has been changed:
        /*change: function (value, label) {
            //doit();
        }*/
    });

    $(window).resize(function(){
        if ($('form#checkform').hasClass('fullscreen')) {
            $('iframe#checktext_ifr').height( $(window).height() - $('#editor_controls').outerHeight() );
        }
        resize_buttons();
    });
    resize_buttons();
});

$(document).ready(function() {
    $('#fbLogin').click(function(evt) {
        evt.preventDefault();
        swal({
            title: "Login with Facebook",
            text: "You will redirect to Facebook for authentication.",
            icon: "info",
            showConfirmButton: false
        });
        window.location.href = '/login/facebook';
    });
    $('#ggLogin').click(function(evt) {
        evt.preventDefault();
        swal({
            title: "Login with Google",
            text: "You will redirect to Google for authentication.",
            icon: "info",
            showConfirmButton: false
        });
        window.location.href = '/login/google';
    });
});

$(document).ready(function() {
    $('.explainFeature').tooltipster({
        delay: 10,
    	theme: ['tooltipster-shadow','tooltipster-shadow-customized'],
    	contentCloning: true,
    	maxWidth: 400,
    	trigger: 'hover'
    });
});

$(document).ready(function() {

    $('.errorMarker').each(function(){

        $(this).data('title', $(this).attr('title'));
        $(this).removeAttr('title');

    });

    $('.errorMarker').mouseover(function() {

        $('.errorMarker').next('.tooltip').remove();

        // create the tooltip
        if($(this).data('title') != ""){
            $(this).after('<span class="tooltip">' + $(this).data('title') + '</span>');
        }

        var left = $(this).position().left + $(this).width() + 4;
        var top = $(this).position().top +18;
        $(this).next().css('left',left);
        $(this).next().css('top',top);

    });

    $('.errorMarker').click(function(){

        $(this).mouseover();

        $(this).next().animate({opacity: 0.9},{duration: 4000, complete: function(){
            $(this).fadeOut(1000);
        }});

    });

    $('.errorMarker').mouseout(function(){

        $(this).next('.tooltip').remove();

    });

});

vex.defaultOptions.className = 'vex-theme-default';
