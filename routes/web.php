<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;
use App\Mail\WellcomeEmail;
use App\Http\Controllers\EditrouteView;
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
Route::post('/send-email',[SendEmailController::class,'sendEmail']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sendEmails',EditrouteView::class);