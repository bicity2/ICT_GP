<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
  <style>
    /* このページのテーブル内リンクだけに適用 */
    main {
      height: 95vh;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", "Helvetica Neue", sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
      color: #333;
      /* font-family: sans-serif; */
      display: flex;
      flex-direction: column;
      /* min-height: 100vh; */
    }
    footer {
      height: 5vh
    }
    .form-group {
      width: 100%;
      max-width: 400px;
      margin-bottom: 15px;
    }

    .submit {
      /* width: 100%;
      max-width: 100px;
      margin-bottom: 15px; */
    }

    .form-label {
      display: block;
      text-align: left;
      margin-left: 00px;
    }

    input[type="text"],
    input[type="password"],
    input[type="number"],
    textarea {
      width: 400px;
      padding: 10px;
      margin: 0px auto 10px auto;
    }
    .side-image{
      margin:0px;
    }
  </style>
</head>

<body>

<header class="d-flex justify-content-between align-items-center p-3 bg-light">
    <h1 class="m-0">書籍管理システム</h1>
</header>


<main>
<div class="form-wrapper">
  <img src="{{ asset('images/make-effort.gif') }}" alt="装飾画像" class="side-image">

  <div class="container">
      <h1>ログインフォーム</h1>

      @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li class="text-danger">{{ $error }}</li>
          @endforeach
        </ul>
      @endif

      <!-- TODO -->
      <form action="{{ route('login.process') }}" method="post" class="text-center">
        @csrf
        <div class="form-group">
          <label for="userid" class="form-label">ID:</label>
          <input type="text" name="user_name" id="user_name" placeholder="IDを入力してください" required><br><br>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">パスワード:</label>
          <input type="password" name="password" id="password" placeholder="パスワードを入力してください" required><br><br>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary mb-2">ログイン</button>
        </div>
      </form>
    </div>
    <img src="{{ asset('images/dog-understand.gif') }}" alt="装飾画像" class="side-image">
  </div>
</main>

<footer class="page-footer">
  <p>&copy; 2025 書籍管理 チーム2</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>