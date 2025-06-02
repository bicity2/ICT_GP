<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍削除画面２</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>以下のデータを削除しました💛</h1>
    <table class="table">
        <tr><th>title</th><th>author</th><th>publisher</th><th>isbn</th></tr>
        <tr>
            <td>{{$title}}</td>
            <td>{{$author}}</td>
            <td>{{$publisher}}</td>
            <td>{{$isbn}}</td>
        </tr>
    </table>
    <br>
    <a href="/db/logout">ログアウトする</a>
    <a href="/db/soumu">メニューに戻る</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>