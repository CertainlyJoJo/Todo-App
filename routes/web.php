<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'home'])->name('todo.index');
Route::post('/create', [TodoController::class, 'create'])->name('todo.create');
Route::delete('/{id}', [TodoController::class, 'delete'])->whereNumber('id')->name('todo.delete');