@extends('layouts.app')

@section('content')
    <h1>{{ __('conference_list') }}</h1>

    @foreach ($conferences as $conference)
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
            <h3>{{ $conference->title }}</h3>
            <div>
                <form action="{{ route('conference.show', $conference->id) }}" method="GET" style="margin: 10px;">
                    <button type="submit" class="btn btn-primary">{{ __('view') }}</button>
                </form>
            </div>
            <div>
                <form action="{{ route('conference.register', $conference->id) }}" method="GET">
                    <button type="submit" class="btn btn-success">{{ __('register') }}</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
