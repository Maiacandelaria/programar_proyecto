<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

use App\Models\Course;

Route::get('{course}/checkout', [PaymentController::class , 'checkout'])->name('checkout') ;