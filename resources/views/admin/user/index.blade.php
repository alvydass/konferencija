@extends('layouts.app')

@section('content')
    <h1>{{ __('user_list') }}</h1>

    @foreach ($users as $user)
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
            <p>{{ __('first_name') }}: {{ $user->firstName }}</p>&nbsp;&nbsp;&nbsp;
            <p>{{ __('last_name') }}: {{ $user->lastName }}</p>&nbsp;&nbsp;&nbsp;
            <p>{{ __('email') }}: {{ $user->email }}</p>&nbsp;&nbsp;&nbsp;

           <div>
                <form  action="{{ route('user.edit', 1) }}" method="GET">
                    <button type="submit" class="btn btn-success">{{ __('edit') }}</button>
                </form>
            </div>
        </div>
    @endforeach

@endsection
