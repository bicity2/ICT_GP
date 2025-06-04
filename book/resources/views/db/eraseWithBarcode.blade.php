{{-- resources/views/db/list.addWithBarcode.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '削除 - バーコードリーダー') {{-- <title> に反映 --}}
@section('h1title', '削除 - バーコードリーダー') {{-- <h1title> に反映 --}}
@section('mainclass', 'main-list') {{-- <mainclass> に反映 --}}

<!-- <body> -->
@section('header-content')
<a href="{{ url('/db/selectHowToErase') }}" class="btn btn-secondary me-2">戻る</a>
@endsection
@section('content')
<div class="form-wrapper">

  <div class="button-group">
    <div>
      <label for="codeInput">バーコード値：</label>
      <input type="text" id="codeInput" autofocus placeholder="スキャンしてください"
      inputmode="numeric" style="ime-mode:disabled;">
    </div>

    <div>
      <p>読み取った値：</p>
      <div id="textOutput" style="font-size: 20px; font-weight: bold;"></div>

      <script>
        const input = document.getElementById('codeInput');
        const output = document.getElementById('textOutput');

        input.addEventListener('keydown', function(event) {
          if (event.key === 'Enter') {
            const isbn = input.value.trim();
            if (isbn !== "") {
                window.location.href = `/db/eraseCheck/${isbn}`;

            }
          }
        });

        window.onload = () => {
          input.focus();
        };
      </script>
    </div>
  </div>
  <img src="{{ asset('images/sideways.gif') }}" alt="装飾画像" class="side-image">
</div>
@endsection
<!--</body>-->