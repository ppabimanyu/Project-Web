<?php

use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'display'])->name('/');
Route::get('/details/{event}', [EventController::class, 'displayShow'])->name('displayShow');

Route::group(['middleware' => ['auth:sanctum', 'verified' ]], function() {
    Route::get('/dashboard', [EventController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/detail/{event}', [EventController::class, 'show'])->name('detail');
    Route::get('/dashboard/create', [EventController::class, 'create'])->name('create');
    Route::post('/store', [EventController::class, 'store'])->name('store');
    Route::delete('/destroy/{event}', [EventController::class, 'destroy'])->name('destroy');
    Route::get('/dashboard/detail/{event}/edit', [EventController::class, 'edit'])->name('edit');
    Route::post('/update/{event}', [EventController::class, 'update'])->name('update');
});