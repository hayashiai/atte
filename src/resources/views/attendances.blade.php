@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/attendances.css') }}">
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

    <main>
        <div class="date-navigation">
            <button class="nav-button">&lt;</button>
            <span>2021-11-01</span>
            <button class="nav-button">&gt;</button>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->start_time }}</td>
                        <td>{{ $user->end_time }}</td>
                        <td>{{ $user->break_time }}</td>
                        <td>{{ $user->work_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- ページネーションリンクを表示 -->
        <div class="pagination">
            {{ $users->links() }}
        </div>
    </main>

</div>
@endsection

