<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayController;
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

Route::resource('users', UserController::class);


Route::get('/holidays', [HolidayController::class, 'index'])->name('holidays.index');
Route::get('/holidays/create', [HolidayController::class, 'create'])->name('holidays.create');
Route::post('/holidays', [HolidayController::class, 'store'])->name('holidays.store');
Route::get('/holidays/{id}', [HolidayController::class, 'show'])->name('holidays.show');
Route::get('/holidays/{id}/edit', [HolidayController::class, 'edit'])->name('holidays.edit');
Route::put('/holidays/{id}', [HolidayController::class, 'update'])->name('holidays.update');
Route::delete('/holidays/{id}', [HolidayController::class, 'destroy'])->name('holidays.destroy');
Route::get('/holidays/year', [HolidayController::class, 'getHolidaysForYear'])->name('holidays.year');