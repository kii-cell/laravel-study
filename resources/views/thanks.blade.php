{{-- resources/views/thanks.blade.php --}}

@extends('layouts.set')

@section('title','登録完了')

@section('header','登録完了')

@section('content')
            <div class ="container">
            
                <p>以下の内容で登録されました:</p>
                <ul>
                    <li>名前: {{ $submission->name }}</li>
                    <li>年齢: {{ $submission->age }}</li>
                    <li>メールアドレス: {{ $submission->email }}</li>
                </ul>
                <p>パスワードはセキュリティのため表示されません。</p>
                <p>ご登録いただきありがとうございました。</p>
                <a href="{{ route('form.show') }}">戻る</a>
            </div>
            
            
@endsection
       