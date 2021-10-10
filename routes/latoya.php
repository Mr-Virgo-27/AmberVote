<?php

use App\Http\Controllers\BallotController;

Route::get('/dashboard/ballot', [BallotController::class, 'index'])->name('ballots');

Route::get('/dashboard/ballotType', [BallotController::class, 'create'])->name('ballotsType');

Route::post('/dashboard/ballotType', [BallotController::class, 'store'])->name('storeBallot');
