@extends('layouts.app')

@section('content')
    <div class="loading-screen" id="loadingScreen">
        Loading...
    </div>
    <h1>{{ __('admin_subsystem') }}</h1>
    <p><a href="{{ route('user') }}">{{ __('user_data_management') }}</a></p>
    <p><a href="{{ route('visos_konferencijos') }}">{{ __('conference_management') }}</a></p>
@endsection
