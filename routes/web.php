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

Route::get('/', 'homeController@index');
Route::get('/login','loginController@index');
Route::get('/logout','loginController@logout');
Route::get('/loginGoogle','loginController@loginGoogle');

Route::get('/auth/callback','loginController@callback');

Route::post('/isiRegisterAuth','loginController@isiRegisterAuth');



//Admin
Route::group(['prefix' => 'adm'],function(){
    Route::get('/dashboard','adminController@index');

    //Artikel
    Route::post('/simpanArtikel','artikelController@simpanArtikel');

    Route::post('/deleteArtikel','artikelController@deleteArtikel');

    Route::post('/editArtikel','artikelController@editArtikel');
});

//User
Route::group(['prefix' => 'user'],function(){
    Route::get('/dashboard','userController@index');
});

//POST
Route::post('/sendMessage','mailController@sendMessage');
Route::post('/checkAuth','loginController@checkAuth');

Route::post('/isiEditTinyMCE','artikelController@isiEditTinyMCE');
