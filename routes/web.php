<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\BookingController as LandingBookingController;
use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\Portal\BookingController;
use App\Http\Controllers\Portal\UserController;
use App\Http\Controllers\Portal\CounselorController;

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

Route::get('/', function() {
	return redirect(app()->getLocale() . '/home');
});

Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale'], function() {
	Route::get('/home', [LandingController::class, 'getHome'])->name('home');
	Route::group(['prefix' => 'services', 'as' => 'services.'], function() {
		Route::get('/', [LandingController::class, 'getServices'])->name('all');
		Route::get('/individuals', [LandingController::class, 'getIndividuals'])->name('individuals');
		Route::get('/couples-and-families', [LandingController::class, 'getCouplesAndFamilies'])->name('couples-and-families');
		Route::get('/communities', [LandingController::class, 'getCommunities'])->name('communities');
		Route::get('/startups', [LandingController::class, 'getStartups'])->name('startups');
	});
	Route::group(['prefix' => 'booking', 'as' => 'booking.'], function() {
		Route::get('/', [LandingController::class, 'getBooking'])->name('all');
		Route::get('/{psychologist}/details', [LandingController::class, 'getDetails'])->name('details');
		Route::post('/book/{id}', [LandingBookingController::class, 'postBook'])->name('book');
		Route::get('/payment', [LandingBookingController::class, 'showPayment'])->name('show-payment');
	});
	Route::get('/fee-cost', [LandingController::class, 'getFeeCost'])->name('fee-cost');
	Route::get('/jobs', [LandingController::class, 'getJobs'])->name('jobs');
	Route::get('/training', [LandingController::class, 'getTraining'])->name('training');
	Route::get('/contact-us', [LandingController::class, 'getContactUs'])->name('contact-us');
	Route::get('/terms-of-service', [LandingController::class, 'getTermsOfService'])->name('terms-of-service');
	Route::get('/privacy-policy', [LandingController::class, 'getPrivacyPolicy'])->name('privacy-policy');
	Route::get('/about-us', [LandingController::class, 'getAboutUs'])->name('about-us');
	Route::get('/collaboration', [LandingController::class, 'getCollaboration'])->name('collaboration');
	Route::get('/press-media', [LandingController::class, 'getPressMedia'])->name('press-media');
	Route::get('/additional-payment', [LandingController::class, 'getAdditionalPayment'])->name('additional-payment');

	Route::group(['prefix' => 'stripe', 'as' => 'stripe.'], function() {
		Route::get('/{booking}/checkout', [StripePaymentController::class, 'getCheckout'])->name('checkout.show');
		Route::post('/{booking}/checkout', [StripePaymentController::class, 'postCheckout'])->name('checkout');
		Route::get('/{booking}/success', [StripePaymentController::class, 'getSuccess'])->name('success');
		Route::get('/cancel', [StripePaymentController::class, 'getCancel'])->name('cancel');
	});
});

Route::middleware(['auth'])->group( function () {
	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
		Route::get('/', [HomeController::class, 'index'])->name('home');
		Route::resource('users', UserController::class);
		Route::resource('counselors', CounselorController::class);
		Route::group(['prefix' => 'bookings', 'as' => 'bookings.'], function() {
			Route::get('/', [BookingController::class, 'getBookings'])->name('index');
			Route::delete('/destroy/{id}', [BookingController::class, 'destroy'])->name('destroy');
		});
	});
});

Auth::routes([
	'register' => false
]);




Route::get('/db-migrate/psychologists', [DBMigrateController::class, 'psychologist']);