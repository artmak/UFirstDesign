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

/*Admin panel*/
Route::group(['prefix' => 'administrator'], function () {
    Voyager::routes();
});

/*Routes of site*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('main', function (){
    return view('main');
});

