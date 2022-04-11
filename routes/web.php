<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Main\ {
  DashboardController as Dashboard
};
use App\Http\Controllers\Sales\ {
  ProductController as Product,
  CategoryController as Category,
  IncomingController as Incoming,
  OutgoingController as Outgoing,
  SupplierController as Supplier
};


Route::get('/', [AuthController::class, 'redirectTo'])->name('home');

Route::middleware('guest')->controller(AuthController::class)->group(function() {
  Route::get('login', 'index')->name('login');
  Route::post('login', 'login')->name('post.login');
});

Route::middleware('auth')->group(function() {
  Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');

  Route::resource('product', Product::class)->except(['edit']);
  Route::resource('category', Category::class)->except(['create', 'edit']);
  Route::resource('supplier', Supplier::class)->except(['create', 'edit', 'show']);
  Route::resource('incoming-stock', Incoming::class)->except(['edit', 'update']);
  Route::resource('outgoing-stock', Outgoing::class)->except(['edit', 'update']);

  // TEST FILTER REQUEST
  Route::post('dashboard', [Dashboard::class, 'filter'] )->name('dashboard.filter');
});
