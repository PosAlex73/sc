<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function() {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        Route::resource('admin_notifications', \App\Http\Controllers\Admin\AdminNotificationsController::class);
        Route::resource('groups', \App\Http\Controllers\Admin\GroupController::class);
        Route::resource('group_messages', \App\Http\Controllers\Admin\GroupMessageController::class);
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
        Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
        Route::resource('thread_messages', \App\Http\Controllers\Admin\ThreadMessagesController::class);
        Route::resource('threads', \App\Http\Controllers\Admin\ThreadController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('users_notifications', \App\Http\Controllers\Admin\UserNotificationController::class);
    });
});
