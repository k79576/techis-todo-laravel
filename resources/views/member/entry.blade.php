<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap js-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>会員登録</title>
</head>
<body>
    <h4>会員登録</h4>
    <form action="/memberEntry" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="id" hidden>
        </div> 
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="名前">
        </div> 
        <div class="form-group">
            <input class="form-control" type="text" name="phone" placeholder="電話番号">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="メールアドレス">
        </div>
        <div class="form-group">
            <button type="submit">登録</button>
        </div>    
    </form>

</body>
</html>