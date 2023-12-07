@extends('layouts.app')

@section('content')
    <h1>{{ __('conference_info') }}</h1>
    <p><strong>{{ __('title') }}:</strong> {{ $conference->title }}</p>
    <p><strong>{{ __('description') }}:</strong> {{ $conference->description }}</p>

        <h4>{{ __('registered_clients') }}:</h4>
        <ul>
            @foreach ($conference->clients as $client)
                <p>
                    {{ $client->firstName }} {{ $client->lastName }} - {{ $client->email }}
                </p>
            @endforeach
        </ul>
@endsection
