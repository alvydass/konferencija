@extends('layouts.app')

@section('content')
    <h1>{{ __('student_info_title') }}</h1>
    <p>{{ __('first_name') }}: Alvydas</p>
    <p>{{ __('last_name') }}: Stanius</p>
    <p>{{ __('group') }}: PIT-20I-NT</p>

    <p><a href="{{ route('client') }}">{{ __('client') }}</a></p>
    <p><a href="{{ route('employee') }}" >{{ __('employee') }}</a></p>
    <p><a href="{{ route('admin') }}" >{{ __('admin') }}</a></p>
@endsection
