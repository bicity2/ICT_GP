<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1>書籍管理システム</h1>
  {{--エラーメッセージ--}}
    <div style="color: red;">
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- TODO -->
  <form action="/db/soumu" method="get">
    @csrf
    <label for="userid">ID:</label>
    <input type="text" name="userid" id="userid" required><br><br>

    <label for="password">パスワード:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="ログイン">
  </form>
</body>

</html>