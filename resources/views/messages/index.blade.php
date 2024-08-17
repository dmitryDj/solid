<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="antialiased">
<a class="btn btn-success" href="{{ route('messages.create') }}">Create message</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Type</th>
        <th scope="col">Text</th>
        <th scope="col">Image</th>
        <th scope="col">Video</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <th scope="row">{{ $message->id }}</th>
            <th scope="row">{{ $message->getTypeMessage() }}</th>
            <th scope="row">{{ $message->text }}</th>
            <td>{{ $message->image_url }}</td>
            <td>{{ $message->video_url }}</td>
            <td>
                <form action="{{ route('messages.destroy', $message) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $messages->links() }}
</body>
</html>
