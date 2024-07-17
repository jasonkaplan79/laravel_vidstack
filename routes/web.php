<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', []);
})->name('home');

Route::get('/test1', function () {
    return Inertia::render('Test1', []);
})->name('test1');

Route::get('/test2', function () {
    return Inertia::render('Test2', []);
})->name('test2');
