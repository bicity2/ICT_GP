<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '書籍管理システム')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    <main class="content">
        @yield('content') {{-- 各ページ固有の内容 --}}

        <form action="/db/logout" method="POST">
        @csrf
        {{-- TODO --}}
        {{-- <button type="submit" class="btn btn-secondary">ログアウト</button> --}}
        <a href="/" class="btn btn-secondary">ログアウト</a>

    </form>
    </main>

    <footer class="page-footer">
        <p>&copy; 2025 書籍管理 チーム2</p>
    </footer>

    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
