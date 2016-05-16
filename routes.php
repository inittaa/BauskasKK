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

Route::get('/Jandals', function () {
    return view('Jandals');
});
Route::get('/', function () {
    return view('Jandals');
});

Route::get('/test', function () {
    return view('test');
});


Route::auth();
Route::resource('posts', 'PostsController');
Route::group(['middleware' => ['web']], function(){
	// show new post form

});