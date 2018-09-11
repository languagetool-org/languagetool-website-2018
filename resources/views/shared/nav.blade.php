<div id="header">
    
    <div class="container">
        <div class="header-nav">
            <div class="header-nav-brand">
                <div id="logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.svg') }}" alt="LanguageTool logo">
                    </a>
                </div>
                <div class="head-brand">
                    <a class="" href="{{ url('/') }}">
                        <span class="head-brand-name">LanguageTool</span><br>
                        <span class="head-brand-slogan">{{__('messages.tagline')}}</span>
                    </a>
                </div>
            </div>
            <div class="header-nav-menu mobile-toggle" data-menu="main">
                <a class="about header-nav-menu-item">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.menu')?>
                        <img src="{{ asset('images/icon-arrow-white.svg') }}">
                    </span>
                </a>
            </div>
            <nav class="header-nav-menu links">
                <!--
                <a class="about jump_menu header-nav-menu-item" href="#About">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_about')?>
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                -->
                @isset ($selectedLang)
                    <a class="pricing jump_menu header-nav-menu-item" href="#Price">
                        <span class="header-nav-menu-item-label">
                            <?=__('messages.nav_price')?>
                        </span>
                    </a>
                @else
                    <a class="pricing jump_menu header-nav-menu-item" href="/#Price">
                        <span class="header-nav-menu-item-label">
                            <?=__('messages.nav_price')?>
                        </span>
                    </a>
                @endisset
                <span class="header-nav-menu-item">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_addons')?>
                        <img src="{{ asset('images/icon-arrow-white.svg') }}">
                    </span>
                    <div class="header-nav-menu-item-dropdown">
                            @isset ($selectedLang)
                            <a class="ms_office jump_menu header-nav-menu-item-dropdown-item" href="/{{ $selectedLang == 'en' ? '' : $selectedLang.'/' }}#add-on">
                                <span><?=__('messages.nav_ms_office')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/{{ $selectedLang == 'en' ? '' : $selectedLang.'/' }}#libreoffice">
                                <span><?=__('messages.nav_libreoffice')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/{{ $selectedLang == 'en' ? '' : $selectedLang.'/' }}#firefox_chrome">
                                <span><?=__('messages.nav_browse_ad')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/{{ $selectedLang == 'en' ? '' : $selectedLang.'/' }}#google_docs">
                                <span><?=__('messages.nav_google_docs')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/{{ $selectedLang == 'en' ? '' : $selectedLang.'/' }}#more">
                                <span><?=__('messages.nav_more')?></span>
                            </a>
                        @else
                            <a class="ms_office jump_menu header-nav-menu-item-dropdown-item" href="/#add-on">
                                <span><?=__('messages.nav_ms_office')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/#libreoffice">
                                <span><?=__('messages.nav_libreoffice')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/#firefox_chrome">
                                <span><?=__('messages.nav_browse_ad')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/#google_docs">
                                <span><?=__('messages.nav_google_docs')?></span>
                            </a>
                            <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="/#more">
                                <span><?=__('messages.nav_more')?></span>
                            </a>
                        @endisset
                    </div>
                </span>
                <a class="forum jump_menu header-nav-menu-item" href="https://forum.languagetool.org">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_forum')?>
                    </span>
                </a>
                <a class="development jump_menu header-nav-menu-item" href="/dev">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_development')?>
                    </span>
                </a>
            </nav>
            @isset ($isLandingPage)
            <nav class="header-nav-menu langs">
                <span class="header-nav-menu-item" data-menu="languages">
                    <span class="header-nav-menu-item-label">
                        @isset ($langs[$selectedLang])
                            {{ $langs[$selectedLang] }}
                        @else
                            English
                        @endisset
                        <img src="{{ asset('images/icon-arrow-white.svg') }}">
                    </span>
                    <div class="header-nav-menu-item-dropdown">
                        <?php
                        $origLocale = App::getLocale();
                        ?>
                        @foreach ($langs as $key => $lang)
                            <?php
                            App::setLocale($key);
                            ?>
                            @if ($key != $selectedLang && in_array($key, $languagesWithPage))
                                @if ($key == "en")
                                    <a class="header-nav-menu-item-dropdown-item" href="/"><span>{{__('messages.langs.'.$key)}}</span></a>
                                @else
                                    <a class="header-nav-menu-item-dropdown-item" href="/{{ $key }}/"><span>{{__('messages.langs.'.$key)}}</span></a>
                                @endif
                            @elseif($key == $selectedLang)
                                <span class="header-nav-menu-item-dropdown-item active-lang">
                                    <img src="{{ asset('images/icon-check.svg') }}">
                                    {{ str_replace(" ", "&nbsp;", $lang) }}
                                </span>
                            @endif
                        @endforeach
                        <?php
                        App::setLocale($origLocale);
                        ?>
                        <a href="/languages" class="header-nav-menu-item-dropdown-item" style="margin-top: 10px">{{__('messages.menu_overview')}}</a>
                    </div>
                </span>
            </nav>
            @endif
        </div>
    </div>

</div>

<div id="dialog"></div>