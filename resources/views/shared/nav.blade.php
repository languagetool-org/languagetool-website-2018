<div id="header">
    
    <div class="container">
        <div class="header-nav">
            <div class="header-nav-brand">
                <div id="logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.svg') }}" alt="LanguageTool Plus logo">
                    </a>
                </div>
                <div class="head-brand">
                    <span class="head-brand-name">Language Tool</span>
                    <span class="head-brand-slogan">proofreading service</span>
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
                <a class="pricing jump_menu header-nav-menu-item" href="#Price">
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
                        <a class="ms_office jump_menu header-nav-menu-item-dropdown-item" href="#add-on">
                            <span><?=__('messages.nav_ms_office')?></span>
                        </a>
                        <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="#firefox_chrome">
                            <span><?=__('messages.nav_browse_ad')?></span>
                        </a>
                        <a class="browser_ad jump_menu header-nav-menu-item-dropdown-item" href="#google_docs">
                            <span><?=__('messages.nav_google_docs')?></span>
                        </a>
                    </div>
                </span>
                <a class="forum jump_menu header-nav-menu-item" href="https://forum.languagetool.org/">
                    <span class="header-nav-menu-item-label">
                        <?=__('messages.nav_forum')?>
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                <a class="development jump_menu header-nav-menu-item" href="development">
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
                                    <a class=" jump_menu header-nav-menu-item-dropdown-item" href="/{{ $key }}"><span>{{ $lang }}</span></a>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </span>
            </nav>
            @endif
        </div>
    </div>

</div>