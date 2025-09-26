<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <!-- наш роут пармет id  -->
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="name" value="{{ $task->name }}">
        <label for="status">Status</label>
    <div class="form-group">
    <label for="status">Статус</label>
    <select title="status" id="status" class="form-control">
        <option value="не выполнено">Не выполнено</option>
        <option value="в процессе">В процессе</option>
        <option value="выполнено">Выполнено</option>
    </select>
</div><div class="form-group">
    <label for="priority">Приоритет</label>
    <input type="text" title="priority" id="priority" class="form-control" value="{{ old('priority') }}">
    <option value="не выполнено">Не выполнено</option>
        <option value="в процессе">В процессе</option>
        <option value="выполнено">Выполнено</option>
    </select>

        <button type="submit" value="Send">Send</button>
        <table class="table table-bordered table-hover table-striped">
  <thead class="table-dark">
    
</table>
<table border="1">
  <tr>
    <th><button type="button" class="btn btn-primary">Номер</button></th>
    <th>Задачи</th>
    <th>Статус</th>
    <th>Приоритет</th>
    <th>Срок</th>
    <th>Действия</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Погулять с собакой</td>
    <td>Выполнено</td>
    <td>Высокий</td>
    <td>10.09.2025</td>
    <td>
    <button class="btn btn-sm btn-primary">Редактировать</button>
    <button class="btn btn-sm btn-danger">Удалить</button>
     </td>
      <tr>
   
  </table>
  


    </form>
</body>
</html>
