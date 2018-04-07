<div id="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-subscribe">
                <div class="footer-content-heading">Let’s stay in touch</div>
                <div class="footer-content-par">Get updates and more</div>
                <script id="n2g_script">
                    var config = {
                        "form": {
                            "class": "footer-content-subscribe-form",
                            "style": ""
                        },
                        "container": {
                            "type": "div",
                            "class": "footer-content-subscribe-form-container"
                        },
                        "row": {
                            "type": "div",
                            "class": "footer-content-subscribe-form-row"
                        },
                        "input": {
                            "class": "footer-content-subscribe-form-input",
                            "style": ""
                        },
                        "columnLeft": {
                            "type": "div",
                            "class": "footer-content-subscribe-form-col"
                        },
                        "columnRight": {
                            "type": "div",
                            "class": "footer-content-subscribe-form-col"
                        },
                        "button": {
                            "type": "button",
                            "class": "footer-content-subscribe-form-button",
                            "style": ""
                        },
                        "loader": {
                            "type": "img",
                            "src": "//www.newsletter2go.com/images/loader.svg",
                            "class": "",
                            "style": "margin: auto; display:block; width: auto;"
                        },
                        "message": {
                            "type": "span",
                            "class": "footer-content-subscribe-form-message"
                        }
                    };
                    !function(e,t,n,c,r,a,i){
                    e.Newsletter2GoTrackingObject=r,e[r]=e[r]||function()
                        {(e[r].q=e[r].q||[]).push(arguments)},
                        e[r].l=1*new Date,a=t.createElement(n),i=t.getElementsByTagName(n)[0],a.async=1,a.src=c,i.parentNode.insertBefore(a,i)}(window,document,"script","//static.newsletter2go.com/utils.js","n2g");
                    n2g('create', 'uu17lt9z-vviro8yr-1e92');
                    n2g('subscribe:createForm', config);
                </script>
{{--                 <form class="footer-content-subscribe-form">
                    <input type="text" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form> --}}
            </div>
            <div class="footer-content-social">
                <div class="footer-content-heading">Follow us</div>
                <div class="footer-content-par">We want to hear from you</div>
                <div class="footer-content-social-items">
                    <div class="footer-content-social-item">
                        <a href="http://twitter.com/languagetoolorg"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="footer-content-social-item">
                        <a href="https://github.com/languagetool-org/"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-links">
        <div class="container">
            <div class="footer-links-inner">
                <?php
                $footer_pages = array(
                    array( 'name' => __('messages.footer_development'), 'url' => '/development'),
                    array( 'name' => __('messages.footer_team'), 'url' => '/team'),
                    array( 'name' => __('messages.privacy'), 'url' => '/legal/privacy'),
                    array( 'name' => __('messages.terms'), 'url' => '/legal/terms'),
                    array( 'name' => __('messages.imprint'), 'url' => '/legal/' )
                );
                foreach ($footer_pages as $page) {
                    print '<span><a href="'.$page['url'].'">'.$page['name'].'</a></span>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

@if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            icon: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false
            @endif
        });
    </script>
@endif

{{-- javascript area start --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    function errorCallback(code, string) {
        console.log("Error: ", code, string);
        piwikTrack('FastSpringError', code, string);
    }

    function piwikTrack(type1, type2, type3) {
        if (typeof(_paq) !== 'undefined') {  // Piwik tracking
            _paq.push(['trackEvent', type1, type2, type3]);
        }
    }
    function closedCallback(orderObjOrNull) {
        console.log("orderObjOrNull: ", orderObjOrNull);
        if (typeof(_paq) !== 'undefined') {  // Piwik tracking
            if (orderObjOrNull === null) {
                _paq.push(['trackEvent', "FastSpring", "OrderPopupClosed"]);
            } else {
                _paq.push(['trackEvent', "FastSpring", "OrderFinished"]);
                fastspring.builder.reset();
                window.location.replace("https://languagetoolplus.com/subscribe/?source=ltp&orderId=" + orderObjOrNull.id);
            }
        }
    }
    $(document).ready(function () {
        $(".jump_menu").on('click',function () {
            $('body').removeClass('menu-open');

            var target = $(this).attr('href');
            if($(target).length > 0){
                var top = $(target).offset().top ;
                $("html, body").animate({scrollTop: top}, "slow");
            }
        });
    });

</script>

<?php
$fsStorefront = "languagetooler.onfastspring.com/popup-languagetooler";
if (isset($_SERVER['QUERY_STRING']) && strpos($_SERVER['QUERY_STRING'], 'testmode') !== false) {
    $fsStorefront = "languagetooler.test.onfastspring.com/popup-languagetooler";
}
?>
<script
        id="fsc-api"
        src="https://d1f8f9xcsvx3ha.cloudfront.net/sbl/0.7.4/fastspring-builder.min.js"
        type="text/javascript"
        data-storefront="<?=$fsStorefront?>"
        data-error-callback="errorCallback"
        data-popup-closed="closedCallback"
>
</script>
<script src="{{ asset('js/lightbox2/js/lightbox-plus-jquery.js') }}"></script>

{{-- javascript area end --}}

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendors/tiny_mce/tiny_mce.js') }}"></script>
<script src="{{ asset('vendors/tiny_mce/plugins/atd-tinymce/editor_plugin2.js') }}"></script>
<script src="{{ asset('vendors/tiny_mce/plugins/atd-tinymce/src/synonyms.js') }}"></script>
<script src="{{ asset('vendors/dropkick/jquery.dropkick.js') }}"></script>
<script src="{{ asset('vendors/tooltipster/tooltipster.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://openthesaurus.stats.mysnip-hosting.de/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '11']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<noscript><p><img src="http://openthesaurus.stats.mysnip-hosting.de/piwik.php?idsite=11" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
<!-- Script for Register Modal -->
<script>
$(document).ready(function() {
    @if($errors->has('email'))
        $("#btnLogin").trigger('click');
    @endif

    @if($errors->register && $errors->register->any())
        $("#btnSignUp").trigger('click');
    @endif

    $('#loginModal').on('shown.bs.modal', function () {
        $('#loginEmail').focus();
    });

    $('#register-modal').on('shown.bs.modal', function () {
        $('#name').focus();
    });


    $("#haveAccount").click(function(e) {
        e.preventDefault();
        $("#closeRegister").trigger('click');
    });

    $("#maybeLater").click(function(e) {
        e.preventDefault();
        $("#closeRegister").trigger('click');
    });
    $("#outer-order-link").click(function(e) {
        piwikTrack('PricingTable', 'Buy');
    });
    $("#planSelect").change(function(e) {
        var val = $("#planSelect").val();
        if (val == 1) {
            $('#plan-prices-save').html('');
            //$('#planPriceTotal').text("19€");
            $("#price-1-month").show();
            $("#price-3-months").hide();
            $("#price-12-months").hide();
            $('#order-link').attr("data-fsc-item-path-value", "languagetool-plus-premium-monthly-subscription");
            piwikTrack('PriceSwitch', '1month');
        } else if (val == 3) {
            if ($("#price-3-months").text().indexOf("€") >= 0) {
                $('#plan-prices-save').html('<?=__('messages.details_3_months_euro')?>');
            } else {
                $('#plan-prices-save').html('<?=__('messages.details_3_months')?>');
            }
            //$('#planPriceTotal').text("39€");
            $("#price-1-month").hide();
            $("#price-3-months").show();
            $("#price-12-months").hide();
            $('#order-link').attr("data-fsc-item-path-value", "languagetool-plus-premium-3-month-subscription");
            piwikTrack('PriceSwitch', '3months');
        } else if (val == 12) {
            $('#plan-prices-save').html('<?=__('messages.billed_annually')?>');
            //$('#planPriceTotal').text("79€");
            $("#price-1-month").hide();
            $("#price-3-months").hide();
            $("#price-12-months").show();
            $('#order-link').attr("data-fsc-item-path-value", "languagetool-plus-premium-1-year-subscription");
            piwikTrack('PriceSwitch', '12months');
        } else {
            alert("Error, unknown selection: " + val);
        }
    });
});
</script>
<!-- Script Ends -->