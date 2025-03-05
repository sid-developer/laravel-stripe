<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StripeController;

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
    return view('welcome');
});

/**
 * Stripe Payment
 */
Route::group(['prefix' => 'stripe'], function(){

    Route::get('/', [StripeController::class, 'index']);
    Route::post('payment', [StripeController::class, 'Payment'])->name('stripe.payment');
    Route::get('success', [StripeController::class, 'Success'])->name('stripe.success');
    Route::get('cancelled', [StripeController::class, 'Cancel'])->name('stripe.cancelled');

});


