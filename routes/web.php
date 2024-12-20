<?php

use App\Http\Controllers\SesiController;
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
    return view('welcome');
});
Route::get('/login', [SesiController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SesiController::class, 'processLogin']);

Route::view('/menu', 'main.menu')->name('menu');
Route::get('/menu', function () {
    return view('main.menu');
});
Route::get('/comics', function () {
    return view('main.comics');
});
