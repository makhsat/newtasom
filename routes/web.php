<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page2');
});

Route::get('/',  function () {
    return view('page2');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('stripe/checkout',[StripeController::class,'checkout'])->name('stripe.checkout');
Route::get('stripe/checkout/success',[StripeController::class,'success'])->name('stripe.checkout.success');
Route::get('stripe/checkout/cancel',[StripeController::class,'cancel'])->name('stripe.checkout.cancel');
Route::post('stripe/checkout/webhook',[StripeController::class,'webhook'])->name('stripe.checkout.webhook');
