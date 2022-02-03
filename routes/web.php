<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavBarController;
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

Route::get('/', [HomeController::class, 'index']) -> name('index');

Route::prefix('/wiki',) -> group(function(){
    Route::view('/','wiki.wikis') -> name('wiki.wikis');

    Route::get('deuses', function(){
        return view('wiki.deuses');
    }) -> name('wiki.deuses');

    Route::get('personagens', function(){
        return view('wiki.personagens');
    }) -> name('wiki.personagens');

    Route::get('monstros', function(){
        return view('wiki.monstros');
    }) -> name('wiki.monstros');

    Route::get('outros', function(){
        return view('wiki.outros');
    }) -> name('wiki.outros');
});
