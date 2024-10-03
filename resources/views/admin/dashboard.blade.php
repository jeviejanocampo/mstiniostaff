<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <nav>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboardssssss</a></li>
            <li><a href="{{ route('sections.users') }}">lol</a></li>
            <li><a href="{{ route('sections.reports') }}">Reports</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">nicsss</a></li>
            <li><a href="#">bro</a></li>
        </ul>
    </nav>  

    <div class="container content">
        @yield('content')
    </div>
</body>
</html>
