@extends('layouts.app')
@section('title', '会員登録')
@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="container register-container">
    <h2>会員登録</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="名前" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレス" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="パスワード" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">確認用パスワード</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="確認用パスワード" required>
        </div>
        <button type="submit" class="btn btn-primary">会員登録</button>
    </form>
    
    <div class="register-link">
        <p>アカウントをお持ちの方はこちらから</p>
        <p><a href="{{ route('login') }}">ログイン</a></p>
    </div>
</div>
@endsection
