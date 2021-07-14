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
    return view('pages.home');
})->name('home');

Route::get('/help', function () {
    return view('pages.help');
})->name('help');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/money', function () {
    return view('component.circle-menu.money');
})->name('money');


