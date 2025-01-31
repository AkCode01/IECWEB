<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\FatawaController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeamController;

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

// Route::get('/', function () {return view('welcome'); });

Route::get('/', [HomeController::class,'index']);
Route::get('/Appointment', [AppointmentController::class,'index']);
Route::get('/Scholarship', [ScholarshipController::class,'index']);
Route::get('/Fatawa', [FatawaController::class,'index']);
Route::get('/Contact', [ContactController::class,'index']);