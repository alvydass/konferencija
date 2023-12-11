<nav class="navbar">
    <div class="navbar-brand">
    </div>
    <div class="navbar-links">
        @if(auth()->check())
            <span>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
            <span>Firstname Lastname</span>
            <a style="margin-right: 5px" href="{{ route('logout') }}">Logout</a>
        @else
            <span>Firstname Lastname</span>
            <a style="margin-right: 5px" href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
