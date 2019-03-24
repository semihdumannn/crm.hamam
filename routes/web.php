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




//Route::get('login','\V1\API\AuthController@login_form');

/*Route::middleware('jwt.auth')->group(function (){
   Route::get('/',function (){
       return view('welcome');
   }) ;
});*/



Auth::routes();

Route::middleware('auth:web')->namespace('Web')->group(function (){

    Route::get('/','HomeController@home');
});

