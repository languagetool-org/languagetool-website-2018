<div id="stage" class="start">

    <?php if ($_SERVER['REQUEST_URI'] == "/de/" || (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], "de") !== false) || $checkDefaultLang == "de") { ?>
    <div style="margin: 0 auto; text-align:center; font-size: 16px">
        <div style="width: 310px; background-color: white; margin: 0 auto; text-align:center; border-radius: 4px; padding: 5px">
            <a style="text-align:middle;color:black" class="ff-chrome jump_menu" href="/job/regel-entwickler">
                Job: Regel-Entwickler / Redakteur (m/w/d)
            </a>
        </div>
    </div>
    <?php } ?>

    <div class="inner">
        <div id="editor">
            <div class="inner">
                <noscript class="warning"><?=__('messages.javascript_needed')?></noscript>
                <form id="checkform" class="" name="checkform" action="#" method="post">
                    <div class="editorHeader">
                        <div class="editorHeaderLeft">
                            <h3><?=__('messages.header_title')?></h3>
                            <p><?=__('messages.header_subtitle')?></p>
                        </div>
                        <div class="editorHeaderRight">
                            <?php if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], "YaBrowser/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                                <a class="ff-chrome yandex jump_menu" type="button" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji" target="_blank">
                                    <?=__('messages.yandexAddon')?>
                                </a>
                                <a class="ff-chrome googleDocs jump_menu googleDocs--hidden" type="button" href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/kjcoklfhicmkbfifghaecedbohbmofkm" target="_blank">
                                    <?=__('messages.googleDocsAddon')?>
                                </a>
                            <?php } else if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], "OPR/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                                <a class="ff-chrome opera jump_menu" type="button" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji" target="_blank">
                                    <?=__('messages.operaAddon')?>
                                </a>
                                <a class="ff-chrome googleDocs jump_menu googleDocs--hidden" type="button" href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/kjcoklfhicmkbfifghaecedbohbmofkm" target="_blank">
                                    <?=__('messages.googleDocsAddon')?>
                                </a>
                            <?php } else if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], "Chrome/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                                <a class="ff-chrome chrome jump_menu" type="button" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji" target="_blank">
                                    <?=__('messages.chromeAddon')?>
                                </a>
                                <a class="ff-chrome googleDocs jump_menu googleDocs--hidden" type="button" href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/kjcoklfhicmkbfifghaecedbohbmofkm" target="_blank">
                                    <?=__('messages.googleDocsAddon')?>
                                </a>
                            <?php } else if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], "Firefox/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                                <a class="ff-chrome firefox jump_menu" type="button" href="https://addons.mozilla.org/firefox/addon/languagetool/?src=external-lt-homepage" target="_blank">
                                    <?=__('messages.ffAddon')?>
                                </a>
                                <a class="ff-chrome googleDocs jump_menu googleDocs--hidden" type="button" href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/kjcoklfhicmkbfifghaecedbohbmofkm" target="_blank">
                                    <?=__('messages.googleDocsAddon')?>
                                </a>
                            <?php } else if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false && strpos($_SERVER['HTTP_USER_AGENT'], "Mobi") === false) { ?>
                                <a class="ff-chrome googleDocs jump_menu" type="button" href="https://chrome.google.com/webstore/detail/grammar-and-spell-checker/kjcoklfhicmkbfifghaecedbohbmofkm" target="_blank">
                                    <?=__('messages.googleDocsAddon')?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="feedbackMessage"></div>
                    <div class="window">
                        <div class="fullscreen-toggle">
                            <a href="#" title="<?= $toggleFullscreenMode ?>"
                               onClick="fullscreen_toggle();return false;"></a>
                        </div>
                        <p id="checktextpara" style="margin: 0">
                            <?php if ($checkDefaultText == "") { ?>
                            <textarea id="checktext" name="text" style="width: 100%" rows="10"
                                      placeholder=""></textarea>
                            <?php } else { ?>
                            <textarea id="checktext" name="text" style="width: 100%"
                                      rows="10"><?= $checkDefaultText ?></textarea>
                            <?php } ?>
                        </p>
                        <div id="feedbackErrorMessage"></div>
                        <div id="feedbackPremiumMessage"></div>
                        <div id="editor_controls">
                            <div id="sentenceContributionMessage"></div>

                            <div class="editor_controls_items">
                                <div class="dropdown editor_controls_group">
                                    <select class="dropkick editor_controls_group_item" style="width: 100%" name="lang"
                                            id="lang">
                                        <?php
                                        function printLangOption($checkDefaultLang, $checkLanguage, $langCode)
                                        {
                                            if (strpos($langCode, '-') !== false) {
                                                // e.g. de-DE
                                                $shortLangCode = substr($langCode, 0, strpos($langCode, '-'));
                                                $checked = ($shortLangCode == $checkDefaultLang) ? " selected='selected'" : "";
                                            } else {
                                                $checked = ($langCode == $checkDefaultLang) ? " selected='selected'" : "";
                                            }

                                            $lang = $checkLanguage[$langCode];
                                            print "<option value=\"$langCode\" $checked>$lang</option>\n";
                                        }
                                        $sortedCheckLanguage = $checkLanguage;
                                        uksort($sortedCheckLanguage, function($a, $b) use ($checkLanguage) {
                                            if ($a == "auto") {
                                                return -1;
                                            }
                                            return strcasecmp($checkLanguage[$a], $checkLanguage[$b]); 
                                        });
                                        foreach ($sortedCheckLanguage as $key => $val) {
                                            printLangOption($checkDefaultLang, $checkLanguage, $key);
                                        }
                                        ?>
                                    </select>

                                    <?php
                                    $displayValue = "none";
                                    if ($checkDefaultLang == 'en' || $checkDefaultLang == 'de' || $checkDefaultLang == 'pt' || $checkDefaultLang == 'ca') {
                                        $displayValue = "flex";
                                    }
                                    ?>
                                    <div id="subLangDropDown" class="editor_controls_group_item"
                                         style="display: <?= $displayValue ?>;">
                                        <!-- NOTE: keep this in sync with header.php and the if() above: -->
                                        <select class="dropkick" name="subLang" id="subLang"
                                                style="width: 100%">
                                            <?php if ($checkDefaultLang == 'en') { ?>
                                            <option>US</option>
                                            <option>GB</option>
                                            <option>AU</option>
                                            <option>CA</option>
                                            <option>NZ</option>
                                            <option>ZA</option>
                                            <?php } else if ($checkDefaultLang == 'de') { ?>
                                            <option>DE</option>
                                            <option>AT</option>
                                            <option>CH</option>
                                            <?php } else if ($checkDefaultLang == 'pt') { ?>
                                            <option>PT</option>
                                            <option>BR</option>
                                            <option>AO</option>
                                            <option>MZ</option>
                                            <?php } else if ($checkDefaultLang == 'ca') { ?>
                                            <option>ES</option>
                                            <option>ES-Valencia</option>
                                            <?php }?>
                                        </select>
                                    </div>

                                </div>


                                <div class="submit editor_controls_group">
                                    <button class="btn-tb editor_controls_group_item" type="submit"
                                            onClick="tinyMCE.activeEditor.setContent('');tinyMCE.get('checktext').focus();return false;"
                                            title="<?=__('messages.delete_text')?>">
                                        <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <!--
                                    <button class="btn-tb" style="margin-right: 15px" type="button"
                                            id="suggestionsCount"
                                            title="<?=__('messages.synonyms_count')?>">
                                        0
                                    </button>
                                    -->
                                    <?php if (Auth::guest() || !Auth::user()->hasActivePremium()) { ?>
                                    <button id="upgradeButton" class="btn-lt editor_controls_group_item editor_controls_premium" type="submit"
                                            onClick="if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'UpgradeClick', '<?=$_SERVER['REQUEST_URI']?>']); } window.location = window.location.origin + window.location.pathname + '#premium';return false;">
                                        <?=__('messages.premium_upgrade')?>
                                    </button>
                                    <?php } ?>
                                    <button class="editor_controls_group_item" type="submit" name="_action_checkText"
                                            onClick="doit(true);return false;"
                                            title="<?=__('messages.check_text_title')?>">
                                        <?=__('messages.check_text_button')?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="start-ad-wrapper">
            <div class="start-ad">
                @include('shared/ad')
            </div>
        </div>
        
    </div>
</div>

<div class="tooltip_templates">
    <span id="improved_error_detection1_example">
        <?=__('messages.improved_error_detection1_example')?>
    </span>
        <span id="improved_error_detection2_example">
        Beispiel: "Sehr geehrte Frau Andreas Müller".
        &rarr;&nbsp; Das Geschlecht stimmt nicht mit der Anrede überein. 'Andreas' ist üblicherweise ein männlicher Vorname.
    </span>
    <span id="improved_error_detection3_example">
        <b>English example:</b> Man returns wallet he <span class="error-marker">fount</span>. &rarr;&nbsp;found
        <br>
        <b>Deutsches Beispiel:</b> Der nächste <span class="error-marker">Schrott</span> zum Klassenerhalt ist getan. &rarr;&nbsp;Schritt
    </span>
        <span id="improved_error_detection4_example">
        <?=__('messages.improved_error_detection4_example')?>
            <p>English:</p>
            <ul>
                <li>Create two strips with an <span class="error-marker">event</span> amount of wax on each strip. &rarr;&nbsp;even</li>
                <li>I'm <span class="error-marker">kinder</span> bored. &rarr;&nbsp;kind&nbsp;of</li>
                <li>I <span class="error-marker">don’t the</span> answer. &rarr;&nbsp;verb&nbsp;missing</li>
            </ul>

            <p>Deutsch:</p>
            <ul>
                <li><span class="error-marker">Da</span> Auto fährt schnell. &rarr;&nbsp;Das</li>
                <li>An <span class="error-marker">machen</span> Stellen könnte es eng werden. &rarr;&nbsp;manchen</li>
                <li>Ich kann ein Häuschen mit Garten mein <span class="error-marker">eigen</span> nennen. &rarr;&nbsp;Eigen</li>
            </ul>

    </span>
        <span id="api_access_detail">
        <?=__('messages.api_access_detail')?>
    </span>
</div>