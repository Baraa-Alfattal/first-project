@extends('aboSamer_Layout.layout')
@section('title', 'Show User')

@section('head')
    <link href='{{ asset('css/user-view.css') }}' rel='stylesheet'>
@endsection

@section('content')
    <div>

        <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
                <h1 class="m-3 pt-3">User profile</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Full name</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{ $user['first_name'] }}
                            {{ $user['last_name'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{ $user['email'] }}
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <a href="{{ route('users.edit', $user->id) }}">edit</a>

    </div>
@endsection


{{-- <div>
    <p>{{ $user['first_name'] }}
        {{ $user['last_name'] }}
        {{ $user['email'] }}
    </p>
</div> --}}
