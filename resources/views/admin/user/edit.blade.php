@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('edit_user_details') }}</h1>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstName">{{ __('first_name') }}</label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('firstName', $user->first_name) }}" class="form-control @error('firstName') is-invalid @enderror">
                        @error('firstName')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastName">{{ __('last_name') }}</label>
                        <input type="text" name="last_name" id="lastName" value="{{ old('lastName', $user->last_name) }}" class="form-control @error('lastName') is-invalid @enderror">
                        @error('lastName')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">{{ __('email') }}</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </div>
        </form>
    </div>
@endsection
