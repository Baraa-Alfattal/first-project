<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>this is @yield('title') page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>

    <div>
        <nav>
            <a href="{{ route('school.index') }}">School</a>
            <a href="{{ route('users.create') }}">Create User</a>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('school.create') }}">Create School Helllo</a>
            <a href="{{ route('about_school.create') }}">Create About School</a>
            <a href="{{ route('about_school.index') }}">About School</a>
        </nav>

    </div>

    <div>
        @yield('content')

    </div>
</body>

</html>
