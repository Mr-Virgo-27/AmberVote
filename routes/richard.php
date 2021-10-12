<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\TwilioController;

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardHome'])->name('dashboard.home');

    Route::get('sendSMS', [TwilioController::class, 'sendSMS'])->name('sendSMS');
});
Route::get('dashboard/Election', [\App\Http\Controllers\ElectionController::class, 'ElectionIndex'])->name('Election.Index');
Route::get('dashboard/Add/Election', [\App\Http\Controllers\ElectionController::class, 'AddElection'])->name('AddElection');
Route::post('dashboard/Store/Election', [\App\Http\Controllers\ElectionController::class, 'ElectionStore'])->name('Election.Store');

Route::get('dashboard/election/show/{id}', [ElectionController::class, 'show'])->name('election.show');
