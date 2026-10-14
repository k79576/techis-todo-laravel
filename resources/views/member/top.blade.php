<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧</title>
</head>
<body>
    <a href="{{url('entry')}}">登録</a>
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
                <td><a href="{{url('edit')}}">編集</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>