<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::any('/',  [HomeController::class, 'index'])->name('home');
Route::post('/',  [HomeController::class, 'db']);
Route::any('/{id}',  [HomeController::class, 'delete']);
Route::any('/edit/{id}',  [HomeController::class, 'edit']);
Route::any('/update/{id}',  [HomeController::class, 'updateDb']);