<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>書籍削除確認</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>この書籍を削除しますか？</h1>

    <p><strong>タイトル：</strong> {{ $title }}</p>
    <p><strong>著者：</strong> {{ $author }}</p>
    <p><strong>ISBN：</strong> {{ $isbn13 }}</p>

    <form method="POST" action="{{ route('db.eraseDone') }}">
        @csrf
        <input type="hidden" name="isbn" value="{{ $isbn13 }}">
        <button type="submit" class="btn btn-danger">削除する</button>
        <a href="{{ url('db.eraseWithBarcode') }}" class="btn btn-secondary">キャンセル</a>
    </form>
</body>
</html>
