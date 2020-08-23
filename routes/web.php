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

Route::get( '/' , [
    'uses'=>'MovieController@index',
    'as' =>'movies'
]);

Route::get('movie/{id}', [

    'uses'=>'MovieController@show',
    'as' =>'movie'
]);

Route::get( 'Actors' , [
    'uses'=>'ActorsController@index',
    'as' =>'Actors'
]);
Route::get( 'TVshows' , [
    'uses'=>'TVshowController@index',
    'as' =>'TVshows'
]);

Route::get('TVshow/{id}', [

    'uses'=>'TVshowController@show',
    'as' =>'TVshow'
]);

Route::get('Contact_Us', [

    'uses'=>'SendMailController@index',
    'as' =>'contact'
]);
Route::post('sendMail/send', [

    'uses'=>'SendMailController@send'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
