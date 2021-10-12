<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\BallotMsgController;

Route::get('/dashboard/ballot/{id}', [BallotController::class, 'index'])->name('ballots');

Route::get('/dashboard/ballotType{id}', [BallotController::class, 'create'])->name('ballotsType');

Route::get('/dashboard/ballotType/{id}', [BallotController::class, 'store'])->name('storeBallot');

Route::get('/dashboard/ballotmsgs', [BallotMsgController::class, 'index'])->name('ballot.msgs');
