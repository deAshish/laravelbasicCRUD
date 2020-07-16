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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post','PostsController@index'); 
Route::post('/post','PostsController@store')->name('addinfo'); //Add new information 
Route::get('/postview','PostsController@Show'); //view table
Route::get('/postpage','PostsController@Show1');
Route::get('/editdata/{id}','PostsController@edit');
Route::put("/updatepost/{id}", 'PostsController@update');
Route::get('/deletedata','PostsController@show2');
Route::get("/deletedata/{id}",'PostsController@destroy');

