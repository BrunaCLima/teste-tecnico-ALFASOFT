<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::middleware('auth')->group(function () {
    Route::resource('contacts', ContactController::class)->except(['index']);

Route::get('/dashboard', function () {
    return redirect('/contacts');
})->name('dashboard');




});
