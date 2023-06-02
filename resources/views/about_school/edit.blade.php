@extends('layout')
@section('title', 'Edit About_School')

@section('content')
    <div>
        <div>
            <form action="{{ route('about_school.update', ['about' => $about->id]) }}" method="POST">
                <h1>Edit an old About_School</h1>
                @csrf
                @method('PUT')
                {{-- cross site request forgery --}}
                <div>
                    <label for="descreption">Descreption</label>
                    <input id="descreption" name="descreption" value="{{ $about->descreption }}" type="text">
                    @error('descreption')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="picture">Picture</label>
                    <input id="picture" name="picture" value="{{ $about->picture }}" type="file">
                    @error('picture')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="contact">Contact:</label>

                    <label> Phone1</label>
                    <input id="phone1" name="contact.phone1" value="{{ $about->contact->phone1 }}" type="text">
                    @error('contact.phone1')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <label> Phone2</label>
                    <input id="phone2" name="contact.phone2" value="{{ $about->contact->phone2 }}" type="text">
                    @error('contact.phone2')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <label> Ardy1</label>
                    <input id="ardy1" name="contact.ardy1" value="{{ $about->contact->ardy1 }}" type="text">
                    @error('contact.ardy1')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <label> Ardy2 </label>
                    <input id="ardy2" name="contact.ardy2" value="{{ $about->contact->ardy2 }}" type="text">
                    @error('contact.ardy2')
                        <div class="forme-error">
                            {{ $message }}
                        </div>
                    @enderror

                    <div>
                        <label for="school_link">School_Link</label>
                        <input id="school_link" name="school_link" value="{{ $about->school_link }}" type="text">
                        @error('school_link')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
