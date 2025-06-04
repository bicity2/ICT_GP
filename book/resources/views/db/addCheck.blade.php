
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍情報確認</title>
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
  <h1>書籍情報</h1>

  <img src="{{ $cover_image }} asset('images/no_image.png') }}" alt="書影" width="150" height="200">
  <p>確認：{{ $cover_image }}</p>
  <p><strong>タイトル：</strong> {{ $title }}</p>
  <p><strong>著者：</strong> {{ $author }}</p>
  <p><strong>出版社：</strong> {{ $publisher }}</p>
  <p><strong>ISBN：</strong> {{ $isbn13 }}</p>

  <form method="POST" action="/db/addDone">
    @csrf
    <input type="hidden" name="title" value="{{ $title }}">
    <input type="hidden" name="author" value="{{ $author }}">
    <input type="hidden" name="publisher" value="{{ $publisher }}">
    <input type="hidden" name="cover_image" value="{{ $cover_image }}">
    <input type="hidden" name="isbn" value="{{ $isbn13 }}">
    <button type="submit">この書籍を登録</button>
  </form>
  <a href="{{ route('db.addWithBarcode') }}" class="btn btn-secondary mt-3">戻る</a>
</body>
</html>
