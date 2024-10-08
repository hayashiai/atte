<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Atte')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Atte</h1>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <p>Atte, Inc.</p>
        </div>
    </footer>
</body>
</html>
