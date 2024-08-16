<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('dashboard/users', UsersController::class)->middleware('auth');

Route::resource('dashboard/leads', LeadController::class)->middleware('auth');
Route::resource('dashboard/products', ProductController::class)->middleware('auth');
Route::resource('dashboard/projects', ProjectController::class)->middleware('auth');
Route::get('projects/{project}/approve', [ProjectController::class, 'approve'])->name('projects.approve');
Route::get('projects/{project}/reject', [ProjectController::class, 'reject'])->name('projects.reject');
Route::resource('dashboard/subscriptions', SubscriptionController::class)->middleware('auth');

Route::get('dashboard/customers', [CustomerController::class, 'index'])->name('customers.index');
