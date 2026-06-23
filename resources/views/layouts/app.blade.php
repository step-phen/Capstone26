<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- link google fonts for Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- link local stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    @yield('style')
</head>

<body>
    <aside class="sidebar">
        <!-- Sidebar header -->
        @include('partials.header')

        <nav class="sidebar-nav">
            @include('partials.sidebar')
        </nav>
    </aside>
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Script for sidebar toggle -->
    <script src="{{ asset('assets/js/sidebar-toggle.js') }}"></script>
</body>

</html>
