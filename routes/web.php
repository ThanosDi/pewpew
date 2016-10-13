<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* FE routes */
Route::get('/', 'WelcomeController@index');
Route::get('language/{id}', 'LanguageController@show');
Route::get('contact', function () {
    return view('contact');
});
Route::get('contact','PagesController@contact');


/* Admin Routes */
Route::get('/admin', 'AdminController@index');

//Admin accounts
Route::get('/admin/accounts/list', 'AdminController@listAccounts');

/* Login-Logout-Register */

//Login POST
Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::get('login',  function () {
    return redirect('/');
});

//Logout
Route::get('logout', array('uses' => 'LoginController@doLogout'));

//Register
Route::get('register', array('uses' => 'LoginController@register'));

//Register POST
Route::post('register', array('uses' => 'LoginController@doRegister'));


/* General Pages */

//Home Page
Route::get('home', array('uses' => 'PagesController@home'));
