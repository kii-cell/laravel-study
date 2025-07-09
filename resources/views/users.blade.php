{{-- resources/views/layouts/users.blade.php --}}
@extends('layouts.set')
@section('title', 'ユーザー一覧')
@section('header', 'ユーザー一覧')
@section('content')
    <div class="container">
        @if ($submissions->isEmpty())
            <p>ユーザーがいません</p>
        @else
            <ul>
                @foreach ($submissions as $submission)
                    <li>
                        <strong>名前:</strong> {{ $submission->name }}<br>
                        <strong>年齢:</strong> {{ $submission->age }}<br>
                        <strong>メールアドレス:</strong> {{ $submission->email }}<br>
                        <form action="{{ route('users.edit', $submission->id) }}" method="GET" display:inline;>
                            <button type="submit">編集</button>
                        </form>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif

    </div>
@endsection
