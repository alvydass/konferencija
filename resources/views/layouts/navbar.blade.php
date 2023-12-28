<nav class="navbar">
    <div class="navbar-brand">
        <!-- Your brand content -->
    </div>
    <div class="navbar-links">
        <a style="margin-right: 5px" href="{{ route('main') }}">{{ __('main') }}</a>
        <a style="margin-right: 5px" href="{{ route('client') }}">{{ __('client') }}</a>
        <a style="margin-right: 5px" href="{{ route('employee') }}">{{ __('employee') }}</a>
        <a style="margin-right: 5px" href="{{ route('admin') }}">{{ __('admin') }}</a>
        @if(auth()->check())
            <span style="border-left: solid; padding-left: 5px">{{ auth()->user()->name }} </span>
            <a style="margin-right: 5px" href="{{ route('logout') }}">Logout</a>
        @endif
    </div>
</nav>
