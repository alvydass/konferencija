@extends('layouts.app')

@section('content')
        <h1>{{ __('conference_list') }}</h1>

        @foreach ($conferences as $conference)
            <div class="row mb-3">
                <div class="col-md-8">
                    <h3>{{ __('title') }}: {{ $conference->title }}</h3>
                </div>
                <div class="col-md-2">
                    <form action="{{ route('conference.show', ['conference' => $conference, 'showClients' => false]) }}" method="GET">
                        <button type="submit" class="btn btn-primary">{{ __('view') }}</button>
                    </form>
                </div>
                <div class="col-md-2">
                    <form action="{{ route('conference.register', ['id' => $conference->id]) }}" method="GET">
                        <button type="submit" class="btn btn-success">{{ __('register') }}</button>
                    </form>
                </div>
            </div>
        @endforeach
@endsection
