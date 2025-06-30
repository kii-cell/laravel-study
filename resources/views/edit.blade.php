<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>編集フォーム</title>
</head>
<body>
    <h1>ユーザー編集</h1>
    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>名前:</label>
        <input type="text" name="username" value="{{ old('username', $user->name) }}"><br><br>

        <label>年齢:</label>
        <select name="age">
            @for ($i = 18; $i <= 100; $i++)
                <option value="{{ $i }}" {{ old('age', $user->age) == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select><br><br>

        <label>メールアドレス:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}"><br><br>

        <label>パスワード（変更する場合のみ入力）:</label>
        <input type="password" name="password"><br><br>
        
        
        <input type="submit" value="更新">
    </form>
</body>
</html>