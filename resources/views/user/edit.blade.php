@extends('layout')
@section('title', 'Edit User')

@section('content')
    <div>
        <div>
            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                <h1>Edit an old User</h1>
                @csrf
                @method('PUT')
                {{-- cross site request forgery --}}
                <div>
                    <label for="first_name">First Name</label>
                    <input id="first_name" name="first_name" value="{{ $computer->first_name }}" type="text">
                    @error('first_name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="last_name">Computer Origin</label>
                    <input id="last_name" name="last_name" value="{{ $computer->last_name }}" type="text">
                    @error('last_name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" value="{{ $computer->password }}" type="text">
                    @error('password')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

        <div>

        </div>
    </div>
@endsection
