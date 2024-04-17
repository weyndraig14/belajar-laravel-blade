<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .red {
        color: red;
    }

    .bold {
        font-weight: bold;
    }
</style>
<body>
    @foreach($hobbies as $hobby)
    <li @class(["red", "bold" => $hobby["love"]])>{{$hobby['name']}}</li>
    @endforeach
</body>
</html>