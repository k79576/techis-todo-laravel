<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth 
    <p>ログイン済み</p>
    @else
    <p>未ログイン</p>
    @endauth

    @guest
    <p>未ログインです</p>
    @else
    <p>ログイン済みです</p>
    @endguest
</body>
</html>