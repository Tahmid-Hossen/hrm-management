<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeProfileController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PermissionController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('users')->group(function (){
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
    });
    Route::prefix('employees')->group(function (){
        Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('employees.edit');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('employees.update');
        Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('employees.delete');
    });

    Route::prefix('employee-profile')->group(function (){
        Route::get('/', [EmployeeProfileController::class, 'index'])->name('employee-profile.index');
    });

    Route::prefix('manage-leave')->group(function (){
        Route::get('/', [LeaveController::class, 'index'])->name('leave.index');
    });

    Route::prefix('roles')->group(function (){
        Route::get('/', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/store', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('roles.update');
        // Route::get('/change-permission/{id}', [RoleController::class, 'changePermission'])->name('roles.change-permission');
        // Route::get('/change-permission', [RoleController::class, 'changePermission'])->name('roles.change-permission');

        Route::get('/edit-permission/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::post('/update-permission/{id}', [PermissionController::class, 'update'])->name('permission.update');

    });
});
require __DIR__ . '/auth.php';


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';*/
