@extends('layout')
@section('title', 'user')

@section('content')
    <div>
        <div>
            <h1>Users</h1>
        </div>

        <div>
            @if ($users != null)
                <ul>
                    @foreach ($users as $user)
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
                    @endforeach
                </ul>
            @else
                <p>there is no user to display</p>
            @endif
        </div>
    </div>
@endsection
