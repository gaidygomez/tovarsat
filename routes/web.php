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
    return view('welcome');
});

Route::get('inicio', 'SendMailController@index')->name('inicio');

Route::post('email', 'SendMailController@store')->name('tv');

Route::post('atencion', 'SendMailController@customsupp')->name('atencion');

Route::post('inter', 'SendMailController@inter')->name('inter');

Route::post('coor', 'SendMailController@coor')->name('coor');

Route::get('speed', 'SpeedController@index')->name('speed');

// Búsqueda de Clientes
Route::get('tovar/search', 'OptionsRegisterController@tovarsearch')->name('tovar_search');
Route::post('tovar/search', 'OptionsRegisterController@tovarpost')->name('tovar_post');
Route::get('merida/search', 'OptionsRegisterController@meridasearch')->name('merida_search');
Route::post('merida/search', 'OptionsRegisterController@meridapost')->name('merida_post');


// Register Options
Route::get('options', 'OptionsRegisterController@index')->name('options');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...

//Route::group(['middleware' => 'admin'], function() {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'Auth\RegisterController@register');
//});

/**
 * Register the typical reset password routes for an application.
 */

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

/**
 * Register the typical email verification routes for an application.
*/

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/home', 'HomeController@index')->name('home');


/*------------ Rutas de Admin Dashboard -----------------*/
Route::group(['middleware' => 'admin'], function () {
	Route::get('listuser', 'Admin\AdminController@show')->name('listuser');
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['middleware' => 'auth'], function () {
    Route::get('deuda', 'UserOptionsController@debt')->name('debt');
    Route::get('pagar', 'UserOptionsController@pay')->name('pay');
    Route::get('provincial', 'BanksController@bp')->name('bp');
    Route::get('mercantil/merida', 'BanksController@mm')->name('mm');
    Route::get('mercantil/tovar', 'BanksController@mt')->name('mt');
    Route::get('venezuela', 'BanksController@bdv')->name('bdv');
    Route::get('banesco', 'BanksController@banesco')->name('banesco');
    Route::get('sofitasa', 'BanksController@bs')->name('bs');
});
