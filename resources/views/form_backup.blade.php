<!DICTYPE html>
<html>
    <head>
        <meta chardet="UFT-8">
        <title>フォーム画面</title>
        <link rel ="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h1>以下の項目を入力してください</h1>
        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="/greeting" method="POST">
            @csrf
            <label for="username">名前</label><br>
            <input type="text"  name="username" placeholder="名前を入力してください" value="{{ old('username',$user->name ?? '') }}" required><br><br>
            <label for="age">年齢</label><br>
            <select name="age"  required>
                <option value="">選択してください</option>
                @for ($i = 18; $i <= 100; $i++)
                    <option value= "{{ $i }}" {{ old('age',$user->age ?? '') == $i ? 'selected' : ''}}>{{ $i }}</option>
                @endfor
            </select><br><br>
            <label for="email">メールアドレス</label><br>
            <input type="email" name="email" placeholder="メールアドレスを入力してください" value="{{ old('email',$user->email ?? '') }}" required><br><br>
            <label for="password">パスワード</label><br>
            <input type="password" name="password" placeholder="パスワードを入力してください" required><br><br>
            <button type="submit">送信</button>
            <button type="reset">リセット</button>
        </form>
        <p>*入力は必須です</p>
    </body>
</html>



