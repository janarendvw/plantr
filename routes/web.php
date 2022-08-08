<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\StatisticsController;
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

Route::get('/', DashboardController::class)->name('dashboard');
Route::get('statistics', StatisticsController::class)->name('statistics');
Route::get('plants', PlantsController::class)->name('plants');
