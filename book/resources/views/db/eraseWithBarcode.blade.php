{{-- resources/views/db/list.addWithBarcode.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', 'バーコードリーダーで読み取り') {{-- <title> に反映 --}}
@section('h1title', 'バーコードリーダーで読み取り') {{-- <h1title> に反映 --}}
@section('mainclass', 'main-list') {{-- <mainclass> に反映 --}}

<!--<head>-->
@section('head-content')
<!-- you can write css here -->
@endsection
<!--</head>
    <body>-->
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

    <div class="form-wrapper error-msg">
      @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
      </ul>
      @endif
    </div>
  </div>

  <img src="{{ asset('images/sideways.gif') }}" alt="装飾画像" class="side-image">
</div>
@endsection
<!--</body>-->