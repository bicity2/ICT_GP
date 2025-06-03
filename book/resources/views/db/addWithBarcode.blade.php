<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>バーコード読み取り</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
  <h1>バーコードリーダーで読み取り</h1>

  <label for="codeInput">バーコード値：</label>
  <input type="text" id="codeInput" autofocus placeholder="スキャンしてください">
  
  <p>読み取った値：</p>
  <div id="textOutput" style="font-size: 20px; font-weight: bold;"></div>

  <script>
    const input = document.getElementById('codeInput');
    const output = document.getElementById('textOutput');

    input.addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {
        const isbn = input.value.trim();
        if (isbn !== "") {
            window.location.href = `/db/addCheck/${isbn}`;

        }
      }
    });

    window.onload = () => {
      input.focus();
    };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
