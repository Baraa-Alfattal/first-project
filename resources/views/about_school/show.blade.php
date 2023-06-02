@extends('layout')
@section('title', 'Show About_School')

@section('content')
    <div>
        <div>
            <div>
                <h1>About School</h1>
            </div>
            <p>
                {{ $about['descreption'] }}
                {{ $about['picture'] }}
                {{ $about['contact.phone1'] }}
                {{ $about['contact.phone2'] }}
                {{ $about['contact.ardy1'] }}
                {{ $about['contact.ardy2'] }}
                {{ $about['school_link'] }}

            </p>
        </div>
        <a href="{{ route('about_school.edit', $about->id) }}">edit</a>

    </div>
@endsection
