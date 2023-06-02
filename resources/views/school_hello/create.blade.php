@extends('layout')
@section('title', 'Create School')

@section('content')
    <div>
        <div>
            <form action="{{ route('school.store') }}" method="post">
                @csrf
                <div>
                    <label for="descreption"> Descreption</label>
                    <input id="descreption" name="descreption" value="{{ old('descreption') }}" type="text">
                    @error('descreption')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="picture">Picture</label>
                    <input id="picture" name="picture" value="{{ old('picture') }}" type="file">
                    @error('picture')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="message">Message</label>
                    <input id="message" name="message" value="{{ old('message') }}" type="text">
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
