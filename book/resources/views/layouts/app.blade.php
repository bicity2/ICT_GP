<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '書籍管理システム')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    @yield('head-content'){{--  各ページの<head>の内容  --}}
</head>
<body class="@yield('bodyclass','')">
    @php
    $department = session('department');
    if ($department === 'soumu') {
    $backUrl = url('/db/soumu');
    } elseif ($department === 'ippan') {
    $backUrl = url('/db/normal');
    } else {
    $backUrl = url('/');
    }
    @endphp

    <header class="d-flex justify-content-between align-items-center p-3 bg-light">
    {{-- <header class="d-flex justify-content-between align-items-center p-3 bg-light border-bottom border-2 border-primary"> --}}
        <h1 class="m-0">@yield('h1title', '書籍管理システム')</h1>
        <nav class="navbar">
            @yield('header-content')
            <a href="{{ $backUrl }}" class="btn btn-secondary me-2">メニュー</a>
            <a href="/db/logout" class="btn btn-secondary">ログアウト</a>
        </nav>
    </header>


    <main class="content @yield('mainclass','')">
        @yield('content') {{-- 各ページ固有の内容 --}}
    </main>

    <footer class="page-footer">
        <p>&copy; 2025 書籍管理 チーム2</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
