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

    <form action="{{ route('users.update', $submission->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>名前:</label>
        <input type="text" name="name" value="{{ old('name', $submission->name) }}"><br><br>

        <label>年齢:</label>
        <select name="age">
            @for ($i = 18; $i <= 100; $i++)
                <option value="{{ $i }}" {{ old('age', $submission->age) == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select><br><br>

        <label>メールアドレス:</label>
        <input type="email" name="email" value="{{ old('email', $submission->email) }}"><br><br>

        <label>パスワード（変更する場合のみ入力）:</label>
        <input type="password" name="password"><br><br>
        
        <button type="submit">更新</button>
      
    </form>
    <form action="(route('users.delete', $submission->id))" method="POST" style="display:inline;">    
        @csrf
        @method('DELETE')
        <button type="submit" formaction ="{{ route('users.delete', $submission->id) }}" onclick ="return confirm('本当に削除しますか？')">削除</button>
        <a href="{{ route('users.index') }}">戻る</a>
    </form>

</body>
</html>