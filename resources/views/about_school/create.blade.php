@extends('layout')
@section('title', 'Create About_School')

@section('content')
    <div>
        <div>
            <form action="{{ route('about_school.store') }}" method="post">
                @csrf
                {{-- cross site request forgery --}}
                <div>
                    <label for="descreption">Descreption</label>
                    <input id="descreption" name="descreption" value="{{ old('descreption') }}" type="text">
                    @error('descreption')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="picture">Picture</label>
                    <input id="picture" name="picture" value="{{ old('picture') }}" type="file">
                    @error('picture')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="contact">Contact:</label>

                    <label> Phone1</label>
                    <input id="contact.phone1" name="contact[phone1]" value="{{ old('contact.phone1') }}" type="text">
                    @error('contact.phone1')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <label> Phone2</label>
                    <input id="contact.phone2" name="contact[phone2]" value="{{ old('contact.phone2') }}" type="text">
                    @error('contact.phone2')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <label> Ardy1</label>
                    <input id="contact.ardy1" name="contact[ardy1]" value="{{ old('contact.ardy1') }}" type="text">
                    @error('contact.ardy1')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <label> Ardy2 </label>
                    <input id="contact.ardy2" name="contact[ardy2]" value="{{ old('contact.ardy2') }}" type="text">
                    @error('contact.ardy2')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div>
                    <label for="school_link">School_Link</label>
                    <input id="school_link" name="school_link" value="{{ old('school_link') }}" type="text">
                    @error('school_link')
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

        <div>

        </div>
    </div>
@endsection
