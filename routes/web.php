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

/*Route::get('/', function () {
    return view('index');
});*/
Route::view('/', 'index')->name('home');
Route::view('shortcodes', 'shortcodes')->name('shortcodes');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('blog', 'blog')->name('blog');


Route::view('/404', '404')->name('404');
Route::view('services', 'services')->name('services');
