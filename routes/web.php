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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('gambino', [
	'uses' => 'testController@gambinoPost',
	'as' => 'gambino'
]);

Route::post('gambino', [
	'uses' => 'testController@gambinoPost',
	'as' => 'gambino'
]);

Route::get('gambino3', 'testController@gambino3');

Route::get('gambino4', 'testController@gambino4');

Route::post('gambino3/bill', 'testController@gambino3Bill');