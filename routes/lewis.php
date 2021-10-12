<?php

Route::get('dashboard/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'BQ'])->name('BQ');
Route::post('dashboard/Add/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'AddBQ'])->name('AddBQ');
Route::get('dashboard/View/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'ViewBQ'])->name('ViewBQ');
Route::get('dashboard/Edit/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'ViewUpdateBQ'])->name('ViewUpdateBQ');
Route::post('dashboard/Update/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'UpdateBQ'])->name('UpdateBQ');
Route::get('dashboard/Delete/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'DeleteBQ'])->name('DeleteBQ');

Route::get('/View/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'ViewBO'])->name('ViewBO');
Route::get('/Edit/BallotOption/{id?}', [\App\Http\Controllers\BallotOptionController::class, 'ViewUpdateBO'])->name('ViewUpdateBO');
Route::get('/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'BO'])->name(' BO');
Route::post('/Add/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'AddBO'])->name('AddBO');
Route::get('/Delete/BallotOption/{id}', [\App\Http\Controllers\BallotOptionController::class, 'delete'])->name('DeleteBO');

Route::post('dashboard/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');


Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');
