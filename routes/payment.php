<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

use App\Models\Course;

Route::get('{course}/checkout', [PaymentController::class , 'checkout'])->name('checkout') ;

Route::get('{course}/pay', [PaymentController::class , 'pay'])->name('pay') ;

//Route::get('{course}/approved', [PaymentController::class , 'approved'])->name('pay') ;

