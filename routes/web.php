<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
});



Route::get('registration', [RegisterController::class, 'index'])->middleware('guest')->name('registration');
Route::post('registration', [RegisterController::class, 'store'])->middleware('guest')->name('registration.store');

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'store'])->middleware('guest')->name('login.store');


Route::get('dashboard', function () {
    return view('pages.dashboard');
})->middleware('auth')->name('dashboard');
