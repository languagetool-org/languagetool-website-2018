<div id="stage" class="start">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="nav editor-nav">
                    <!--
                    <a class="subscription jump_menu" type="button" href="#subscription">
                        <?=__('messages.subscription')?>
                    </a>
                    -->
                    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Chrome/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                        <a class="ff-chrome jump_menu" type="button" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji" target="_blank">
                            <?=__('messages.chromeAddon')?>
                        </a>
                        <!-- TODO: activate inline installation
                        <a class="ff-chrome jump_menu" type="button" onclick="return installChromeExtension('calltoaction')" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">
                            <?=__('messages.chromeAddon')?>
                        </a>
                        -->
                    <?php } else if (strpos($_SERVER['HTTP_USER_AGENT'], "Firefox/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                        <a class="ff-chrome jump_menu" type="button" href="https://addons.mozilla.org/firefox/addon/languagetool/?src=external-lt-homepage" target="_blank">
                            <?=__('messages.ffAddon')?>
                        </a>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </div>

    <div class="inner">
        <div id="editor">
            <div class="inner">
                <noscript class="warning"><?=__('messages.javascript_needed')?></noscript>
                <form id="checkform" class="" name="checkform" action="#" method="post">
                    <div id="handle">
                        <div id="feedbackMessage"></div>
                    </div>
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
                        <div id="editor_controls">
                            <div id="feedbackErrorMessage"></div>

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
                                        foreach ($checkLanguage as $key => $val) {
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
                                    <button class="btn-lt editor_controls_group_item editor_controls_premium" type="submit"
                                            onClick="window.location = window.location.origin + window.location.pathname + '#premium';return false;">
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
        <?=__('messages.improved_error_detection2_example')?>
    </span>
        <span id="improved_error_detection3_example">
        <?=__('messages.improved_error_detection3_example')?>
    </span>
        <span id="improved_error_detection4_example">
        <?=__('messages.improved_error_detection4_example')?>
    </span>
        <span id="api_access_detail">
        <?=__('messages.api_access_detail')?>
    </span>
</div>