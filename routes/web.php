<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CopilotController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/filieres', [FiliereController::class, 'index'])->name('filieres');

foreach (FiliereController::SLUGS as $slug) {
    Route::get('/filieres/'.$slug, [FiliereController::class, 'show'])
        ->defaults('slug', $slug)
        ->name('filieres.'.$slug);
}

foreach (InformationController::SLUGS as $slug) {
    Route::get('/'.$slug, [InformationController::class, 'show'])
        ->defaults('slug', $slug)
        ->name('information.'.$slug);
}

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/copilot/message', [CopilotController::class, 'reply'])
    ->middleware('throttle:12,1')
    ->name('copilot.reply');
