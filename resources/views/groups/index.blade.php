<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список групп</title>
</head>
<body>
    <h1>Список групп</h1>

    <a href="{{ route('groups.create') }}">Создать новую группу</a>

    <ul>
        @foreach($groups as $group)
            <li>
                <a href="{{ route('groups.show', $group->id) }}">{{ $group->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
