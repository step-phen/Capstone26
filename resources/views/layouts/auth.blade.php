<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Southern De Oro Philippines College - Teacher Access</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
</head>

<body class="bg-building">

    <!-- ── Header ─────────────────────────────────────────── -->
    @include('auth.header')

    <!-- ── Main ───────────────────────────────────────────── -->
    <main class="main-center">
        @yield('content')
    </main>

    <!-- ── Footer ─────────────────────────────────────────── -->
    @include('auth.footer')

    <!-- ── Toast ──────────────────────────────────────────── -->
    <div id="toast">
        <span class="material-symbols-outlined toast-icon">error</span>
        <span id="toastMessage"></span>
    </div>

    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>
