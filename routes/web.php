<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\UserDashboardController;
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
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
Route::resource('permissions', PermissionController::class)
    ->middleware(['auth','role:admin']);
    
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'role:admin']);

Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->name('user.dashboard')
    ->middleware(['auth', 'role:user']);