<?php

use App\Http\Controllers\AdminAuth\AdminRegisteredUserController;
use App\Http\Controllers\AdminAuth\AdminAuthenticatedSessionController;
use App\Http\Controllers\AdminAuth\AdminConfirmablePasswordController;
use App\Http\Controllers\AdminAuth\AdminEmailVerificationNotificationController;
use App\Http\Controllers\AdminAuth\AdminEmailVerificationPromptController;
use App\Http\Controllers\AdminAuth\AdminNewPasswordController;
use App\Http\Controllers\AdminAuth\AdminPasswordController;
use App\Http\Controllers\AdminAuth\AdminPasswordResetLinkController;
use App\Http\Controllers\AdminAuth\AdminVerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {

    Route::get('admin/register', [AdminRegisteredUserController::class, 'admin_create'])
    ->name('admin.register');

    Route::post('admin/register', [AdminRegisteredUserController::class, 'admin_store']);


    Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'admin_create'])
                ->name('admin.login');

    Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'admin_store']);

    Route::get('admin/forgot-password', [AdminPasswordResetLinkController::class, 'admin_create'])
                ->name('admin.password.request');

    Route::post('admin/forgot-password', [AdminPasswordResetLinkController::class, 'admin_store'])
                ->name('admin.password.email');

    Route::get('admin/reset-password/{token}', [AdminNewPasswordController::class, 'admin_create'])
                ->name('admin.password.reset');

    Route::post('admin/reset-password', [AdminNewPasswordController::class, 'admin_store'])
                ->name('admin.password.store');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('verify-email',AdminEmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('admin/verify-email/{id}/{hash}', AdminVerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('admin.verification.verify');

    Route::post('admin/email/verification-notification', [AdminEmailVerificationNotificationController::class, 'admin_store'])
                ->middleware('throttle:6,1')
                ->name('admin.verification.send');

    Route::get('admin/confirm-password', [AdminConfirmablePasswordController::class, 'admin_show'])
                ->name('admin.password.confirm');

    Route::post('admin/confirm-password', [AdminConfirmablePasswordController::class, 'admin_store']);

    Route::put('admin/password', [AdminPasswordController::class, 'admin.update'])->name('admin.password.update');

    Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'admin_destroy'])
                ->name('admin.logout');
});
