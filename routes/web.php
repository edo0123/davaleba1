<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@view_slides');

Route::get('/home/services', 'HomeController@services');

Route::get('/home/social-links', 'HomeController@view_social_links');

Route::post('/home/social-links', 'HomeController@edit_social_links');

Route::get('/home/new', 'HomeController@view_new_slide');

Route::post('/home/new', 'HomeController@add_new_slide');

Route::get('/home/{id}', 'HomeController@view_edit_slide');

Route::post('/home/{id}', 'HomeController@edit_delete_slide');










