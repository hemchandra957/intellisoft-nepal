<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blogs/{slug}', [PageController::class, 'blogDetail'])->name('blog.detail');


Route::post('/contact/send', [ContactController::class, 'store'])->name('contact.store');


