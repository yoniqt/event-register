<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index'])->name('event.show');

Route::post('/api/register', [RegistrationController::class, 'store'])->name('api.register');

Route::get('/admin/login', [AuthController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'store'])->name('admin.login.store');
Route::post('/admin/logout', [AuthController::class, 'destroy'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    Route::view('/admin/registrations', 'admin.registrations')->name('admin.registrations');
    Route::get('/api/admin/registrations', [AdminRegistrationController::class, 'index'])->name('admin.api.registrations');
    Route::get('/api/admin/registrations/export', [AdminRegistrationController::class, 'export'])->name('admin.api.registrations.export');
});
