<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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


Route::get('/', [AuthController::class, 'redirectTo'])->name('home');
// Route::get('/', fn() => view('welcome'));

Route::middleware('guest')->controller(AuthController::class)->group(function() {
  Route::get('login', 'index')->name('login');
  Route::post('login', 'login')->name('post.login');
});

Route::middleware('auth')->group(function() {
  Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('dashboard', fn() => view('admin.dashboard') )->name('dashboard');

  // TEST FILTER REQUEST
  Route::post('dashboard', fn() => dd(request('date_filter')) )->name('dashboard.filter');
});
