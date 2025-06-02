<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>総務専用メニュー</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>

<body>
    <h1>総務専用メニュー</h1>

    <main class="content">
        <div class="form-wrapper">
            <div class="button-group">

                <a href="/db/list" class="btn btn-primary mb-2">書籍一覧</a>
                <a href="/db/add/" class="btn btn-success mb-2">書籍の新規登録</a>
                <a href="/db/erase" class="btn btn-danger mb-2">書籍の削除</a>
            </div>
            {{-- <img src="{{ asset('images/angry.gif') }}" alt="装飾画像" class="side-image"> --}}
        </div>

            
        <br>
        <form action="/db/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-link p-0">ログアウト</button>
        </form>
    </main>

    <footer class="page-footer">
        <p>&copy; 2025 書籍管理チーム</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>