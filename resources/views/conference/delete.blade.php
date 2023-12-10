@extends('layouts.app')

@section('content')
    <h1>Delete Conference</h1>
    <!-- Display confirmation message or warning -->
    <p>Are you sure you want to delete this conference?</p>
    <form method="POST" action="{{ route('conference-delete', ['id' => $conference->id]) }}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('conference-list') }}" class="btn btn-secondary">Cancel</a>
@endsection
