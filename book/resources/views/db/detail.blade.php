<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            width: 1200px;
            margin: 10px auto;
        }
    </style>
    <title>Document</title>
    <style>
        .container {
            display: flex;
            /* 横方向中央寄せ */
            justify-content: center;

        }

        .left {
            flex: 1;

            padding: 16px;
            border-right: 1px solid #ccc;
        }

        .right {
            flex: 1;
            padding: 16px;
        }
    </style>
</head>

<body>
    <h1 class="mt-4 mb-5 border-bottom pb-2">書籍詳細とコメント</h1>

    <div class="container">

        <div class="left">
            <h2>書籍詳細</h2>
            <div class="book-details bg-light p-4 rounded shadow-sm mb-4">

                <div class="book-title text-primary fw-bold mb-5" style="font-size: 40px;">
                    サンプルブックタイトル
                </div>
                <p class="mb-2"><strong>著者：</strong>山田 太郎</p>
                <p class="mb-2"><strong>出版社：</strong>サンプル出版社</p>
                <p class="mb-2"><strong>ISBN：</strong>1234567890123</p>
            </div>

            <!-- 評価を表示＆評価をクリックでcommendページ移動する -->
            <h2 class="h4 mt-4">評価</h2>
            <div>
                <p class="mb-0"><strong>評価：</strong>4.5</p>
            </div>
            <a href="/comment_input.php" class="btn btn-primary mt-3">コメント投稿</a>
        </div>
        <div class="right">

            <h2>コメント表示</h2>
            <div class="book-details bg-light p-4 rounded shadow-sm mb-4">

                <ul class="list-group">
                    <li class="list-group-item">
                        <div>
                            <span class="fw-bold">とても面白かったです！</span>
                            <span class="text-warning ms-2">★★★★★</span>
                        </div>
                        <div class="small text-muted">
                            投稿者：佐藤花子　｜　2024-05-30 14:12
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <span class="fw-bold">分かりやすい内容でした。</span>
                            <span class="text-warning ms-2">★★★★☆</span>
                        </div>
                        <div class="small text-muted">
                            投稿者：田中一郎　｜　2024-05-29 10:05
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <span class="fw-bold">また読みたいと思います。</span>
                            <span class="text-warning ms-2">★★★★★</span>
                        </div>
                        <div class="small text-muted">
                            投稿者：山本美咲　｜　2024-05-28 18:33
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>