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
| contains the 'web' middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');
Route::get('/home', [LandingController::class, 'home'])->name('home');

Route::group(['prefix' => 'services', 'as' => 'services.'], function() {
	Route::get('/', [LandingController::class, 'services'])->name('all');
	Route::get('/individuals', [LandingController::class, 'individuals'])->name('individuals');
	Route::get('/couples-and-families', [LandingController::class, 'couplesAndFamilies'])->name('couples-and-families');
	Route::get('/communities', [LandingController::class, 'communities'])->name('communities');
	Route::get('/startups', [LandingController::class, 'startups'])->name('startups');
});

Route::get('/booking', [LandingController::class, 'booking'])->name('booking');
Route::get('/fee-cost', [LandingController::class, 'feeCost'])->name('fee-cost');
Route::get('/jobs', [LandingController::class, 'jobs'])->name('jobs');
Route::get('/faq', [LandingController::class, 'faq'])->name('faq');

Route::get('/db-migrate/psychologists', [DBMigrateController::class, 'psychologist']);

Route::get('/lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();