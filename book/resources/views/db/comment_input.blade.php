<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>コメントフォーム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
    <h1>コメント投稿フォーム</h1>
    <form action="submit_comment.php" method="post">
        <label>名前:
            <input type="text" name="name" required>
        </label><br><br>
        <label>コメント:<br>
            <textarea name="comment" rows="5" cols="40" required></textarea>
        </label><br><br>
        <label>おすすめ度:
            <select name="rating" required>
                <option value="">選択してください</option>
                <option value="1">1 - ★</option>
                <option value="2">2 - ★★</option>
                <option value="3">3 - ★★★</option>
                <option value="4">4 - ★★★★</option>
                <option value="5">5 - ★★★★★</option>
            </select>
        </label><br><br>
        <button type="submit">投稿</button>
    </form>
</body>

</html>