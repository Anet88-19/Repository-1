<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <form action="/task-create" method="POST">
        @csrf
        <input type="text" name="name">
        <button type="submit" value="Send">Send</button>
    </form>

</body>
</html>





<div class="form-group">
    <label for="status">Статус</label>
    <select title="status" id="status" class="form-control">
        <option value="не выполнено">Не выполнено</option>
        <option value="в процессе">В процессе</option>
        <option value="выполнено">Выполнено</option>
    </select>
</div>
<div class="form-group">
    <label for="priority">Приоритет</label>
    <input type="text" title="priority" id="priority" class="form-control" value="{{ old('priority') }}">
    <option value="не выполнено">Не выполнено</option>
        <option value="в процессе">В процессе</option>
        <option value="выполнено">Выполнено</option>
    </select>
</div>

    <button type="submit">Сохранить</button>
</form>

