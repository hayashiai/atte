@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<div class="container">
<div class="header-nav">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">ホーム</a></li>
                <li><a href="{{ route('date-list') }}">日付一覧</a></li>
                <li>
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); 
                                 document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>

    <h2 style="text-align: center;">{{ Auth::user()->name }}さんお疲れ様です！</h2>
    
    <div class="button-container">
        <form method="POST" action="{{ route('clock-in') }}">
            @csrf
            <button type="submit">勤務開始</button>
        </form>

        <form method="POST" action="{{ route('clock-out') }}">
            @csrf
            <button type="submit">勤務終了</button>
        </form>

        <form method="POST" action="{{ route('break-start') }}">
            @csrf
            <button type="submit">休憩開始</button>
        </form>

        <form method="POST" action="{{ route('break-end') }}">
            @csrf
            <button type="submit">休憩終了</button>
        </form>
    </div>
</div>
@endsection
