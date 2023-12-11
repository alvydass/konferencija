@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('edit_user_details') }}</h1>

        <form action="{{ route('save-success') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="firstName">{{ __('first_name') }}</label>
                <input type="text" name="firstName" id="firstName" value="{{ $user->firstName }}">
            </div>

            <div class="form-group">
                <label for="lastName">{{ __('last_name') }}</label>
                <input type="text" name="lastName" id="lastName" value="{{ $user->lastName }}">
            </div>

            <div class="form-group">
                <label for="email">{{ __('email') }}</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}">
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </form>
    </div>
@endsection
