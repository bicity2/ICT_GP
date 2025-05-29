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
            <h1>書籍詳細</h1>
            <div>
                <p><strong>タイトル：</strong>サンプルブック</p>
                <p><strong>著者：</strong>山田 太郎</p>
                <p><strong>出版社：</strong>サンプル出版社</p>
                <p><strong>ISBN：</strong>1234567890123</p>
            </div>
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