<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @forelse($hobbies as $hobby)
        <li>{{$hobby}}</li>
        @empty
        <li>Tidak Punya Hobby</li>
        @endforelse
    </ul>
</body>
</html>