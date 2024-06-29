<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HouseController::class, 'home'])->name('home');
Route::get('/house/{house}', [HouseController::class, 'show'])->name('show');
Route::get('/sobre', [HouseController::class, 'about'])->name('about')->name('about');
Route::get('/anuncio', [HouseController::class, 'publication'])->name('publication')->middleware('auth');
Route::post('/house/store', [HouseController::class, 'store'])->name('house.store');

//Contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('send');

// Authenticate
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/user/store', [LoginController::class, 'store'])->name('user.store');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');