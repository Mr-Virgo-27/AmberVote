<?php

Route::get('/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'BQ'])->name('BQ');
Route::post('/Add/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'AddBQ'])->name('AddBQ');
Route::get('/View/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'ViewBQ'])->name('ViewBQ');
Route::get('/Edit/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'ViewUpdateBQ'])->name('ViewUpdateBQ');
Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'UpdateBQ'])->name('UpdateBQ');
Route::get('/Delete/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'DeleteBQ'])->name('DeleteBQ');

Route::get('/View/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'ViewBO'])->name('ViewBO');
Route::get('/Edit/BallotOption/{id?}', [\App\Http\Controllers\BallotOptionController::class, 'ViewUpdateBO'])->name('ViewUpdateBO');
Route::get('/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'BO'])->name(' BO');
Route::post('/Add/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'AddBO'])->name('AddBO');
Route::get('/Delete/BallotOption/{id}', [\App\Http\Controllers\BallotOptionController::class, 'delete'])->name('DeleteBO');
Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');


Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');
