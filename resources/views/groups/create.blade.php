<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание группы</title>
</head>
<body>
    <h1>Создание группы</h1>

    <form action="{{ route('groups.store') }}" method="POST"> {{-- маршрут отправки формы и метод --}}
        @csrf {{-- защита от CSRF-атак --}}

        <label>Название группы:</label>
        <input type="text" name="title" required><br><br>

        <label>Дата начала:</label>
        <input type="date" name="start_from" required><br><br>

        <label>Активна ли группа:</label>
        <select name="is_active" required>
            <option value="1">Да</option>
            <option value="0">Нет</option>
        </select><br><br>

        <button type="submit">Создать</button>
    </form><br>

    <a href="{{ route('groups.index') }}">Назад к списку</a>
</body>
</html>
