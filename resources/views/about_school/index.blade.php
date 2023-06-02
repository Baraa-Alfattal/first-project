@extends('layout')
@section('title', 'About_School')

@section('content')
    <div>
        <div>
            <h1>About_School</h1>
        </div>

        <div>
            @if ($abouts != null)
                <ul>
                    @foreach ($abouts as $about)
                        <a href="{{ route('about_school.show', ['about' => $about['id']]) }}">
                            <li>
                                <p> {{ $about['descreption'] }}
                                    {{ $about['picture'] }}
                                    {{ $about['contact.phone1'] }}
                                    {{ $about['contact.phone2'] }}
                                    {{ $about['contact.ardy1'] }}
                                    {{ $about['contact.ardy2'] }}
                                    {{ $about['school_link'] }}

                                </p>
                            </li>
                        </a>
                    @endforeach
                </ul>
            @else
                <p>there is no About_School to display</p>
            @endif
        </div>
    </div>
@endsection
