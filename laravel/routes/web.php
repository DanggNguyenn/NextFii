<?php

use App\Models\LunchRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\LunchRequestController;
use App\Http\Controllers\LunchChoiceController;
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



Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::resource('meal', MealController::class);
Route::resource('restaurant', RestaurantController::class);
Route::resource('lunchrequest', LunchRequestController::class);
Route::resource('lunchchoice', LunchChoiceController::class);

