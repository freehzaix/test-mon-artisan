<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AssuranceController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\SinistreController;

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

Route::get('/',[PageController::class, 'index'])->name('index');

Route::post('/sinistre', [SinistreController::class, 'sinistre'])->name('sinistrePost');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'loginPost'])->name('login');
Route::post('/register', [UserController::class, 'registerPost'])->name('register');

Route::middleware(['auth'])->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/assurance', [PageController::class, 'assurance'])->name('assurance');
        Route::post('/assurance', [AssuranceController::class, 'ajouter_assurance'])->name('assurance');

        Route::get('/intervention', [PageController::class, 'intervention'])->name('intervention');
        Route::post('/intervention', [InterventionController::class, 'ajouter_intervention'])->name('intervention');

        Route::get('/sinistre', [PageController::class, 'sinistre'])->name('sinistre');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    });
});