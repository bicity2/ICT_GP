<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    <style>
        body {
            width: 800px;
            margin: 10px auto;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <h1>書籍一覧</h1>
    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>著者</th>
                <th>出版社</th>
                <th>ISBN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <!-- 本のタイトルをクリックすると詳細ページに遷移 -->
                <td><a href="{{ route('db.detail', ['id' => $book->id]) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->isbn }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- ページネーションのリンクを表示 -->
    {{ $records->links() }}
</body>

</html>