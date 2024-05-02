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
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\CompanyListController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\DocumentTypeController;

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

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/users-list', [UserController::class, 'usersList'])->name('users.users-list');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
        Route::get('/reset-password/{id}', [UserController::class, 'resetPassword'])->name('users.resetPassword');
    });
    Route::prefix('employees')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
        Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('employees.update');
        Route::post('/update/address/{id}', [EmployeeController::class, 'updateAdress'])->name('employees.address.update');
        Route::post('/update/education/{id}', [EmployeeController::class, 'updateEducation'])->name('employees.education.update');
        Route::post('/update/documents/{id}', [EmployeeController::class, 'updateDocuments'])->name('employees.documents.update');
        Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('employees.delete');
        Route::delete('/force-delete/{id}', [EmployeeController::class, 'forceDelete'])->name('employees.force-delete');
        Route::get('/view/{id}', [EmployeeController::class, 'view'])->name('employees.view');
        Route::post('/employee-permission/{id}', [EmployeeController::class, 'employeePermission'])->name('employees.permission');
    });

    Route::prefix('leaves')->group(function () {
        Route::get('/request', [LeaveController::class, 'leaveRequest'])->name('leaves.request');
        Route::get('/approve', [LeaveController::class, 'leaveApproved'])->name('leaves.approve');
        Route::get('/reject', [LeaveController::class, 'leavereject'])->name('leaves.reject');
    });

    Route::prefix('employee-profile')->group(function () {
        Route::get('/', [EmployeeProfileController::class, 'index'])->name('employee-profile.index');
    });

    Route::prefix('manage-leave')->group(function () {
        Route::get('/', [LeaveController::class, 'index'])->name('leave.index');
    });
    Route::prefix('markattendance')->group(function () {
        Route::get('/', [AttendenceController::class, 'markattendance'])->name('attendance.mark-attendance.index');
    });
    Route::prefix('bulkattendance')->group(function () {
        Route::get('/', [AttendenceController::class, 'bulkattendance'])->name('attendance.bulk-attendance.index');
    });

    Route::prefix('roles')->group(function () {
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



    // Route start for settings menu


    Route::prefix('company-list')->group(function () {
        Route::get('/', [CompanyListController::class, 'index'])->name('company-list.index');
        Route::get('/create', [CompanyListController::class, 'create'])->name('company-list.create');
        Route::post('/store', [CompanyListController::class, 'store'])->name('company-list.store');
        Route::get('/edit/{id}', [CompanyListController::class, 'edit'])->name('company-list.edit');
        Route::post('/update/{id}', [CompanyListController::class, 'update'])->name('company-list.update');
        Route::get('/delete/{id}', [CompanyListController::class, 'delete'])->name('company-list.delete');
    });


    Route::prefix('departments')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('department.create');
        Route::post('/store', [DepartmentController::class, 'store'])->name('department.store');
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
        Route::get('/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
        // Route::get('/view/{id}', [EmployeeController::class, 'view'])->name('employees.view');
    });

    Route::prefix('designations')->group(function () {
        Route::get('/', [DesignationController::class, 'index'])->name('designation.index');
        Route::get('/create', [DesignationController::class, 'create'])->name('designation.create');
        Route::post('/store', [DesignationController::class, 'store'])->name('designation.store');
        Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
        Route::post('/update/{id}', [DesignationController::class, 'update'])->name('designation.update');
        Route::get('/delete/{id}', [DesignationController::class, 'delete'])->name('designation.delete');
        // Route::get('/view/{id}', [EmployeeController::class, 'view'])->name('employees.view');
    });

    Route::prefix('leave-type')->group(function () {
        Route::get('/', [LeaveTypeController::class, 'index'])->name('leave-type.index');
        Route::get('/create', [LeaveTypeController::class, 'create'])->name('leave-type.create');
        Route::post('/store', [LeaveTypeController::class, 'store'])->name('leave-type.store');
        Route::get('/edit/{id}', [LeaveTypeController::class, 'edit'])->name('leave-type.edit');
        Route::post('/update/{id}', [LeaveTypeController::class, 'update'])->name('leave-type.update');
        Route::get('/delete/{id}', [LeaveTypeController::class, 'delete'])->name('leave-type.delete');
    });

    Route::prefix('document-type')->group(function () {
        Route::get('/', [DocumentTypeController::class, 'index'])->name('document-type.index');
        Route::get('/create', [DocumentTypeController::class, 'create'])->name('document-type.create');
        Route::post('/store', [DocumentTypeController::class, 'store'])->name('document-type.store');
        Route::get('/edit/{id}', [DocumentTypeController::class, 'edit'])->name('document-type.edit');
        Route::post('/update/{id}', [DocumentTypeController::class, 'update'])->name('document-type.update');
        Route::get('/delete/{id}', [DocumentTypeController::class, 'delete'])->name('document-type.delete');
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
