@extends('layouts.app')

@section('title', __('messages.title'))
@section('description')
    <meta name='description' content='{{__('messages.description')}}'>
@stop

@section('before_content')
    @include('shared.editor')
@endsection


<?php
$additionalErrorsCount = 2500;
?>

@section('content')
    @include('shared.reviews')
    <section id="Price">
        <a name="premium"></a>
        <div class="container">
            <h2 class="contentHead" id="Pricing">{{__('messages.pricing')}}</h2>

                <section class="plans">

                        <div class="plan-wrapper free">
                            <div class="plan border-lt">
                                <h2 class="plan-title">{{__('messages.free_headline')}}</h2>
                                <p class="plan-price">{{__('messages.free_limit', ['characters' => 20000])}}</p>
                                <p class="plan-price">languagetool.org</p>
                                <ul class="plan-features">
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.many_rules') }}
                                    </li>
                                </ul>
                                <ul class="plan-features inactive">
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-x.svg') }}"></span>
                                        {{ __('messages.msword_feature') }}
                                        (<a href="#msword">{{ __('messages.msword_feature_details') }}</a>)
                                        -
                                        {{ __('messages.msword_feature_limit') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-x.svg') }}"></span>
                                        {{ __('messages.improved_error_detection2') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-x.svg') }}"></span>
                                        {{ __('messages.improved_error_detection3') }}
                                    </li>
                                    @if ($selectedLang == "en" || $selectedLang == "de")
                                        <li class="plan-feature">
                                            <span class="plan-feature-icon"><img src="{{ asset('images/icon-x.svg') }}"></span>
                                            {{ __('messages.improved_error_detection1') }}
                                        </li>
                                    @endif
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-x.svg') }}"></span>
                                        {{ __('messages.improved_error_detection4', ['number' => $additionalErrorsCount]) }}
                                    </li>
                                    <!--
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-x.svg') }}"></span>
                                        {{ __('messages.api_access') }}
                                    </li>
                                    -->
                                </ul>
                                <p class="quote"></p>
                            </div>

                            <!--
                            <h5 class="plan-for-who">{{__('messages.free_for_whom')}}</h5>
                            -->
                        </div>

                        <div class="plan-wrapper premium">
                            <div class="plan plan-tall">
                                <h2 class="plan-title">{{__('messages.premium_headline')}}</h2>
                                <p class="plan-price">{{__('messages.premium_limit')}}</p>
                                <p class="plan-price"><a style="color: white" href="https://languagetoolplus.com">languagetoolplus.com</a></p>
                                <ul class="plan-features">
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-white.svg') }}"></span>
                                        {{ __('messages.many_rules') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-white.svg') }}"></span>
                                        {{ __('messages.msword_feature') }}
                                        (<a href="#msword" style="color:gold">{{ __('messages.msword_feature_details') }}</a>)
                                        -
                                        {{ __('messages.msword_feature_limit') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-white.svg') }}"></span>
                                        {{ __('messages.improved_error_detection2') }}
                                        <span class="explainFeature"
                                              data-tooltip-content="#improved_error_detection2_example">
                                              <i class="fa fa-question-circle"></i>
                                        </span>
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-white.svg') }}"></span>
                                        {{ __('messages.improved_error_detection3') }}
                                        <span class="explainFeature"
                                              data-tooltip-content="#improved_error_detection3_example">
                                              <i class="fa fa-question-circle"></i>
                                        </span>
                                    </li>
                                    @if ($selectedLang == "en" || $selectedLang == "de")
                                        <li class="plan-feature">
                                            <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-white.svg') }}"></span>
                                            {{ __('messages.improved_error_detection1') }}
                                            <span class="explainFeature"
                                                  data-tooltip-content="#improved_error_detection1_example">
                                                  <i class="fa fa-question-circle"></i>
                                            </span>
                                        </li>
                                    @endif
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-white.svg') }}"></span>
                                        {{ __('messages.improved_error_detection4', ['number' => $additionalErrorsCount]) }}
                                        <span class="explainFeature"
                                              data-tooltip-content="#improved_error_detection4_example">
                                              <i class="fa fa-question-circle"></i>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="plan-features inactive">
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-x-black.svg') }}"></span>
                                        {{ __('messages.api_access') }}
                                    </li>
                                </ul>

                                <div class="plan-prices">

                                    <div class="select-field">
                                        <select id="planSelect">
                                            <option value="1">{{__('messages.premium_1_month')}}</option>
                                            <option value="3">{{__('messages.premium_3_months')}}</option>
                                            <option value="12" selected>{{__('messages.premium_12_months')}}</option>
                                            <!--<option value="24" selected>{{__('messages.premium_24_months')}}</option>-->
                                        </select>
                                    </div>

                                    <div id="price-1-month" class="price-item" style="display: none">
                                        <span id="price-1-months-value" style="display:none" data-fsc-item-path="languagetool-plus-premium-monthly-subscription" data-fsc-item-pricevalue></span>
                                        <span id="planPriceTotal" class="quote-layer"
                                                    data-fsc-item-path="languagetool-plus-premium-monthly-subscription"
                                                    data-fsc-item-pricetotal></span><!--<span class="quote-layer-currency">/{{__('messages.per_month')}}</span>-->
                                        <div>
                                            <span id="plan-prices-save" class="price-explain">{{ __('messages.details_1_month_euro') }}</span>
                                        </div>
                                    </div>
                                    <div id="price-3-months" class="price-item" style="display: none">
                                        <span id="price-3-months-value" style="display:none" data-fsc-item-path="languagetool-plus-premium-3-month-subscription" data-fsc-item-pricevalue></span>
                                        <span id="price-3-months-monthly" class="quote-layer"></span><span class="quote-layer-currency">/{{__('messages.per_month')}}</span>
                                        <div>
                                            <span id="price-3-months-total" class="price-explain"
                                                  data-fsc-item-path="languagetool-plus-premium-3-month-subscription"
                                                  data-fsc-item-pricetotal></span>/3 {{__('messages.per_months')}}
                                        </div>
                                    </div>
                                    <div id="price-12-months" class="price-item" style="display: block">
                                        <span id="price-12-months-value" style="display:none" data-fsc-item-path="languagetool-plus-premium-1-year-subscription" data-fsc-item-pricevalue></span>
                                        <span id="price-12-months-monthly" class="quote-layer"></span><span class="quote-layer-currency">/{{__('messages.per_month')}}</span>
                                        <div>
                                            <span id="price-12-months-total" class="price-explain"
                                                  data-fsc-item-path="languagetool-plus-premium-1-year-subscription"
                                                  data-fsc-item-pricetotal></span>/{{__('messages.per_year')}}
                                        </div>
                                    </div>
                                    <div id="price-24-months" class="price-item" style="display: none">
                                        <span id="price-24-months-value" style="display:none" data-fsc-item-path="languagetool-plus-premium-2-year-subscription" data-fsc-item-pricevalue></span>
                                        <span id="price-24-months-monthly" class="quote-layer"></span><span class="quote-layer-currency">/{{__('messages.per_month')}}</span>
                                        <div>
                                            <span id="price-24-months-total" class="price-explain"
                                                  data-fsc-item-path="languagetool-plus-premium-2-year-subscription"
                                                  data-fsc-item-pricetotal></span>/{{__('messages.per_2years')}}
                                        </div>
                                    </div>

                                </div>

                                <div id="outer-order-link">
                                    <a id="order-link" href='#' class="plan-button"
                                       data-fsc-action="Add,Checkout"
                                       data-fsc-item-path-value="languagetool-plus-premium-1-year-subscription">
                                        <span class="price">{{__('messages.premium_action')}}</span>
                                    </a>
                                </div>

                            </div>
                            <span class="text-span-bott"><?=__('messages.prices_incl_vat')?></span>

                            <h5 class="plan-for-who">{{__('messages.premium_for_whom')}}
                                <br><br>
                                <script type="text/javascript">
                                    var firstPart = "support";
                                    var lastPart = "languagetoolplus" + "." + "com";
                                    document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "?subject=<?=__('messages.premium_contact_mail_subject')?>'><?=__('messages.premium_for_whom2')?><" + "/a>");
                                </script>
                            </h5>
                        </div>

                        <div class="plan-wrapper enterprise">
                            <div class="plan border-rd">
                                <h2 class="plan-title">{{__('messages.enterprise_headline')}}</h2>
                                <p class="plan-price">{{__('messages.enterprise_limit')}}</p>
                                <p class="plan-price"><a href="https://languagetoolplus.com">languagetoolplus.com</a></p>
                                <ul class="plan-features">
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.many_rules') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.msword_feature') }}
                                        (<a href="#msword">{{ __('messages.msword_feature_details') }}</a>)
                                        -
                                        {{ __('messages.msword_feature_limit') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.improved_error_detection2') }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.improved_error_detection3') }}
                                    </li>
                                    @if ($selectedLang == "en" || $selectedLang == "de")
                                        <li class="plan-feature">
                                            <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                            {{ __('messages.improved_error_detection1') }}
                                        </li>
                                    @endif
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.improved_error_detection4', ['number' => $additionalErrorsCount]) }}
                                    </li>
                                    <li class="plan-feature">
                                        <span class="plan-feature-icon"><img src="{{ asset('images/icon-check-purple.svg') }}"></span>
                                        {{ __('messages.api_access') }}
                                        <span class="explainFeature" data-tooltip-content="#api_access_detail">
                                            <i class="fa fa-question-circle"></i>
                                        </span>
                                        {{ __('messages.api_access_on_premise') }}
                                    </li>
                                </ul>

                                <br><br>
                                <script>
                                    /*var mt = "mail" + "to";
                                    var fp = "sales";
                                    var domain = "languagetoolplus";
                                    var subject = "?subject=contact request for enterprise version (languagetool.org)";
                                    var buttonText = "{{ __('messages.enterprise_action') }}";
                                    document.write("<a class='plan-button' href='" + mt + ":" + fp + "@" + domain + ".com" + subject + "'>" + buttonText + "</a>");
                                    */
                                    document.write("<a class='plan-button' href='https://languagetoolplus.com'>languagetoolplus<br>.com</a>");
                                </script>
                                
                            </div>

                            <h5 class="plan-for-who">{{__('messages.enterprise_for_whom')}}</h5>

                        </div>

                </section>

        </div>
    </section>

    <?php
    use Illuminate\Support\Facades\Auth;
    ?>

    <section id="firefox_chrome" class="addon-section content-section">
        <div class="container">
    
            <div class="row">
                <div class="col-xs-12">
                    <a name="browser"></a>
                    <h2 class="contentHead">{{__('messages.browser_headline')}}</h2>
                    <p>{{__('messages.browser_intro')}}</p>
                </div>
            </div>
    
            <div class="row">
                <div class="col-xs-12 buttons-row">
                    <a class="main-button" href="https://addons.mozilla.org/firefox/addon/languagetool?src=external-ltp-homepage">
                        {{__('messages.browser_firefox_download')}}
                    </a>
                    <a class="main-button" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">
                        {{__('messages.browser_chrome_download')}}
                    </a>
                </div>
            </div>
    
        </div>
    </section>
    
    <section id="google_docs" class="addon-section content-section">
        <div class="container">
    
            <div class="row">
                <div class="col-xs-12">
                    <a name="standalone"></a>
                    <h2 class="contentHead">{{__('messages.googledocs_headline')}}</h2>
                    <p>{{__('messages.googledocs_intro')}}</p>
                </div>
            </div>
    
            <div class="row">
                <div class="col-xs-12 buttons-row">
                    <ul class="inline-btn">
                        <li class="btn_standalone">
                            <a class="main-button" href="https://gsuite.google.com/marketplace/app/languagetool/805250893316">{{__('messages.googledocs_download')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
    
        </div>
    </section>

    <section id="add-on">
        <div class="container">
            <div class="col-md-12">
                <div class="padd-bott">
                    <a name="msword"></a>
                    <h2 id="ludilo" class="contentHead">{{__('messages.msword_headline')}}</h2>
                    <p>
                        <?=__('messages.msword_intro')?>
                    </p>
                    <ul class="inline-btn">
                        <li class="btn_standalone">
                            <a class="main-button" href="https://appsource.microsoft.com/product/office/WA104381727">{!!__('messages.msword_download_appsource')!!}</a>
                        </li>
                    </ul>
                </div>

                <div id="Glide" class="glide">

                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="features row">
                                    <div class="feature-image col-md-5">
                                        <a data-lightbox="screenshots" href="/images/msword/en/new/1-toolbar.png"><img
                                                    class="img-responsive" src="/images/msword/en/new/1-toolbar-small.jpg"></a>
                                    </div>

                                    <div class="col-md-offset-1 col-md-6">
                                        <h2 class="steps-h">{{__('messages.step_1')}}</h2>
                                        <p>{{__('messages.msword_1')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="features row">

                                    <div class="feature-image col-md-offset-1 col-md-5 col-md-push-6">
                                        <a data-lightbox="screenshots" href="/images/msword/en/new/2-sidebar.png"><img
                                                    class="img-responsive" src="/images/msword/en/new/2-sidebar-small.jpg"></a>
                                    </div>

                                    <div class="col-md-6 col-md-pull-6">
                                        <h2 class="steps-h">{{__('messages.step_2')}}</h2>
                                        <p>{{__('messages.msword_2')}}</p>
                                    </div>

                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="features row">
                                    <div class="feature-image col-md-5">
                                        <a data-lightbox="screenshots" href="/images/msword/en/new/3-logged-in.png"><img
                                                    class="img-responsive" src="/images/msword/en/new/3-logged-in-small.jpg"></a>
                                    </div>

                                    <div class="col-md-offset-1 col-md-6">
                                        <h2 class="steps-h">{{__('messages.step_3')}}</h2>
                                        <p>{{__('messages.msword_3')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="row features">
                                    <div class="feature-image col-md-offset-1 col-md-5 col-md-push-6">
                                        <a data-lightbox="screenshots" href="/images/msword/en/new/4-results.png"><img
                                                    class="img-responsive" src="/images/msword/en/new/4-results-small.jpg"></a>
                                    </div>

                                    <div class="col-md-6 col-md-pull-6">
                                        <h2 class="steps-h">{{__('messages.step_4')}}</h2>
                                        <p>{{__('messages.msword_4')}}</p>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="glide__bullets"></div>

                </div>

            </div>
        </div>
    </section>

    <section id="libreoffice" class="addon-section content-section">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <a name="standalone"></a>
                    <h2 class="contentHead">{{__('messages.libreoffice_headline')}}</h2>
                    <!--<p>{{__('messages.libreoffice_intro')}}</p>-->
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 buttons-row">
                    <p>
                        <ul class="inline-btn">
                            <li class="btn_standalone">
                                <a class="main-button" href="/download/LanguageTool-4.8.oxt">{{__('messages.libreoffice_download')}} (v4.8, 117MB)</a>
                            </li>
                        </ul>
                    </p>
                    <p><a href="https://java.com/download/">{{__('messages.libreoffice_requirements', ['version' => 8])}}</a>
                    &middot;
                    {{__('messages.libreoffice_help1')}} <a href="/issues">{{__('messages.libreoffice_help2')}}</a></p>
                    <p>{!! __('messages.libreoffice_instruction1') !!}
                        {{__('messages.libreoffice_instruction2')}}
                        <b>{{__('messages.libreoffice_instruction3')}}</b>
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="more" class="addon-section content-section">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <a name="more"></a>
                    <h2 class="contentHead">{{__('messages.more_headline')}}</h2>
                    <p>{{__('messages.more_intro')}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 buttons-row">
                    <ul class="inline-btn">
                        <li class="btn_standalone">
                            <a class="main-button" href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">{{__('messages.more_download')}}</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section id="standalone" class="addon-section content-section">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <a name="standalone"></a>
                    <h2 class="contentHead"><?=__('messages.standalone_headline')?></h2>
                    <p><?=__('messages.standalone_intro')?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 buttons-row">
                    <ul class="inline-btn">
                        <li class="btn_standalone">
                            <a class="main-button" href="/download/LanguageTool-4.9.zip">{{__('messages.standalone_download')}} (v4.9, 208MB)</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <p>
                        {{__('messages.after_download')}}
                    </p>
                    <p>
                        {{__('messages.standalone_builds')}}
                        <a href="/download/">{{__('messages.standalone_old_releases')}}</a> &middot;
                        <a href="/download/snapshots/?C=M;O=D">{{__('messages.standalone_daily_builds')}}</a>
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!--
    <section id="video-section" ?>
        <div class="container">


            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a target="_blank"
                       href="{{__('messages.browser_chrome_video')}}"><i class="fa fa-play-circle"></i></a>
                </div>
            </div>


        </div>
    </section>
    -->

    <!--
    <section id="video-section2" ?>
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a target="_blank"
                       href="{{__('messages.browser_firefox_video')}}">{{__('messages.browser_firefox_video_head')}}</a>
                </div>
            </div>


        </div>
    </section>
    -->

    @if(View::exists('shared/qa.'.$selectedLang))
        @include('shared/qa.'.$selectedLang)
    @endif

    @include('shared.clients')

@endsection

@section('after_body')
    <script>
        @php
            echo $defaultDemoTextMappingForJavaScript;
        @endphp
        var checkDefaultLangWithCountry = "<?=$checkDefaultLangWithCountry ?>";
    </script>

    @includeWhen($isShowHintbar, 'shared.hintbar')
@endsection
