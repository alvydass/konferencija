@extends('layouts.app')

@section('content')
    <h1>{{ __('conference_list') }}</h1>

    @foreach ($conferences as $conference)
        <div style="margin-bottom: 20px; border-style: groove">
            <h3>{{ $conference->title }}</h3>
            <p>{{ __('description') }}: {{ $conference->description }}</p>

            <div style="margin-bottom: 20px;">
                <form action="{{ route('conference.show-with-clients', ['id' => $conference->id]) }}" method="GET">
                    <button type="submit" class="btn btn-primary">{{ __('view') }}</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
