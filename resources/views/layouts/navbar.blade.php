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
            <span>Firstname Lastname</span>
            <a style="margin-right: 5px" href="{{ route('login') }}">Login</a>
        @endif

    </div>
</nav>

<!-- Move the script to the end of the body -->
<script src="{{ asset('node_modules/dayjs/dayjs.min.js') }}"></script>
<script>
    // Ensure the DOM is fully loaded before running the script
    document.addEventListener('DOMContentLoaded', function() {
        // Get the current date and time using Day.js
        const currentDateTime = dayjs().format('YYYY-MM-DD HH:mm:ss');

        // Display the current date and time in the specified element
        document.getElementById('currentDateTime').innerText = `Current Date & Time: ${currentDateTime}`;
    });
</script>
