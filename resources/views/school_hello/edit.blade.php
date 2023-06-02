@extends('layout')
@section('title', 'Edit School')

@section('content')
    <div>
        <div>
            <form action="{{ route('school.update', ['school' => $school->id]) }}" method="POST">
                <h1>Edit an old School</h1>
                @csrf
                @method('PUT')
                {{-- cross site request forgery --}}
                <div>
                    <label for="descreption">Descreption</label>
                    <input id="descreption" name="descreption" value="{{ $school->descreption }}" type="text">
                    @error('descreption')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="picture">Picture</label>
                    <input id="picture" name="picture" value="{{ $school->picture }}" type="file">
                    @error('picture')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="message">Message</label>
                    <input id="message" name="message" value="{{ $school->message }}" type="text">
                    @error('message')
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
    </div>
@endsection
