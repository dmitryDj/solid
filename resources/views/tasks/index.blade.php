<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    <form action="{{ route('tasks.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search tasks" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
        <a class="btn btn-danger" href="{{ route('tasks.index') }}">Reset</a>
    </form>

    <a class="btn btn-warning" href="{{ route('tasks.export', ['search' => request('search')]) }}">Export to CSV</a>
    <a class="btn btn-success" href="{{ route('tasks.create') }}">Create task</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
    </body>
</html>
