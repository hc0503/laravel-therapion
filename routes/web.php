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
Route::get('/home', [LandingController::class, 'getHome'])->name('home');

Route::group(['prefix' => 'services', 'as' => 'services.'], function() {
	Route::get('/', [LandingController::class, 'getServices'])->name('all');
	Route::get('/individuals', [LandingController::class, 'getIndividuals'])->name('individuals');
	Route::get('/couples-and-families', [LandingController::class, 'getCouplesAndFamilies'])->name('couples-and-families');
	Route::get('/communities', [LandingController::class, 'getCommunities'])->name('communities');
	Route::get('/startups', [LandingController::class, 'getStartups'])->name('startups');
});

Route::get('/booking', [LandingController::class, 'getBooking'])->name('booking');
Route::get('/fee-cost', [LandingController::class, 'getFeeCost'])->name('fee-cost');
Route::get('/jobs', [LandingController::class, 'getJobs'])->name('jobs');
Route::get('/training', [LandingController::class, 'getTraining'])->name('training');
Route::get('/contact-us', [LandingController::class, 'getContactUs'])->name('contact-us');

Route::get('/db-migrate/psychologists', [DBMigrateController::class, 'psychologist']);

Route::get('/lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();