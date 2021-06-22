<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'SiteController@index')->name('site');
Route::get('/contact', 'ContactController@contact')->name('contact.contact');

//*******electrical company**** */
Route::get('/tesla-electrical/about','ElectricalController@about')->name('tesla.electrical.about');
Route::get('/tesla-consulting/about','ConsultingController@about')->name('tesla.consulting.about');
Route::get('/tesla-plast/about','PlastController@about')->name('tesla.plast.about');
Route::get('/tesla-trading/about','TradingController@about')->name('tesla.trading.about');

//*******electrical company project**** */
Route::get('/tesla-electrical/project','ElectricalController@project')->name('tesla.electrical.project');
Route::get('/tesla-consulting/project','ConsultingController@project')->name('tesla.consulting.project');
Route::get('/tesla-plast/project','PlastController@project')->name('tesla.plast.project');
Route::get('/tesla-trading/project','TradingController@project')->name('tesla.trading.project');


Route::get('/tesla-electrical/project/project-slug-one','ElectricalController@detaille_project_1')->name('tesla.electrical.project.detailler1');
Route::get('/tesla-electrical/project/project-slug-two','ElectricalController@detaille_project_2')->name('tesla.electrical.project.detailler2');

/****localization */



// Route qui permet de connaître la langue active
Route::get('locale', 'LocalizationController@getLang')->name('getlang');

// Route qui permet de modifier la langue
Route::get('locale/{lang}', 'LocalizationController@setLang')->name('setlang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('admin.')
    ->prefix('admin')
    ->namespace('admins')
    //->middleware('can:manage-delivery')
    ->group(__DIR__ . '/admin.php');
