<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;

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

// 本ダッシュボード表示
Route::get('/', 'App\Http\Controllers\BooksController@index');

// 登録処理
Route::post('/books', 'App\Http\Controllers\BooksController@store');

// 更新画面
Route::post('/booksedit/{books}', 'App\Http\Controllers\BooksController@edit');

// 更新処理
Route::post('/books/update', 'App\Http\Controllers\BooksController@update');

// 本を削除
Route::delete('/book/{book}', 'App\Http\Controllers\BooksController@destroy');

//Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\BooksController::class, 'index'])->name('home');
