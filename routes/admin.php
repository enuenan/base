<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('user', UserController::class);

    Route::get('all-admin', [UserController::class, 'allAdmin'])->name('allAdmin');
    Route::get('all-teacher', [UserController::class, 'allTeacher'])->name('allTeacher');

    // SETTINGS START
    Route::get('settings', [SettingsController::class, 'settings'])->name('settings');
    Route::post('profile-settings/{id}', [SettingsController::class, 'profileSettings'])->name('profileSettings');
    Route::post('change-password/{id}', [SettingsController::class, 'changePassword'])->name('changePassword');
    // SETTINGS END
});

require __DIR__ . '/auth.php';
