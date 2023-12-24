<nav class="navbar">
    <div class="navbar-brand">
        <!-- Your brand content -->
    </div>
    <div class="navbar-links">
        <a style="margin-right: 5px" href="{{ route('main') }}">Main</a>
        <a style="margin-right: 5px" href="{{ route('client') }}">Client</a>
        <a style="margin-right: 5px" href="{{ route('employee') }}">Employee</a>
        <a style="margin-right: 5px" href="{{ route('admin') }}">Admin</a>
        @if(auth()->check())
            <span>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
            <a style="margin-right: 5px" href="{{ route('logout') }}">Logout</a>
        @else
            <span>{{ __('first_name') }} {{ __('last_name') }}</span>
            <a style="margin-right: 5px" href="{{ route('login') }}">{{ __('login') }}</a>
        @endif
    </div>
</nav>
