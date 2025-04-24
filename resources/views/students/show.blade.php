<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Информация о студенте</title>
</head>
<body>
    <h1>Информация о студенте</h1>

    <p>{{ $student->surname }} {{ $student->name }}</p>
    <p>Группа: {{ $group->title }}</p><br>

    <a href="{{ route('groups.show', $group) }}">Назад к группе</a>
</body>
</html>
