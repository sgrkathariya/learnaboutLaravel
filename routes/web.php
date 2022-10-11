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

Route::get('/home', function () {
//     $demo = "<h1>Hello World</h1>";
// $data = compact('name', 'demo');
    return view('home')->name('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register/view', [RegistrationController::class, 'view']);
Route::get('/register/create', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);