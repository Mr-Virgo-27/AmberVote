<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TwilioController;
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
    Route::get('sendSMS', [TwilioController::class, 'sendSMS'])->name('sendSMS');
});


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
