@extends('layouts.app')

@section('content')
    <h1>{{ __('conference_info') }}</h1>
    <p><strong>{{ __('title') }}:</strong> {{ $conference->title }}</p>
    <p><strong>{{ __('description') }}:</strong> {{ $conference->description }}</p>
@endsection
