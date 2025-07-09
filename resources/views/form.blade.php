{{-- resources/views/form.blade.php --}}
@extends('layouts.set')

@section('title','新規登録')
@section('header','新規登録')
@section('content')

            @if ($errors->any())
                <div style ="color:red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif    
                <form action="{{ route('form.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>名前:</label><br>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="名前を入力してください" required><br><br>

                        <label>年齢:</label><br>
                        <select name="age" id="age" required>
                            <option value="">年齢を選択してください</option>
                            @for ( $i = 18; $i <= 100; $i++)
                                <option value="{{ $i }}" {{ old ('age') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor   
                        </select><br><br>
                        
                        <label>メールアドレス:</label><br>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="メールアドレスを入力してください" required><br><br>

                        <label>パスワード:</label><br>
                        <input type="password" name="password" id="password" placeholder="パスワードを入力してください" required><br><br>
                        <button type ="submit">登録</button>
                    </div>
                </form>
@endsection