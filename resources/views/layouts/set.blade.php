{{-- resouse/views/layouts/set.blade.php --}}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="{{ route('form.show') }}">新規登録</a></li>
                    <li><a href="{{ route('users.index') }}">ユーザー一覧</a></li>
                </ul>
            </nav>
            <h1>@yield('header')</h1>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy; {{ date('Y') }} My Website</p>
        </footer>
    </body>
</html>