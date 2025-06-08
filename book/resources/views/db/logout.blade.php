{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', 'ログアウト') {{-- <title> に反映 --}}
@section('h1title', 'ログアウト') {{-- <h1title> に反映 --}}

<!--<body>-->
@section('content')
    <div class="container">
        <h3>ログアウトしました。</h3>
        <div class="form-wrapper">
            <div class="button-group">
                <a href="index" class="btn btn-primary mb-2"  style="width: 150px;">ログイン</a>
            </div>
            <img src="{{ asset('images/very-tired.gif') }}" alt="装飾画像" class="side-image">
        </div>
    </div>
@endsection
<!--</body>-->