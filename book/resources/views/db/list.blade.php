<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    <style>
        /* このページのテーブル内リンクだけに適用 */
        .table a {
            text-decoration: none;
            transition: text-decoration 0.2s;
        }

        .table a:hover {
            text-decoration: underline;
        }
    </style>
    <title>書籍一覧</title>
</head>

<body>
    <h1>書籍一覧</h1>
    <div class="d-flex justify-content-start align-items-center" style="margin-top: 16px; margin-left: 16px;">
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
        <a href="{{ $backUrl }}" class="btn btn-secondary">メニューに戻る</a>

        <form action="/db/list" method="GET" class="d-flex ms-3 search-form align-items-center">
            <input type="text" name="keyword" class="form-control me-2" placeholder="キーワード検索" value="{{ request('keyword') }}">
            <button type="submit" class="btn btn-primary me-2">検索</button>
            <a href="{{ url('/db/list') }}" class="btn btn-secondary">リセット</a>
        </form>
    </div>
    <br><br>
    @php
    $department = session('department');
    @endphp
    <table class="table">
        <thead>
            <tr>
                <th>投稿番号</th>
                <th>タイトル</th>
                <th>著者</th>
                <th>出版社</th>
                <th>ISBN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $book)
            <tr>
                <!-- 投稿番号を表示 -->
                <td>{{ $book->id }}</td>
                <!-- 本のタイトルをクリックすると詳細ページに遷移 -->
                <td><a href="{{ route('db.detail', ['id' => $book->id]) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->isbn }}</td>
                <td>
                    <a href="{{ route('db.detail', ['id' => $book->id]) }}" class="btn btn-sm btn-primary">
                        詳細
                    </a>
                    @if($department === 'soumu')
                    <form action="/db/eraseDone" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <input type="hidden" name="title" value="{{ $book->title }}">
                        <input type="hidden" name="author" value="{{ $book->author }}">
                        <input type="hidden" name="publisher" value="{{ $book->publisher }}">
                        <input type="hidden" name="isbn" value="{{ $book->isbn }}">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- ページネーションのリンクを表示 -->
    {{ $records->links() }}
</body>

</html>