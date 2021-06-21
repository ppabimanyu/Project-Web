<?php

use App\Http\Controllers\DashboardController;
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
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/detail', [DashboardController::class, 'index'])->name('detail');
    Route::get('/input', [DashboardController::class, 'create'])->name('input');
});