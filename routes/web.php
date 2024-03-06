<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = ['name' => 'Arianna'];
    return view('home', $data);
})->name('home');

Route::get('/recipes', function () {
    return view('links.recipes');
})->name('recipes');

Route::get('/videos', function () {
    return view('links.videos');
})->name('videos');

Route::get('/gallery', function () {
    return view('links.gallery');
})->name('gallery');

