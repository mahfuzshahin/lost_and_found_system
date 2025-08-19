<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\InstallController;
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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

// Route::resource('permissions', PermissionController::class)
//     ->middleware(['auth','role:admin']);
    
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])
//     ->name('admin.dashboard')
//     ->middleware(['auth', 'role:admin']);

// Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
//     ->name('user.dashboard')
//     ->middleware(['auth', 'role:user']);

Route::middleware(['auth'])->group(function () {
    Route::resource('companies', CompanyController::class);
});

// Route::get('/install', [InstallController::class, 'index'])->name('install');

Route::get('/install', [InstallController::class, 'showForm'])->name('install.form');
Route::post('/install', [InstallController::class, 'runInstall'])->name('install.run');

Route::prefix('licenses')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [LicenseController::class, 'index'])->name('licenses.index');
    Route::get('/create', [LicenseController::class, 'create'])->name('licenses.create');
    Route::post('/store', [LicenseController::class, 'store'])->name('licenses.store');
    Route::get('/export', [LicenseController::class, 'export'])->name('licenses.export');
});