<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/page', [App\Http\Controllers\HomeController::class, 'page'])->name('page');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('note', NoteController::class);

//Route::get('/{any}', function () {
 //   return view('index');
//})->where('any', '.*');
