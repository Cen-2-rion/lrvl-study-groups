<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление студента в группу</title>
</head>
<body>
    <h1>Добавление студента в группу: {{ $group->title }}</h1>

    <form action="{{ route('students.store', $group) }}" method="POST">
        @csrf

        <label>Фамилия:</label>
        <input type="text" name="surname" required><br><br>

        <label>Имя:</label>
        <input type="text" name="name" required><br><br>

        <button type="submit">Добавить</button>
    </form><br>

    <a href="{{ route('groups.show', $group->id) }}">Назад к группе</a>
</body>
</html>
