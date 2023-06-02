@extends('layout')
@section('title', 'welcome')

@section('content')
    <div>
        <div>
            <h1>School</h1>
        </div>

        <div>
            @if ($school != null)
                <ul>
                    <a href="{{ route('school.show') }}">
                        <li>
                            <h3>Hello Message</h3>
                        </li>
                    </a>
                @else
                    <p>there is no hello message</p>
            @endif
            </ul>
        </div>
    </div>
@endsection
