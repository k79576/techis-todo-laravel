<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>会員編集</title>
</head>
<body class="bg-light p-4">

    <div class="container" style="max-width: 500px;">
        <!-- 会員IDの表示 -->
        <h4 class="mb-3">会員編集 会員ID = {{ $memberdata->id }}</h4>

        <form action="/memberEdit" method="post">
            @csrf

            <!-- 1. IDを非表示で送信 (valueにIDを設定) -->
            <input type="hidden" name="id" value="{{ $memberdata->id }}">

            <!-- 2. 名前 (valueに現在の値を設定) -->
            <div class="mb-3">
                <label class="form-label">名前</label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $memberdata->name) }}" placeholder="名前" required>
            </div> 

            <!-- 3. 電話番号 (valueに現在の値を設定) -->
            <div class="mb-3">
                <label class="form-label">電話番号</label>
                <input class="form-control" type="text" name="phone" value="{{ old('phone', $memberdata->phone) }}" placeholder="電話番号">
            </div>

            <!-- 4. メールアドレス (value加速に現在の値を設定) -->
            <div class="mb-3">
                <label class="form-label">メールアドレス</label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $memberdata->email) }}" placeholder="メールアドレス" required>
            </div>

            <!-- 5. ボタンエリア -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="/top" class="btn btn-outline-secondary">キャンセル</a>
                <button type="submit" class="btn btn-primary px-4">編集</button>
            </div>

        </form> <!-- </form> の閉じタグを追加 -->
    </div>

</body>
</html>