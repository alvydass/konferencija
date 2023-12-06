@extends('layouts.app')

@section('content')
    <h1>Conference Information</h1>
    <p><strong>Title:</strong> {{ $conference->title }}</p>
    <p><strong>Description:</strong> {{ $conference->description }}</p>
    <p><strong>BYBAN:</strong> {{ $conference->description }}</p>
@endsection
