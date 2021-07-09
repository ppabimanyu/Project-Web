<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardEventController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\UserRoleController;
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


// Index
Route::get('/', [EventController::class, 'index'])->name('/');
Route::get('/profile/{event}', [EventController::class, 'viewProfile'])->name('/view-profile');
Route::get('/details/{event}', [EventController::class, 'show'])->name('displayShow');

Route::group(['middleware' => ['auth:sanctum', 'verified', 'accessrole' ]], function() {

    // User Role
    Route::get('/userRole', [UserRoleController::class, 'index'])->name('userRole');

    // Dashboard user
    Route::get('/dashboard', [DashboardEventController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/detail/{event}', [DashboardEventController::class, 'show'])->name('detail');
    Route::get('/dashboard/create', [DashboardEventController::class, 'create'])->name('create');
    Route::post('/store', [DashboardEventController::class, 'store'])->name('store');
    Route::delete('/destroy/{event}', [DashboardEventController::class, 'destroy'])->name('destroy');
    Route::get('/dashboard/detail/{event}/edit', [DashboardEventController::class, 'edit'])->name('edit');
    Route::post('/update/{event}', [DashboardEventController::class, 'update'])->name('update');

    // Admin
    Route::get('/admin', [AdminEventController::class, 'index'])->name('admin');
});