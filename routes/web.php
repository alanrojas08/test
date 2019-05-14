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

Route::get('libros', 'BookController@index')->name('books.index');
Route::get('libros/crear', 'BookController@create')->name('books.create');
Route::post('libros/crear', 'BookController@store')->name('books.store');
Route::get('libros/{book}', 'BookController@show')->name('books.show');