<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TaskController;

Route::get('/list', [TaskController::class, 'index'])->name('index');

Route::get('/form', [TaskController::class, 'create'])->name('create');

Route::post('/task-create', [TaskController::class, 'taskCreate']);
Route::delete('/task-delete/{id}', [TaskController::class, 'taskDelete'])->name('task.delete');
Route::get('/form/{id}', [TaskController::class, 'edit'])->name('form');
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

// чтобы была кнопка которая ведет на форму создания задачи.

// статус можно было выбрать в селлекте и имя status

// по аналогии со статусом добавить колокну priority (миграцуия, в форме инпуты, свойство филаббле и в контроллерах)

// привести в читаемый вид список задач стили и таблица вывода данных



