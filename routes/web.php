<?php

use App\Enums\VaccineCenter;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[RegistrationController::class,'RegistraionPage']);
Route::post('/RegisterUser',[RegistrationController::class,'RegisterUser'])->name('Register.User');
