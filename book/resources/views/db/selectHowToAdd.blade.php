<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>書籍登録方法を選択</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet">

    <style>
        body {
            text-align: center;
            padding-top: 100px;
            position: relative;
            height: 100vh;
        }

        .form-group {
            margin: 20px 0;
        }

        /* 左端にボタンを縦に並べて固定表示するスタイル */
        .side-buttons {
            position: absolute;
            top: 50%;
            left: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="mb-5">書籍登録方法を選択</h1>

        <div class="d-grid gap-3 col-6 mx-auto">
            <form action="{{ url('/db/add') }}" method="get">
                <input type="submit" class="btn btn-primary btn-lg" value="書籍情報を手動で入力">
            </form>

            <form action="{{ url('/db/addWithBarcode') }}" method="get">
                <input type="submit" class="btn btn-success btn-lg" value="バーコードで登録">
            </form>
        </div>
    </div>

    <div class="side-buttons">
        <a href="{{ url('/db/soumu') }}" >ユーザ画面に戻る</a>
        <a href="{{ url('/db/index') }}" >ログアウト</a>
    </div>

</body>

</html>