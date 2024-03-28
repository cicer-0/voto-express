<?php

use App\Http\Controllers\AuthController;
use App\Models\Election;
use App\Models\Option;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/elections', function () {
    $elections = Election::all();
    return view('page.election', compact('elections'));
})->name('elections');

Route::get('/options/{election}', function ($electionId) {
    $options = Option::where('election_id', $electionId)->get();
    return view('page.option', compact('options'));
})->name('options');

Route::get('/completed-vote/', function () {
    return view('page.completed-vote');
})->name('completed-vote');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
