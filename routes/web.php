<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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
Route::get('/booking-new', [LandingController::class, 'book'])->name("book");
Route::get('/fee-cost', [LandingController::class, 'fee_cost'])->name("fee_cost");

Auth::routes();