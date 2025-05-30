<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>総務専用メニュー</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>総務専用メニュー</h1>
    <p>行いたい処理を選択してください</p>
    <ul>
        <li><a href="/db/list">書籍一覧</a></li>
        <li><a href="/db/add/">書籍の新規登録</a></li>
        <li><a href="/db/erase">書籍の削除</a></li>
    </ul>
    <br>
    <form action="/db/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-link p-0">ログアウト</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>