<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">   

    <title>Document</title>
    <style>
        .book-detail {
            margin-bottom: 24px;
        }
    </style>
</head>

<body>
    <h1>書籍詳細</h1>
    <br>
    <hr>
    <br>
    <div class="book-details">
        <div class="book-title" style="
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 10px;
        padding-left: 12px;
    ">
    サンプルブック</div>
        <p><strong>著者：</strong>山田 太郎</p>
        <p><strong>出版社：</strong>サンプル出版社</p>
        <p><strong>ISBN：</strong>1234567890123</p>
    </div>

    <!-- 評価を表示＆評価をクリックでcommendページ移動する -->
    <h2>評価</h2>
    <div>
        <p><strong>評価：</strong>4.5</p>

    </div>
    <!--    
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->isbn }}</td>
        -->
</body>

</html>