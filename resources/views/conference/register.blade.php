@extends('layouts.app')

@section('content')
    <h1>Register to Conference</h1>

    <form action="{{ route('conference.register.submit') }}" method="POST">
        @csrf
        <div class="form-group" style="margin: 10px;">
            <label for="name">{{ __('first_name')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group" style="margin: 10px;">
            <label for="name">{{ __('last_name')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" id="lname" name="lname" required>
        </div>
        <div class="form-group" style="margin: 10px;">
            <label for="email">{{ __('email')}}</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <input type="hidden" name="conference_id" value="{{ $id }}">
        <button type="submit" class="btn btn-primary" style="margin: 10px;">{{ __('register') }}</button>
    </form>
@endsection
