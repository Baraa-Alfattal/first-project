@extends('layout')
@section('title', 'user')

@section('content')
    <div>
        <div>
            <h1>User</h1>
        </div>

        <div>
            @if (count($user) > 0)
                <ul>
                    <a href="{{ route('users.show', ['user' => $user['id']]) }}">
                        <li>
                            <p> {{ $user['first_name'] }}
                                ({{ $user['last_name'] }})
                                {{ $user['email'] }}
                                {{ $user['is_admin'] }}
                                {{ $user['is_student'] }}
                                {{ $user['school_owner'] }}
                            </p>
                        </li>
                    </a>
                </ul>
            @else
                <p>there is no user to display</p>
            @endif
        </div>
    </div>
@endsection
