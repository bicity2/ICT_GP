
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍情報確認</title>
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
  <h1>書籍情報</h1>

  <p><strong>タイトル：</strong> {{ $title }}</p>
  <p><strong>著者：</strong> {{ $author }}</p>
  <p><strong>ISBN：</strong> {{ $isbn13 }}</p>

  <form method="POST" action="/db/add2">
    @csrf
    <input type="hidden" name="title" value="{{ $title }}">
    <input type="hidden" name="author" value="{{ $author }}">
    <input type="hidden" name="isbn" value="{{ $isbn13 }}">
    <button type="submit">この書籍を登録</button>
  </form>
</body>
</html>
