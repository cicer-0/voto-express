<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


### Rutas para `InstitutionController`

use App\Http\Controllers\InstitutionController;

Route::get('institutions', [InstitutionController::class, 'index']);
Route::post('institutions', [InstitutionController::class, 'store']);
Route::get('institutions/{id}', [InstitutionController::class, 'show']);
Route::put('institutions/{id}', [InstitutionController::class, 'update']);
Route::delete('institutions/{id}', [InstitutionController::class, 'destroy']);

### Rutas para `ElectionController`

use App\Http\Controllers\ElectionController;

Route::get('elections', [ElectionController::class, 'index']);
Route::post('elections', [ElectionController::class, 'store']);
Route::get('elections/{id}', [ElectionController::class, 'show']);
Route::put('elections/{id}', [ElectionController::class, 'update']);
Route::delete('elections/{id}', [ElectionController::class, 'destroy']);

### Rutas para `OptionController`

use App\Http\Controllers\OptionController;

Route::get('options', [OptionController::class, 'index']);
Route::post('options', [OptionController::class, 'store']);
Route::get('options/{id}', [OptionController::class, 'show']);
Route::put('options/{id}', [OptionController::class, 'update']);
Route::delete('options/{id}', [OptionController::class, 'destroy']);

### Rutas para `CandidateController`

use App\Http\Controllers\CandidateController;

Route::get('candidates', [CandidateController::class, 'index']);
Route::post('candidates', [CandidateController::class, 'store']);
Route::get('candidates/{id}', [CandidateController::class, 'show']);
Route::put('candidates/{id}', [CandidateController::class, 'update']);
Route::delete('candidates/{id}', [CandidateController::class, 'destroy']);

### Rutas para `UserController`
use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

### Rutas para `VoteController`

use App\Http\Controllers\VoteController;

Route::get('votes', [VoteController::class, 'index']);
Route::post('votes', [VoteController::class, 'store'])->name('votes');
Route::get('votes/{id}', [VoteController::class, 'show']);
Route::put('votes/{id}', [VoteController::class, 'update']);
Route::delete('votes/{id}', [VoteController::class, 'destroy']);
