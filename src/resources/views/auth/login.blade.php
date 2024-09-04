@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="container">
    <h2>ログイン</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレス" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="パスワード" required>
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
    </form>
    
    <div class="register-link">
        <p>アカウントをお持ちでない方はこちらから</p>
        <p><a href="{{ route('register') }}">会員登録</a></p>
    </div>
</div>
@endsection


