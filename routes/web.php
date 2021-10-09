<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BallotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;

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

// Richard routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard
    ');
});


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/dashboard/ballot', [BallotController::class, 'index'])->name('ballots');

Route::get('/dashboard/ballotType', [BallotController::class, 'create'])->name('ballotsType');

Route::post('/dashboard/ballotType', [BallotController::class, 'store'])->name('storeBallot');

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



//Voter Section

//Adding Voters Routes
Route::get('/Add/Election/Voter',[VoterController::class,'index'])->name('AddVoterIndex');

Route::post('/Add/Election/Voter',[VoterController::class,'addvoter'])->name('AddVoterIndex');

//View Voters Info Routes
Route::get('/View/Election/Voters',[VoterController::class,'view'])->name('ViewVoterIndex');

//Edit Voters Info Routes
Route::get('/Edit/Election/Voter{id}',[VoterController::class,'edit'])->name('EditVoterIndex');

Route::post('/Edit/Election/Voter',[VoterController::class,'update'])->name('EditVoterIndex');

//Delete Voter

Route::get('/Delete/Election/Voter{id}',[VoterController::class,'delete'])->name('DeleteVoterIndex');

