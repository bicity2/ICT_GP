<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    <h1>書籍データ新規登録</h1>

    <div class="form-wrapper">
        <form action="/db/add2"method="post">
            @csrf
            <div class="mb-3">
                <label for="title"class="form-label">タイトル</label>
                <input type="text"class="form-control"name="title"id="title"required>
            </div>
            <div class="mb-3">
                <label for="author"class="form-label">著者</label>
                <input type="text"class="form-control"name="author"id="author"required>
            </div>
            <div class="mb-3">
                <label for="publisher"class="form-label">出版社</label>
                <input type="text"class="form-control"name="publisher"id="publisher"required>
            </div>
            <div class="mb-3">
                <label for="isbn"class="form-label">ISBN</label>
                <input type="text"class="form-control"name="isbn"id="isbn"required>
            </div>
            <input type="submit"value="登録"class="btn btn-primary">
        </form>
        {{-- <img src="{{ asset('images/jump.gif') }}" alt="装飾画像" class="side-image"> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>