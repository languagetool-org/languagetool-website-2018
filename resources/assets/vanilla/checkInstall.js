$(document).ready(function() {
    if (navigator.userAgent.indexOf("Android") === -1) {
        if (navigator.userAgent.indexOf("Chrome/") !== -1) {
            $('#nav').append('<a onclick="return installChromeExtension()" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">Add to Chrome</a>');
        } else if (navigator.userAgent.indexOf("Firefox/") !== -1) {
            $('#nav').append('<a href="https://addons.mozilla.org/firefox/addon/languagetool?src=external-lt-homepage">Add to Firefox</a>');
        }
    }
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