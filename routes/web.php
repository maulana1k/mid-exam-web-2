<?php

use App\Http\Controllers\BajuController;
use App\Http\Controllers\JenisBajuController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/',BajuController::class);
Route::resource('/jenis',JenisBajuController::class);

