<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TwilioController;

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardHome'])->name('dashboard.home');

    Route::get('sendSMS', [TwilioController::class, 'sendSMS'])->name('sendSMS');
});

Route::get('/View/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'ViewBO'])->name('ViewBO');
Route::get('/Edit/BallotOption/{id?}', [\App\Http\Controllers\BallotOptionController::class, 'ViewUpdateBO'])->name('ViewUpdateBO');
Route::get('/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'BO'])->name(' BO');
Route::post('/Add/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'AddBO'])->name('AddBO');
Route::get('/Delete/BallotOption/{id}', [\App\Http\Controllers\BallotOptionController::class, 'delete'])->name('DeleteBO');
Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');
