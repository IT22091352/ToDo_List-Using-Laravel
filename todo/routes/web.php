<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//todo
Route::prefix('/todo')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('todo');
    Route::post('/stoer', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/{task_id}/delete', [TodoController::class, 'delete'])->name('todo.delete');
    Route::get('/{task_id}/done', [TodoController::class, 'done'])->name('todo.done');

});
