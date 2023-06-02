@extends('layout')
@section('title', 'Show School')

@section('content')
    <div>
        <div>
            <div>
                <h1>Hello Message</h1>
            </div>
            <p>
                {{ $school['message'] }}
                {{ $school['picture'] }}
                {{ $school['descreption'] }}
            </p>
        </div>
        <a href="{{ route('school.edit', $school->id) }}">edit</a>

    </div>
@endsection
