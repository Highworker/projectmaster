<?php

use App\Http\Controllers\ControllerDrinks;
use App\Http\Controllers\ControllerIngridients;
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

Route::get('/', [ControllerDrinks::class, 'index']);
Route::get('/drink/{id}', [ControllerDrinks::class, 'show']);
Route::get('/ingridients', [ControllerIngridients::class, 'index']);

