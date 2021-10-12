<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\BallotMsgController;
use App\Http\Controllers\QuestionAnswerController;


Route::get('/dashboard/ballot/{id}', [BallotController::class, 'index'])->name('ballots');

Route::get('/dashboard/ballotType{id}', [BallotController::class, 'create'])->name('ballotsType');

Route::post('/dashboard/ballotType', [BallotController::class, 'store'])->name('storeBallot');

Route::get('/dashboard/ballotmsgs', [BallotMsgController::class, 'index'])->name('ballot.msgs');

Route::post('/dashboard/ballotmsgs', [BallotMsgController::class, 'store'])->name('ballotmsgs.store');


Route::get('election/{id}', [QuestionAnswerController::class, 'index'])->name('election.index');

// Route::post('/election/{id}', [QuestionAnswerController::class, 'login'])->name('election.store');

Route::get('election/{id}/ballot', [QuestionAnswerController::class, 'create'])->name('election.answer');

Route::post('election/answers', [QuestionAnswerController::class, 'store'])->name('election.storeanswer');


