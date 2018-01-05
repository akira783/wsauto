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

/*
Route pour concaténer un nom ds l'url
Route::any('/test/{name}', function ($name) {
    return "coucou " . $name;
});
*/

/* 
Route appel à un controlleur pour concaténer un nom ds l'url : appel a une fonction qui se trouve dans controller.php
*/
Route::get('/test/{name}', 'Controller@test');