<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        $title = 'Список задач';
        return view('index', compact('tasks', 'title'));
    }

        public function create() {
        $title = 'создать задач';
        return view('create', compact( 'title'));
    }

    public function taskCreate(Request $request) {
        // обработка и сохранение в базу
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        // редирект
        return redirect()->route('index');
    }

 public function taskDelete($id) {
        $task = Task::find($id);
        $task->delete();

        // mysql
        // 'Select * from tasks where id = 1'
        // 'Delete from tasks where id = 2;'

        // редирект
        return redirect()->route('index');
    }


    public function edit($id) {
        $task = Task::find($id);
        $title = 'edit задач';
        return view('edit', compact( 'title', 'task'));
    }

   
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'status' => 'required|string'
    ]);

    Task::create($validated);

    return redirect()->route('tasks.index')->with('success', 'Задача создана!');
}


public function update(Request $request, $id)
{
    // валидация
    $request->validate([
         'name' => 'required|string',
        'status' => 'required|string|max:255',
        
    ]);
    // отладка кода
    // dd($request->all());
    // поиск задачи
    $task = Task::findOrFail($id);

    // получение полей из формы
    $task->status = $request->input('status');
    $task->name = $request->input('name');
   
    // сохранение полей из формы
    $task->save();

    return redirect()->route('index')->with('success', 'Статус обновлён!');
}




}

