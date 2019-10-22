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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

 

 Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::group(['middleware' =>['auth','admin']], function()
{
	Route::get('/admin', function()
{
	return view('admin');
 });

});


Route::get('profile', 'ProfileController@profile');//->middleware('auth');
Route::POST('profile','ProfileController@update_avatar');
// 

Route::resource('contact', 'contactcontroller');
//first crud operation of location
Route::resource('address','LocationController');
// Route::get('profile','ProfileController@site')->name('sitemap');





