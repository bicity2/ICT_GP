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
            body {
                width: 800px;
                margin: 10px auto;
            }
            </style>
    <title>Document</title>
    <style>
        .container {
            display: flex;
        }

        .left {
            flex: 1;
            padding: 16px;
            border-right: 1px solid #ccc;
        }

        .right {
            flex: 4;
            padding: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
    <h1 class="mt-4 mb-3 border-bottom pb-2">書籍詳細</h1>
    <div class="book-details bg-light p-4 rounded shadow-sm mb-4">
        <div class="book-title text-primary fw-bold mb-3" style="font-size:2em; padding-left:12px;">
            サンプルブック
        </div>
        <p class="mb-2"><strong>著者：</strong>山田 太郎</p>
        <p class="mb-2"><strong>出版社：</strong>サンプル出版社</p>
        <p class="mb-2"><strong>ISBN：</strong>1234567890123</p>
    </div>

    <!-- 評価を表示＆評価をクリックでcommendページ移動する -->
    <h2 class="h4 mt-4">評価</h2>
    <div class="rating-box bg-warning bg-opacity-25 p-3 rounded w-25">
        <p class="mb-0"><strong>評価：</strong>4.5</p>
    </div>
            <a href="#" class="btn btn-primary mt-3">コメント投稿</a>
        </div>
        <div class="right">
            <h2>コメント</h2>
            <ul>
                <li>とても面白かったです！</li>
                <li>分かりやすい内容でした。</li>
                <li>また読みたいと思います。</li>
            </ul>
        </div>
    </div>
</body>

</html>