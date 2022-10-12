<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Registration;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register/view', [RegistrationController::class, 'view'])->name('view');
Route::get('/register/create', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('register/delete/{id}',[RegistrationController::class,'destroy'])->name('delete');
Route::get('register/edit/{id}',[RegistrationController::class,'edit'])->name('edit');
Route::get('register/update/{id}',[RegistrationController::class,'update'])->name('update');