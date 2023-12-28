@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('conference_list') }}</h1>

        <a href="{{ route('conference-add') }}" class="btn btn-primary mb-3">{{ __('add_new_conference') }}</a>

        <ul class="list-group">
            @foreach($conferences as $conference)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $conference->title }}

                    <div>
                        <form method="GET" action="{{ route('conference-edit', ['encodedConference' => base64_encode(json_encode($conference))]) }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary mr-2">{{ __('edit') }}</button>
                        </form>

                        <form method="POST" action="{{ route('conference-delete', ['id' => $conference->id]) }}" style="display: inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this conference?')">{{ __('delete') }}</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
