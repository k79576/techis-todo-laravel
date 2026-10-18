<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>会員登録</title>
</head>
<body class="bg-light p-4">

    <div class="container" style="max-width: 500px;">
        <h4 class="mb-4">会員登録</h4>

        <!-- エラーメッセージ表示エリア -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/memberEntry" method="post">
            @csrf

            <!-- 名前 -->
            <div class="mb-3">
                <label class="form-label fw-bold">名前 <span class="text-danger">*</span></label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="名前" required>
            </div> 

            <!-- 電話番号 -->
            <div class="mb-3">
                <label class="form-label">電話番号</label>
                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" placeholder="電話番号">
            </div>

            <!-- メールアドレス -->
            <div class="mb-3">
                <label class="form-label fw-bold">メールアドレス <span class="text-danger">*</span></label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required>
            </div>

            <!-- ボタンエリア -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="/top" class="btn btn-outline-secondary">キャンセル</a>
                <button type="submit" class="btn btn-primary px-4">登録</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>