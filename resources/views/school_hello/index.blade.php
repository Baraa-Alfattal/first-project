@extends('layout')
@section('title', 'welcome')

@section('content')
    <div>
        <div>
            <h1>School</h1>
        </div>

        <div>
            @if ($schools != null)
                <ul>
                    @foreach ($schools as $school)
                        <a href="{{ route('school.show', ['school' => $school['id']]) }}">
                            <li>
                                <h3>Hello Message</h3>
                            </li>
                        </a>
                    @endforeach
                </ul>
            @else
                <p>there is no hello message</p>
            @endif
        </div>
    </div>
@endsection
