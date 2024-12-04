<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'vlog'])->name('vlog');

Route::get('/vlog-post/{id}', [App\Http\Controllers\FrontController::class, 'vlogPost'])->name('vlog-post');

Route::group(['prefix'=>'backend','as'=>'backend.'],function() {
    Route::get('/', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
