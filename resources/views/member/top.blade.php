<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap js-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>会員一覧</title>
</head>
<body>
    <a href="/entry">登録</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
        @foreach($membersdata as $memberdata)
            <tr>
                <td>{{ $memberdata->id }}</td>
                <td>{{ $memberdata->name }}</td>
                <td>{{ $memberdata->phone }}</td>
                <td>{{ $memberdata->email }}</td>
                <td><a href="/edit">編集</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>