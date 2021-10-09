<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'BQ'])->name('BQ');
Route::post('/Add/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'AddBQ'])->name('AddBQ');
Route::get('/View/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'ViewBQ'])->name('ViewBQ');
Route::get('/Edit/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'ViewUpdateBQ'])->name('ViewUpdateBQ');
Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'UpdateBQ'])->name('UpdateBQ');
Route::get('/Delete/BallotQuestion/{id?}', [\App\Http\Controllers\BallotQuestionController::class, 'DeleteBQ'])->name('DeleteBQ');

Route::get('/View/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'ViewBO'])->name('ViewBO');
Route::get('/Edit/BallotOption/{id?}', [\App\Http\Controllers\BallotOptionController::class, 'ViewUpdateBO'])->name('ViewUpdateBO');
Route::post('/Update/BallotQuestion', [\App\Http\Controllers\BallotOptionController::class, 'UpdateBO'])->name('UpdateBO');
Route::get('/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'BO'])->name(' BO');
Route::post('/Add/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'AddBO'])->name('AddBO');
Route::get('/Delete/BallotOption/{id}', [\App\Http\Controllers\BallotOptionController::class, 'delete'])->name('DeleteBO');
Route::get('/Add/Election', [\App\Http\Controllers\ElectionController::class, 'AddElection'])->name('AddElection');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//3447 0494
