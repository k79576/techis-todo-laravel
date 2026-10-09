<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('quiz5') }}">quiz5にurl関数で遷移する</a>
    <br>
    <a href="{{ route('quiz5_test') }}">quiz5にroute関数で遷移する</a>
    <br>
    <a href="{{ url('quiz9/' . $quizzes->id) }}">quiz9の画面にurl関数で遷移する</a>

</body>
</html>