<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\DepartmentController;
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

use App\Http\Controllers\PersonController;

Route::get('people', [PersonController::class, 'index'])->name('people.index');
Route::get('people/create', [PersonController::class, 'create'])->name('people.create');
Route::post('people', [PersonController::class, 'store'])->name('people.store');
Route::post('people/{id}/mark-present', [PersonController::class, 'markPresent'])->name('people.mark-present');
Route::resource('departments', DepartmentController::class);
Route::resource('administrations', AdministrationController::class);


Route::get('people/report', [PersonController::class, 'generateReport'])->name('people.report');
