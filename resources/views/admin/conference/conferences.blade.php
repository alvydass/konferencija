@extends('layouts.app')

@section('content')
    <h1>{{ __('conference_list') }}</h1>

    <a href="{{ route('conference-add') }}" class="btn btn-primary mb-3">{{ __('add_new_conference') }}</a>

    <ul>
        @foreach($conferences as $conference)
            <li>
                {{ $conference->title }}

                <form method="GET" action="{{ route('conference-edit', ['encodedConference' => base64_encode(json_encode($conference))]) }}" style="display: inline;">
                    @csrf
                    <button style="margin-bottom: 5px" type="submit" class="btn btn-primary">{{ __('edit') }}</button>
                </form>

                <form method="POST" action="{{ route('save-success', ['id' => $conference->id]) }}" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button style="margin-bottom: 5px" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this conference?')">{{ __('delete') }}</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
