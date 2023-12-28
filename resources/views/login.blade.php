@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('login') }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.authenticate') }}">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">{{ __('email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">{{ __('password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">{{ __('login') }}</button>
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-md-12">
                <p>{{ __('dont_have') }} <a href="{{ route('register') }}">{{ __('register_here') }}</a></p>
            </div>
        </div>
    </div>
@endsection
