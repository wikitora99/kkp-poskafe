<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Owner\ {
  DashboardController as Dashboard,
  ProductController as Product
};

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

Route::middleware('guest')->controller(AuthController::class)->group(function() {
  Route::get('login', 'index')->name('login');
  Route::post('login', 'login')->name('post.login');
});

Route::middleware('auth')->group(function() {
  Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');

  Route::resource('product', Product::class);

  // TEST FILTER REQUEST
  Route::post('dashboard', [Dashboard::class, 'filter'] )->name('dashboard.filter');
});
