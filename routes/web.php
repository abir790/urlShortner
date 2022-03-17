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
    //return "............................../login please";
    return view('welcome');

});

Route::get('login', function () {
    return view('welcome');
});

Route::post('/login','Auth\loginController@login')->name('login');
Route::get('logout','Auth\loginController@logout')->name('logout');



Route::group(['middleware'=>'auth'], function(){

Route::get('/short','url\shortController@short');
Route::post('/short','url\shortController@action')->name('shortAction');
Route::get('/short/{link}','url\shortController@link');


});


