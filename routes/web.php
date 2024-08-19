<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('tasks/export', [\App\Http\Controllers\TaskController::class, 'export'])->name('tasks.export');
Route::resource('tasks', \App\Http\Controllers\TaskController::class);

Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::prefix('shape')
    ->name('shape.')
    ->group(function () {
        Route::get('/area', [\App\Http\Controllers\ShapeController::class, 'getArea'])->name('area');
        Route::get('/perimeter', [\App\Http\Controllers\ShapeController::class, 'getPerimeter'])->name('perimeter');
    });

Route::get('/notifications', [\App\Http\Controllers\NotificationController::class, 'index'])->name('notifications.index');
Route::get('/notifications/send', [\App\Http\Controllers\NotificationController::class, 'sendNotification'])->name('notifications.send');

Route::resource('messages', \App\Http\Controllers\MessageController::class);
