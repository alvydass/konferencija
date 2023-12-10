@extends('layouts.app')

@section('content')
    <h1>Conference List</h1>

    <a href="{{ route('conference-add') }}" class="btn btn-primary mb-3">Add New Conference</a>

    <ul>
        @foreach($conferences as $conference)
            <li>
                {{ $conference->title }}

                <form method="GET" action="{{ route('conference-edit', ['id' => $conference->id]) }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>

                <form method="POST" action="{{ route('conference-delete', ['id' => $conference->id]) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this conference?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
