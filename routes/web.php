<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; # don't forgot to add this
use App\Http\Controllers\PageController; # don't forgot to add this

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



Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/vulnerabilities', [PageController::class, 'index'])->name('vulnerabilities');
Route::get('/vulnerability/{id}', [PageController::class, 'show'])->name('vulnerability');

Auth::routes();

Route::middleware('auth')->group(function () {
        Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
        Route::get('create', [PageController::class, 'create'])->name('create');
        Route::post('create', [PageController::class, 'insert'])->name('insert');
        Route::get('vulnerability/edit/{id}', [PageController::class, 'vulnerabilityEdit'])->name('vulnerability.edit');
        Route::post('vulnerability/edit/{id}', [PageController::class, 'vulnerabilityUpdate'])->name('vulnerability.update');
        Route::post('dashboard', [PageController::class, 'vulnerabilityDelete'])->name('vulnerability.delete');
    });




