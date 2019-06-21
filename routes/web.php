<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


Route::group(['prefix' => 'webapi'], function () {
    //Route::post('ignore-word/store', 'IgnoreWordApiController@store');
	/*Route::resource('ignore-word', 'IgnoreWordApiController', ['only' => [
	    'index', 'store'
	]]);*/
});

/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/

//Route::get('/userInfo', 'ApiController@userInfo');
//Route::get('/token', 'ApiController@token');
//Route::post('/token', 'ApiController@token');
//Route::post('/submitErrorExample', 'ApiController@submitErrorExample');
//Route::post('/submitFalseAlarm', 'ApiController@submitFalseAlarm');
//Route::post('/submitIgnoreRule', 'ApiController@submitIgnoreRule');
//Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
//Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
//Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
//Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



Route::name('language.')->group(function() {
	Route::get('/legal', 'LegacyController@legal');
	Route::redirect('/contact', '/legal');
	Route::get('/privacy', 'LegacyController@privacy_old');
	Route::get('/legal/privacy', 'LegacyController@privacy');
	Route::get('/legal/terms', 'LegacyController@terms');
	Route::get('/languages', 'LegacyController@languages');
	Route::get('/issues', 'LegacyController@issues');
	Route::get('/compare', 'LegacyController@compare');
	Route::get('/support', 'LegacyController@support');
	Route::get('/team', 'LegacyController@team');
	Route::get('/dev', 'LegacyController@development');
	Route::get('/newsletter', 'LegacyController@newsletter');
	Route::get('/contact/newsletter.php', 'LegacyController@newsletter_old');
	Route::get('/job/computational_linguist.php', 'LegacyController@job_computational_linguist');
	Route::get('/job/vertrieb', 'LegacyController@job_vertrieb');
	Route::get('/job/rule-developer', 'LegacyController@job_rule_dev');
	Route::get('/job/regel-entwickler', 'LegacyController@job_rule_dev_de');
	Route::get('/job/computerlinguistik', 'LegacyController@job_computerlinguistik');
	Route::get('/webextension/uninstall.php', 'LegacyController@webextension_uninstall');
	Route::get('/webextension/submit-feedback.php', 'LegacyController@webextension_feedback');   // TODO: should be POST, but doesn't work
	Route::get('/usage', 'LegacyController@usage');
	Route::get('/firefox', 'LegacyController@firefox');
	Route::get('/chrome', 'LegacyController@chrome');
	Route::get('/contribute', 'LegacyController@contribute');
	Route::get('/de/leichte-sprache/', 'LegacyController@de_leichte_sprache');
	Route::get('/forum', 'LegacyController@forum');
    Route::get('/zh', function() { return redirect('/zh-CN-Hans/'); });
	Route::get('/fakeerror', 'LegacyController@fakeerror');
	Route::get('/link', 'LegacyController@link');
	Route::get('/home', 'HomeController@index')->name('home');
	//languagetoolplus.com only:
	//Route::get('/subscribe', 'SubscriptionController@subscribe');
	//Route::post('/subscribeHook', 'SubscriptionController@subscribeHook');
    Route::get('/ru/firefox', 'LegacyController@ru_firefox');
    Route::get('/ru/chrome', 'LegacyController@ru_chrome');
    Route::get('/ru/issues', 'LegacyController@ru_issues');
    Route::get('/ru/news', 'LegacyController@ru_news');
    Route::get('/{locale?}', 'WelcomeController@index');
	Route::resource('ignore-word', 'IgnoreWordController');
});
