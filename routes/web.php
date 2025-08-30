<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\LostItemController;
use App\Http\Controllers\HomeController;
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
// Route::middleware(['check.installation'])->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Route::resource('users', UserController::class);
// });

// Route::get('/', function () {
//     return redirect()->route('login');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::resource('users', UserController::class);
//     Route::resource('roles', RoleController::class);
//     Route::resource('permissions', PermissionController::class);
// });

// Route::middleware(['auth'])->group(function () {
//     Route::resource('companies', CompanyController::class);
// });

// Route::get('/install', [InstallController::class, 'index'])->name('install');

Route::get('/install', [InstallController::class, 'showForm'])->name('install.form');
Route::post('/install', [InstallController::class, 'runInstall'])->name('install.run');

Route::middleware(['check.installation'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['auth'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
    });

    Route::middleware(['auth'])->group(function () {
        Route::resource('companies', CompanyController::class);
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/lost-item', [LostItemController::class, 'lost_item'])->name('lost.item');
        Route::get('/lost-item-create', [LostItemController::class, 'lost_item_create'])->name('lost.item.create');
        Route::post('/lost-item-store', [LostItemController::class, 'lost_item_store'])->name('lost.item.store');
        Route::get('/lost-item-edit/{id}', [LostItemController::class, 'lost_item_edit'])->name('lost.item.edit');
        Route::post('/lost-item/{id}/update', [LostItemController::class, 'lost_item_update'])->name('lost.item.update');
    });
});


// Route::middleware(['check.installation'])->group(function () {
//     // Route::get('/', function () {
//     //     return view('welcome');
//     // });

//     Auth::routes();
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::middleware(['auth', 'role:admin'])->group(function () {
//         Route::resource('users', UserController::class);
//         Route::resource('roles', RoleController::class);
//         Route::resource('permissions', PermissionController::class);
//     });

//     Route::middleware(['auth'])->group(function () {
//         Route::resource('companies', CompanyController::class);
//     });
// });




// Route::resource('permissions', PermissionController::class)
//     ->middleware(['auth','role:admin']);
    
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])
//     ->name('admin.dashboard')
//     ->middleware(['auth', 'role:admin']);

// Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
//     ->name('user.dashboard')
//     ->middleware(['auth', 'role:user']);
// Route::prefix('licenses')->middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/', [LicenseController::class, 'index'])->name('licenses.index');
//     Route::get('/create', [LicenseController::class, 'create'])->name('licenses.create');
//     Route::post('/store', [LicenseController::class, 'store'])->name('licenses.store');
//     Route::get('/export', [LicenseController::class, 'export'])->name('licenses.export');
// });