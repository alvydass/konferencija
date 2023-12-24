@extends('layouts.app')

@section('content')
    <h1>{{ __('user_list') }}</h1>

    @foreach ($clients as $client)
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
            <p>{{ __('first_name') }}: {{ $client->first_name }}</p>&nbsp;&nbsp;&nbsp;
            <p>{{ __('last_name') }}: {{ $client->last_name }}</p>&nbsp;&nbsp;&nbsp;
            <p>{{ __('email') }}: {{ $client->email }}</p>&nbsp;&nbsp;&nbsp;

           <div>
               <form action="{{ route('user.edit', $client->id) }}" method="GET">
                   <button type="submit" class="btn btn-success">{{ __('edit') }}</button>
               </form>
            </div>
        </div>
    @endforeach

@endsection
