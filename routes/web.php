<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('/lapangan', [FieldController::class, 'index'])->name('field.index');

    Route::get('/booking', [FieldController::class, 'book'])->name('field.book');
});
