@extends('layouts.app')

@section('content')
    <h1>Conference List</h1>

    <!-- Add new conference button -->
    <a href="{{ route('konferenciju_kurimas') }}" class="btn btn-primary mb-3">Add New Conference</a>

    <!-- Display list of conferences -->
    <ul>
        @foreach($conferences as $conference)
            <li>
                {{ $conference->title }}

                <form method="GET" action="{{ route('konferenciju_redagavimas', ['id' => $conference->id]) }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>

                <form method="POST" action="{{ route('konferenciju_keitimas', ['id' => $conference->id]) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this conference?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
