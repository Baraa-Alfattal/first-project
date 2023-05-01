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
                    <label for="user-last-name">Last Name</label>
                    <input id="user-last-name" name="user-last-name" value="{{ old('user-last-name') }}" type="text">
                    @error('user-last-name')
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
                    <input id="password" name="password" value="{{ old('password') }}" type="password" required
                        autocomplete="new-password">
                    @error('password')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation">Password Confirmation</label>
                    <input id="password_confirmation" name="password_confirmation"
                        value="{{ old('password_confirmation') }}" type="password" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="is_admin">is Admin</label>
                    <input id="is_admin" name="is_admin" value="{{ old('is_admin') }}" type="checkbox">
                </div>

                <div>
                    <label for="is_student">is Student</label>
                    <input id="is_student" name="is_student" value="{{ old('is_student') }}" type="checkbox">
                </div>

                <div>
                    <label for="school_owner">is School Owner</label>
                    <input id="school_owner" name="school_owner" value="{{ old('school_owner') }}" type="checkbox">
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
