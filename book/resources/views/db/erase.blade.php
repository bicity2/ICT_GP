<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍削除画面</title>
</head>
<body>
  <h1>データの削除</h1>
  @if(isset($record))
    <form action="/db/erase2" method="post">
        @csrf
        <input type="hidden" name="id"value="{{$record->id}}"readonly><br>
        <p>書籍番号{{$record->id}}</p>
        title<input type="text"name="title" value="{{$record->title}}"readonly><br>
        author<input type="text" name="author"value="{{$record->author}}"readonly><br>
        publisher<input type="text"name="publisher" value="{{$record->publisher}}"readonly><br>
        isbn<input type="text" name="isbn"value="{{$record->isbn}}"readonly><br>
        <input type="submit"value="削除"><br>
        <a href="/db/erase">投稿番号選択画面に戻る</a><br>
        <a href="/db/soumu">メニューに戻る</a>
    </form>
  @else 
    <form action="/db/erase" method="post">
        @csrf
        投稿番号<input type="number" name="id"required>
        <input type="submit" value="データ表示"><br>
        <a href="/db/soumu">メニューに戻る</a>
    </form>
  @endif
</body>
</html>
