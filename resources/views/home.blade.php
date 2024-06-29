<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
</head>
<body>
    <h1>Benvenuto nel Laravel Comics</h1>
    <ul>
        @foreach($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>