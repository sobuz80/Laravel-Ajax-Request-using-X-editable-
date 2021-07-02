<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XeditableController;
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

Route::get('home',[XeditableController::class ,'index'])->name('home');
Route::post('editable/update',[XeditableController::class ,'update'])->name('editable.updates');