<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/jenishewan.css') }}">
</head>
<body>

    <!-- Header -->
    <header>
        <h2>Admin Panel</h2>
    </header>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

</body>
</html>
