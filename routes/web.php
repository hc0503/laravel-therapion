<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\DBMigrateController;

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

Route::get('/', [LandingController::class, 'index'])->name("home");
Route::get('/booking', [LandingController::class, 'book'])->name("book");
Route::get('/fee-cost', [LandingController::class, 'fee_cost'])->name("fee_cost");
Route::get('/service', [LandingController::class, 'service'])->name("service");
Route::get('/jobs', [LandingController::class, 'jobs'])->name("jobs");

Route::get('/db-migrate/psychologists', [DBMigrateController::class, 'psychologist']);

Route::get('/lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();