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
    <form action="/db/erase2"method="post">
        @csrf  
        <input type="submit"value="削除">
        <a href="/db/erase2"></a>
    @else
    <form action="/db/erase"method="post">
        @endif
        投稿番号<input type="number"name="id"require>
        <input type="submit"value="削除">   
</body>
</html>