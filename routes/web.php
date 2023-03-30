<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\AuthController;
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

/*Route::get('/', function () {
    return view('welcome');
}); 
*/
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::get('fullcalendar', [FullCalenderController::class, 'index']);
Route::post('fullcalendarAjax', [FullCalenderController::class, 'ajax']);
