<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
</head>

<body>
  <!-- TODO -->
  <form action="/db/login.php" method="post">
    <label for="userid">ID:</label>
    <input type="text" name="userid" id="userid" required><br><br>

    <label for="password">パスワード:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="ログイン">
  </form>
</body>

</html>