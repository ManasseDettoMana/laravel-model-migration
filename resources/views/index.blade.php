<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Regali di natale: </h1>
    <ul>
        @forelse ($gifts as $gift)
            <li>{{$gift->regalo}}</li>
        @empty
            <h2>NO CI SONO REGALI.</h2>
        @endforelse
    </ul>
</body>
</html>