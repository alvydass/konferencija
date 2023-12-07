@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('Edit User Details') }}</h1>

        <form action="{{ route('user.update',1) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="firstName">{{ __('First Name') }}</label>
                <input type="text" name="firstName" id="firstName" value="{{ $user->firstName }}">
            </div>

            <div class="form-group">
                <label for="lastName">{{ __('Last Name') }}</label>
                <input type="text" name="lastName" id="lastName" value="{{ $user->lastName }}">
            </div>

            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}">
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </form>
    </div>
@endsection
