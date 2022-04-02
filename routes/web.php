<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;

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
   if(Auth::check()){
    return view('posts.index');
   }else{
    return redirect('/login');
   }
})->name('post.index');

Route::post('/registrar',[UsuarioController::class,'create'])->name('user');

Route::get('/logeo',[UsuarioController::class,'login'])->name('login');
Route::get('/logauth',[UsuarioController::class,'logout'])->name('logout');
Route::post('/logeo',[UsuarioController::class,'login'])->name('logins.post');
