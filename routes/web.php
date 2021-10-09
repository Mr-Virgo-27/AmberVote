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

//election
Route::get('/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'BQ'])->name('BQ');
Route::post('/Add/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'AddBQ'])->name('AddBQ');
Route::get('/View/BallotQuestion', [\App\Http\Controllers\BallotQuestionController::class, 'ViewBQ'])->name('ViewBQ');
Route::get('/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'BO'])->name(' BO');
Route::post('/Add/BallotOption', [\App\Http\Controllers\BallotOptionController::class, 'AddBO'])->name('AddBO');
Route::get('/Add/Election', [\App\Http\Controllers\ElectionController::class, 'AddElection'])->name('AddElection');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//3447 0494
