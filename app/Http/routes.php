<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BlogController@index')->name('Home');

/*
 | CRUD for blog
*/
Route::get('post', 'BlogController@userCreatePost')->name('Post\Create');
  Route::post('post/store', 'BlogController@userStorePost')->name('Post\Create\Store');

Route::get('post/{id}', 'BlogController@userGetPost')->name('Post\Read');
