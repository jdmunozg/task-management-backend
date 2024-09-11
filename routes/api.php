<?php
use App\Http\Controllers\TaskController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::patch('tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
});