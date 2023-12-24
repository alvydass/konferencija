@extends('layouts.app')

@section('content')
    <h1>Add New Conference</h1>

    <form method="POST" action="{{ route('conference-store') }}">
        @csrf
        <div class="form-group">
            <label for="title">{{ __('title') }}:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">{{ __('description') }}:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="lecturer">{{ __('lecturer') }}:</label>
            <input type="text" name="lecturer" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date">{{ __('date') }}:</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="time">{{ __('time') }}:</label>
            <input type="time" name="time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">{{ __('address') }}:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
