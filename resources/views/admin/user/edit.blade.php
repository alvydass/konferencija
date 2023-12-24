@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('edit_user_details') }}</h1>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="firstName">{{ __('first_name') }}</label>
                <input type="text" name="first_name" id="first_name" value="{{ old('firstName', $user->first_name) }}" class="@error('firstName') is-invalid @enderror">
                @error('firstName')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="lastName">{{ __('last_name') }}</label>
                <input type="text" name="last_name" id="lastName" value="{{ old('lastName', $user->last_name) }}" class="@error('lastName') is-invalid @enderror">
                @error('lastName')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">{{ __('email') }}</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="@error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </form>
    </div>
@endsection
