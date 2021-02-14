<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ComplaintController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/complaint', [App\Http\Controllers\ComplaintController::class, 'index'])->name('welcome');
Route::get('/complaint/create', [App\Http\Controllers\ComplaintController::class, 'create'])->name('complaint.create');
Route::post('/complaint/store', [App\Http\Controllers\ComplaintController::class, 'store'])->name('complaint.store');
Route::get('/complaint/{complaint}', [App\Http\Controllers\ComplaintController::class, 'show'])->name('complaint.show');


Route::get('/opinion', [App\Http\Controllers\OpinionController::class, 'index'])->name('welcome');
Route::get('/opinion/create', [App\Http\Controllers\OpinionController::class, 'create'])->name('opinion.create');
Route::post('/opinion/store', [App\Http\Controllers\OpinionController::class, 'store'])->name('opinion.store');
Route::get('/opinion/{opinion}', [App\Http\Controllers\OpinionController::class, 'show'])->name('opinion.show');


