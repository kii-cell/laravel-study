<!DOCTYPE html>
<html>
<head>
    <meta charset ="UTF-8">
    <title>ユーザー一覧</title>
    <link rel ="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>ユーザー一覧</h1>
    <ul>
    @foreach ($users as $user)
        <li>{{ $user->name}}({{ $user->age}}歳) - {{ $user->email}}
            <a href="{{ route('users.edit', $user->id) }}">編集</a>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
            </form>
        </li>
        
    @endforeach
</ul>
</body>
</html>

