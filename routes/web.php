<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitsController;
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

Route::get('/fruits', [FruitsController::class, 'index'])->name('fruits.index');

Route::get('/fruits/create', [FruitsController::class, 'create'])->name('fruits.create');


Route::post('/fruits', [FruitsController::class, 'store'])->name('fruits.store');