<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\DonationController;

// Homepage route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Donation resource routes
Route::resource('donors', DonorController::class);
Route::resource('recipients', RecipientController::class);
Route::resource('donations', DonationController::class);
Route::get('donations/success/{id}', [DonationController::class, 'success'])->name('donations.success');
