<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>書籍データ新規登録</h1>
    <form action="/db/add2"method="post">
        @csrf
        <div class="mb-3">
            <label for="user_name"class="form-label">投稿者名</label>
            <input type="text"class="form-control"name="user_name"id="user_name"required>
        </div>
        <div class="mb-3">
            <label for="posted_item"class="form-label">投稿記事</label>
            <textarea class="form-control"name="posted_item"id="posted_item"rows="3"required>
        </textarea>
        </div>
        <input type="submit"value="登録"class="btn btn-primary">
     <form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>