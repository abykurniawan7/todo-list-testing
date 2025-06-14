<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ DashboardController::class, 'view' ]);

Route::post('/item', [ ItemController::class, 'insert' ]);
Route::delete('/item/{id}', [ ItemController::class, 'delete' ])->name('item.destroy');

Route::get('/tasks/reminders/today', function () {
    $tasks = Task::whereDate('reminder_at', now()->toDateString())->get();
    return response()->json($tasks);
});
