@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('register') }}</h1>

        <form method="POST" action="{{ route('register.submit') }}">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ __('first_name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">{{ __('email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">{{ __('password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password_confirmation">{{ __('confirm_password') }}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">{{ __('register') }}</button>
                </div>
            </div>
        </form>

        <div class="row mt-3">
            <div class="col-md-12">
                <p><a href="{{ route('login') }}">{{ __('login') }}</a></p>
            </div>
        </div>
    </div>
@endsection
