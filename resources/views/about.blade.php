<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Credits</h1>
    <p>{{ config('store.author') }}</p>
    <ul>
        @foreach(config('store.persone') as $persona)
            <li><a href="{{ $persona['link'] }}">{{ $persona['text'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>