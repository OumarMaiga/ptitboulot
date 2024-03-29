<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PageController;
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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/profile', ProfileController::class)
        ->only(['show', 'edit', 'update', 'destroy'])
        ->middleware('auth');

Route::resource('/company', CompanyController::class)
        ->middleware('auth');

Route::resource('/offer', OfferController::class)
        ->middleware('auth');

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/apply-for-job', [PageController::class, 'apply_page'])->name('apply-for-job');
Route::post('/apply-for-job', [PageController::class, 'apply'])->name('apply-for-job');

require __DIR__.'/auth.php';
