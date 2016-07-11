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

use App\Comment;



Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home'      , 'HomeController@index');
Route::get('/comment'   , 'CommentController@index');
Route::post('/comment'  , 'CommentController@addcomment');






Route::auth();

Route::get('/home', 'HomeController@index');
