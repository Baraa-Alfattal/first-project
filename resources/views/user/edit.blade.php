@extends('aboSamer_Layout.layout')
@section('title', 'Edit User')

@section('head')
    <link href='{{ asset('css/Edit-profile.css') }}' rel='stylesheet'>
@endsection

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
                    <input id="first_name" name="first_name" value="{{ $user->first_name }}" type="text">
                    @error('first_name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="last_name">Last Name</label>
                    <input id="last_name" name="last_name" value="{{ $user->last_name }}" type="text">
                    @error('last_name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="text">
                    @error('password')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation">Password Confirmation</label>
                    <input id="password_confirmation" name="password_confirmation"
                        value="{{ old('password_confirmation') }}" type="password">
                </div>

                <div>
                    <label for="is_admin">is Admin</label>
                    <input id="is_admin" name="is_admin" value="{{ $user->is_admin }}" type="checkbox"
                        @checked($user->is_admin == 1)>
                    @error('is_admin')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="is_student">is Student</label>
                    <input id="is_student" name="is_student" value="{{ $user->is_student }}" type="checkbox"
                        @checked($user->is_student == 1)>
                    @error('is_student')
                        <div class="frome-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="school_owner">is School Owner</label>
                    <input id="school_owner" name="school_owner" value="{{ $user->school_owner }}" type="checkbox"
                        @checked($user->school_owner == 1)>
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
    </div>
@endsection


<div class="container">
    <header>Edit profile</header>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form first">
            <div class="details personal">
                <span class="title">personal Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="first_name">First Name</label>
                        <input id="first_name" name="first_name" value="{{ $user->first_name }}" type="text" required>
                        @error('first_name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="input-field">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" name="last_name" value="{{ $user->last_name }}" type="text" required>
                        @error('last_name')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                </div>
            </div>
            <div class="details ID">
                <span class="title">Identity Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>
                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>
                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>

                    <div class="input-field">
                        <label>Mobile number</label>
                        <input type="number" required>
                    </div>

                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>

                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" required>
                    </div>

                </div>
                <button class="nextBtn">
                    <span class="btntext">Edit</span>
                </button>
            </div>

        </div>
    </form>
</div>
