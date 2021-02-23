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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/route-example', function () {
    return "Web-programming: back end";
});

Route::get('/post/{firstname?}/{lastname?}', function ($firstname = "Nurdaulet", $lastname = "Daudov") {
    return $firstname . " " . $lastname;
}) -> where ('firstname' . 'lastname', '[a-zA-Z]+' . '[a-zA-Z]+');
