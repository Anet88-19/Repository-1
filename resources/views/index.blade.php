<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h1><a href="/tasks/create">Создать задачу</a>

    <table>

        
    </table>
    <div>

    </div>
    <p>

    </p>
    <ul>
        @foreach($tasks as $task)
            <li>
                Имя - {{ $task->name }} - {{ $task->id}} <br>
                Статус - {{ $task->status }} <br>
                <a href="{{ route('form', $task->id) }}">Edit</a>

                <!-- action="/task-delete/" . $task->id -->
            <form action="{{ route('task.delete', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Taks</button>
            </form> 
            </li>
        @endforeach

    </ul>
</body>
</html>
