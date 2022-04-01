<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas de inicio
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/login', function () {
    return view('log-in');
})->name('login');

Route::get('/registrar', function () {
    return view('sign-up');
})->name('sing');
/*
|--------------------------------------------------------------------------
| Rutas de Publicaciones
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/boombs', function () {
    return view('posts.index');
})->name('post.index');
