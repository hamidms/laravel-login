<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('change-password') }}">Change Password</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
        
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
