<?php

use App\Http\Controllers\PersonController;
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

Route::get('/', [PersonController::class, 'index'])->name('person.index');
Route::get('/create', [PersonController::class, 'create'])->name('person.create');
Route::post('/create', [PersonController::class, 'store'])->name('person.store');
Route::post('/edit/{person}', [PersonController::class, 'edit'])->name('person.edit');
Route::put('/edit/{person}', [PersonController::class, 'update'])->name('person.update');
Route::post('/delete/{person}', [PersonController::class, 'delete'])->name('person.delete');
