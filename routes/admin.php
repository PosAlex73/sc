<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function() {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

        Route::resource('admin_notifications', \App\Http\Controllers\Admin\AdminNotificationsController::class);
        Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class)->only(['index']);
        Route::resource('groups', \App\Http\Controllers\Admin\GroupController::class);
        Route::resource('group_messages', \App\Http\Controllers\Admin\GroupMessageController::class);
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
        Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
        Route::resource('thread_messages', \App\Http\Controllers\Admin\ThreadMessagesController::class);
        Route::resource('threads', \App\Http\Controllers\Admin\ThreadController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('users_notifications', \App\Http\Controllers\Admin\UserNotificationController::class);

        Route::post('/users/mass_delete', [\App\Http\Controllers\Admin\UserController::class, 'massDelete'])->name('users.mass_delete');
        Route::post('/groups/mass_delete', [\App\Http\Controllers\Admin\GroupController::class, 'massDelete'])->name('groups.mass_delete');
        Route::post('/admin_notifications/mass_delete', [\App\Http\Controllers\Admin\AdminNotificationsController::class, 'massDelete'])->name('admin_notifications.mass_delete');
        Route::post('/pages/mass_delete', [\App\Http\Controllers\Admin\PageController::class, 'massDelete'])->name('pages.mass_delete');
        Route::post('/tags/mass_delete', [\App\Http\Controllers\Admin\TagController::class, 'massDelete'])->name('tags.mass_delete');
        Route::post('/threads/mass_delete', [\App\Http\Controllers\Admin\ThreadController::class, 'massDelete'])->name('threads.mass_delete');
    });
});
