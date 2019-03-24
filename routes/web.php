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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test', "TestController");

Route::get('/', "SiteController");

Route::get('locale/{locale}', function($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});


/**
 * Кэширование и выдача js файла локализации
 */
Route::get('/js/language/{locale}.js', function () {
	$locale = App::getLocale();
	$strings = Cache::rememberForever("$locale.js", function () use ($locale) {
				$files = glob(resource_path('lang/' . $locale . '/*.php'));
				$strings = [];

				foreach ($files as $file) {
					$name = basename($file, '.php');
					$strings[$name] = require $file;
				}

				return $strings;
			});

	header('Content-Type: text/javascript');
	echo('window.i18n = ' . json_encode($strings) . ';');
	exit();
})->name('assets.lang');
