<?php
$adNumber = "1";
$adId = "div-gpt-ad-1407836223218-0";

if ($_SERVER['REQUEST_URI'] == "/de/") {
    $adNumber = "2";
    $adId = "div-gpt-ad-1407836071712-0";
} else if ($_SERVER['REQUEST_URI'] == "/ru/") {
    $adNumber = "3";
    $adId = "div-gpt-ad-1407836099651-0";
} else if ($_SERVER['REQUEST_URI'] == "/pl/") {
    $adNumber = "4";
    $adId = "div-gpt-ad-1407836251086-0";
} else if ($_SERVER['REQUEST_URI'] == "/es/") {
    $adNumber = "5";
    $adId = "div-gpt-ad-1407836074134-0";
} else if ($_SERVER['REQUEST_URI'] == "/pt/") {
    $adNumber = "6";
    $adId = "div-gpt-ad-1407836000713-0";
} else if ($_SERVER['REQUEST_URI'] == "/uk/") {
    $adNumber = "7";
    $adId = "div-gpt-ad-1407836140364-0";
} else if ($_SERVER['REQUEST_URI'] == "/it/") {
    $adNumber = "8";
    $adId = "div-gpt-ad-1407836141970-0";
}
?>
<div>
    <div style="text-align: center; margin: auto;">
        &nbsp;
        <!-- Yieldlove AdTag -->
        <script type='text/javascript'>
            googletag.cmd.push(function() {
                if (window.innerWidth >= 768) {
                    googletag.defineSlot('/53015287/languagetool.org_d_728x90_<?=$adNumber?>', [728, 90], '<?=$adId?>').addService(googletag.pubads());
                }
                if (window.innerWidth < 768) {
                    googletag.defineSlot('/53015287/languagetool.org_m_300x250_<?=$adNumber?>', [300, 250], '<?=$adId?>').addService(googletag.pubads());
                }
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
            });
        </script>
        <div id='<?=$adId?>'>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('<?=$adId?>'); });
            </script>
        </div>
    </div>
</div>
