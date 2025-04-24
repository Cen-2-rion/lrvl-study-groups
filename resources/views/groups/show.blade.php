<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Информация по группе и список студентов</title>
</head>
<body>
    <h1>{{ $group->title }}</h1>

    <p>Дата начала: {{ $group->start_from }}</p>
    <p>Активна: {{ $group->is_active ? 'Да' : 'Нет' }}</p>

    <a href="{{ route('students.create', $group) }}">Добавить студента</a>

    <h2>Список студентов</h2>
    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('students.show', [$group, $student]) }}">
                    {{ $student->surname }} {{ $student->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('groups.index') }}">Назад к списку</a>
</body>
</html>
