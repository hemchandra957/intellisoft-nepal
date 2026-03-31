<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact Form Submit गर्ने Route
Route::post('/contact/send', [ContactController::class, 'store'])->name('contact.store');


