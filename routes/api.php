<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'submitContact']);
Route::get('/contact/contact-reasons', [ContactController::class, 'getAllReason']);

