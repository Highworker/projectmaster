<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\IngridientController;
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

/*
Route::get('/', function () {
    return view('drinks');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/', [DrinkController::class, 'index']);
Route::get('/drink/{id}', [DrinkController::class, 'show']);
Route::get('/ingridients', [IngridientController::class, 'index']);
require __DIR__.'/auth.php';
