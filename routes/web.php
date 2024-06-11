<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;



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

Route::view('/' , 'welcome');


Route::resource('docentes', DocenteController::class);


