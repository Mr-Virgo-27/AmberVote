<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BallotController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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