<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @includeWhen($user['owner'], 'header-admin')
    <p>Selamat Datang {{$user['name']}}</p>
</body>
</html>