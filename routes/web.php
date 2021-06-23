<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
// Route::get('/input', function () {
//     return view('input');
// });
// Route::get('/detail', function () {
//     return view('detail');
// });

// Route::get('/portfolio-details', function () {
//     return view('portfolio-details');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified' ]], function() {
    Route::get('/dashboard', [EventController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/detail/{event}', [EventController::class, 'show'])->name('detail');
    Route::get('/dashboard/create', [EventController::class, 'create'])->name('create');
    Route::post('/store', [EventController::class, 'store'])->name('store');
    Route::delete('/destroy/{event}', [EventController::class, 'destroy'])->name('destroy');
    Route::get('/dashboard/detail/{event}/edit', [EventController::class, 'edit'])->name('edit');
    Route::post('/update/{event}', [EventController::class, 'update'])->name('update');
});