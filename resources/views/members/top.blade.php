<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>会員一覧</title>
</head>
<body class="bg-light p-4">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>会員一覧</h3>
            <!-- 新規登録ボタン -->
            <a href="/entry" class="btn btn-primary"> 登録</a>
        </div>

        <!-- 成功メッセージ表示 -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>電話番号</th>
                            <th>メールアドレス</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($membersdata as $memberdata)
                            <tr>
                                <td>{{ $memberdata->id }}</td>
                                <td class="fw-bold">{{ $memberdata->name }}</td>
                                <td>{{ $memberdata->phone ?? '-' }}</td>
                                <td>{{ $memberdata->email }}</td>
                                <td class="text-end">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <!-- ⭕ ここを修正: IDをURL末尾に付与する (/edit/1 などの形式) -->
                                        <a href="/edit/{{ $memberdata->id }}" class="btn btn-sm btn-warning text-black">編集</a>

                                        <!-- 削除用フォーム -->
                                        <form action="/memberDestroy/{{ $memberdata->id }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">削除</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">会員データが登録されていません。</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>