@extends('layout')
@section('title', 'Create User')

@section('content')
    <div>
        <div>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                {{-- cross site request forgery --}}
                <div>
                    <label for="user_first_name">First Name</label>
                    <input id="user_first_name" name="user_first_name" value="{{ old('user_first_name') }}" type="text">
                    @error('user_first_name')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="user_last_name">Last Name</label>
                    <input id="user_last_name" name="user_last_name" value="{{ old('user_last_name') }}" type="text">
                    @error('user_last_name')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" value="{{ old('email') }}" type="text">
                    @error('email')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" value="{{ old('password') }}" type="password">
                    @error('password')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation">Password Confirmation</label>
                    <input id="password_confirmation" name="password_confirmation"
                        value="{{ old('password_confirmation') }}" type="password">
                    {{-- @error('password_confirmation')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>

                <div>
                    <label for="is_admin">is Admin</label>
                    <input id="is_admin" name="is_admin" type="checkbox">
                    @error('is_admin')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="is_student">is Student</label>
                    <input id="is_student" name="is_student" type="checkbox">
                    @error('is_student')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="school_owner">is School Owner</label>
                    <input id="school_owner" name="school_owner" type="checkbox">
                    @error('school_owner')
                        <div class="frome-error">
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
