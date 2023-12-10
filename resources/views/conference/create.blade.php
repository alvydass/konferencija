@extends('layouts.app')

@section('content')
    <h1>Add New Conference</h1>

    <form method="POST" action="{{ route('save-success') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="lecturer">Lecturer:</label>
            <input type="text" name="lecturer" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" name="time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
