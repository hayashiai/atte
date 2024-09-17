@extends('layouts.app')
@section('title', 'ログイン')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main>
    <div class="container">
        <h2>ログイン</h2>

    <!-- エラーメッセージの表示 -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

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
</main>
@endsection



