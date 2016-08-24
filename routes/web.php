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

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('BB1Teams', 'PagesController@BB1Teams');

Route::get('BB1Stats', 'PagesController@BB1Stats');
