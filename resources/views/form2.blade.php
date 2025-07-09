@extends('layouts.app')
@section('title', 'ユーザー登録フォーム')
@section('content')
    <h2>ユーザー登録フォーム</h2>
    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('greeting.submit') }}" method="POST">
        @csrf
        <label>名前:</label>
        <input type="text" name="username" placeholder="名前を入力してください" value="{{ old('username',$user->name ?? '') }}" required><br><br>

        <label>年齢:</label>
        <select name="age" required>
            @for ($i = 18; $i <= 100; $i++)
                <option value="{{ $i }}" {{ old('age') ==$i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select><br><br>
        <label>メールアドレス:</label>
        <input type="email" name="email" value="{{ old('email',$user->email ?? '') }}" placeholder="メールアドレスを入力してください" required><br><br>
        <label>パスワード:</label>
        <input type="password" name="password" placeholder="パスワードを入力してください" required><br><br>
        <input type="submit" value="送信">
        <input type="reset" value="リセット">
    </form>
@endsection