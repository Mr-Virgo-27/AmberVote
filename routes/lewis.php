<?php

Route::get('dashboard/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'BQ'])->name('BQ');
Route::post('dashboard/Add/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'AddBQ'])->name('AddBQ');
Route::get('dashboard/View/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'ViewBQ'])->name('ViewBQ');
Route::get('dashboard/Edit/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'ViewUpdateBQ'])->name('ViewUpdateBQ');
Route::post('dashboard/Update/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'UpdateBQ'])->name('UpdateBQ');
Route::get('dashboard/Delete/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'DeleteBQ'])->name('DeleteBQ');


Route::post('dashboard/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');

Route::get('dashboard/Election', [\App\Http\Controllers\ElectionController::class, 'ElectionIndex'])->name('Election.Index');
Route::get('dashboard/Add/Election', [\App\Http\Controllers\ElectionController::class, 'AddElection'])->name('AddElection');
Route::post('dashboard/Store/Election', [\App\Http\Controllers\ElectionController::class, 'ElectionStore'])->name('Election.Store');
