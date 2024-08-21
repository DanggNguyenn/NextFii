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
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarController;


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



Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('meal', MealController::class);
    Route::resource('restaurant', RestaurantController::class);
    Route::resource('lunchrequest', LunchRequestController::class);
    Route::resource('lunchchoice', LunchChoiceController::class);
});

Route::middleware(['auth', 'role:dev'])->group(function () {
    Route::get('/employee', [UserController::class, 'showEmployee'])->name('employee.index');
    Route::resource('Order', LunchChoiceController::class);

    Route::get('/calendar/events', [CalendarController::class, 'getEvents']);

    Route::post('/orders', [CalendarController::class, 'store'])->name('orders.store');

    Route::get('/lunch-requests/{lunchRequest}/details', [CalendarController::class, 'showDetails'])->name('lunch-requests.show-details');

    Route::get('/lunch-requests', [CalendarController::class, 'index']);
    Route::get('/get-lunch-requests', [CalendarController::class, 'getLunchRequests']);
    Route::post('/save-lunch-order', [CalendarController::class, 'saveLunchOrder']);

    Route::get('/get-order/{id}', [CalendarController::class, 'getOrder'])->name('getOrder');

    // Route để cập nhật thông tin đơn hàng
    Route::put('/update-order/{id}', [CalendarController::class, 'updateOrder'])->name('updateOrder');

    // Route để xóa đơn hàng
    Route::delete('/delete-order/{id}', [CalendarController::class, 'deleteOrder'])->name('deleteOrder');

    // Route::post('/create',[OrderController::class, 'store'])->name('order.store');
    Route:: get('/show-orders', [CalendarController::class, 'showOrders']);
});

   