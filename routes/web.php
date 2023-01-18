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
    return view('pages.home', [
        'menu'  => config('menu'),
    ]);
})->name('home') ;

Route::get('/characters', function () {
    return view('pages.characters', [
        'menu'  => config('menu'),
    ]);
})->name('characters') ;

Route::get('/comics', function () {
    $comics = config('comics');
    return view('pages.comics', [
        'menu'  => config('menu'),
        'comics' => $comics,
    ]);
})->name('comics') ;

Route::get('/movies', function () {
    return view('pages.movies', [
        'menu'  => config('menu'),
    ]);
})->name('movies') ;

Route::get('/tv', function () {
    return view('pages.tv', [
        'menu'  => config('menu'),
    ]);
})->name('tv') ;

Route::get('/games', function () {
    return view('pages.games', [
        'menu'  => config('menu'),
    ]);
})->name('games') ;

Route::get('/collectibles', function () {
    return view('pages.collectibles', [
        'menu'  => config('menu'),
    ]);
})->name('collectibles') ;

Route::get('/videos', function () {
    return view('pages.videos', [
        'menu'  => config('menu'),
    ]);
})->name('videos') ;

Route::get('/fans', function () {
    return view('pages.fans', [
        'menu'  => config('menu'),
    ]);
})->name('fans') ;

Route::get('/news', function () {
    return view('pages.news', [
        'menu'  => config('menu'),
    ]);
})->name('news') ;

Route::get('/shop', function () {
    return view('pages.shop', [
        'menu'  => config('menu'),
    ]);
})->name('shop') ;




