<nav class="navbar">
    <div class="navbar-brand">
        <!-- Your brand content -->
    </div>
    <div class="navbar-links">
        <span id="currentDateTime"></span>
        @if(auth()->check())
            <span>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
            <a style="margin-right: 5px" href="{{ route('logout') }}">Logout</a>
        @else
            <span>{{ __('first_name') }} {{ __('last_name') }}</span>
            <a style="margin-right: 5px" href="{{ route('login') }}">{{ __('login') }}</a>
        @endif

    </div>
</nav>
