@extends('layouts.app')

@section('content')
    <h1>Edit Conference</h1>

    <form method="POST" action="{{ route('save-success', ['id' => $conference->id]) }}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $conference->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" required>{{ $conference->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="lecturer">Lecturer:</label>
            <input type="text" name="lecturer" class="form-control" value="{{ $conference->lecturer }}" required>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" value="{{ $conference->date }}" required>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" name="time" class="form-control" value="{{ $conference->time }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control" value="{{ $conference->address }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection