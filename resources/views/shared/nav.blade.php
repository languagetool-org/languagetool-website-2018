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
            <div class="header-nav-menu mobile-toggle">
                <a class="about header-nav-menu-item">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.menu')?>
                        <i class="fa fa-angle-down"></i>
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
                <a class="pricing jump_menu header-nav-menu-item" href="/#Price">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_price')?>
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                <span class="header-nav-menu-item">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_addons')?>
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-right"></i>
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
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                <a class="development jump_menu header-nav-menu-item" href="/development">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_development')?>
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </nav>
            @isset ($isLandingPage)
            <nav class="header-nav-menu langs">
                <span class="header-nav-menu-item">
                    <span class="header-nav-menu-item-label">
                        @isset ($langs[$selectedLang])
                            {{ $langs[$selectedLang] }}
                        @else
                            English
                        @endisset
                        <i class="fa fa-angle-down"></i>
                    </span>
                    <div class="header-nav-menu-item-dropdown">
                        @foreach ($langs as $key => $lang)
                            @if ($key != $selectedLang && in_array($key, $languagesWithPage))
                                @if ($key == "en")
                                    <a class=" jump_menu header-nav-menu-item-dropdown-item" href="/"><span>{{ $lang }}</span></a>
                                @else
                                    <a class=" jump_menu header-nav-menu-item-dropdown-item" href="/{{ $key }}/"><span>{{ $lang }}</span></a>
                                @endif
                            @elseif($key == $selectedLang)
                                <span class=" jump_menu header-nav-menu-item-dropdown-item" style="color:black">{{ $lang }}</span>
                            @endif
                        @endforeach
                        <a href="/languages" class=" jump_menu header-nav-menu-item-dropdown-item" style="margin-top: 10px">{{__('messages.menu_overview')}}</a>
                    </div>
                </span>
            </nav>
            @endif
        </div>
    </div>

</div>

<div id="dialog"></div>