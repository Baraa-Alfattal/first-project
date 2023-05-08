@extends('layout')
@section('title', 'Show User')

@section('content')
    <div>
        <div>
            <h1>User Profile</h1>
        </div>

        <div>
            <p>{{ $user['first_name'] }}
                {{ $user['last_name'] }}
                {{ $user['email'] }}
            </p>
        </div>
        <a href="{{ route('users.edit', $user->id) }}">edit</a>

    </div>
@endsection
