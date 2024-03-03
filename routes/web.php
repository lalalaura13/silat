<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::post('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
