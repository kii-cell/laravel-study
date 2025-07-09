@extends('layouts.app')
@section('title','ユーザー一覧')
@section('content')
    <h2>ユーザー一覧</h2>
    <ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} ({{ $user->age }}歳) - {{ $user->email }}
            <a href="{{ route('users.edit', $user->id) }}">編集</a>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
            </form>
        </li>
    @endforeach
    </ul>
@endsection

