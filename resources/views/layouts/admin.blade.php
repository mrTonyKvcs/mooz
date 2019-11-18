<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>moOz - Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">

    <link rel="stylesheet" href="{{ mix('/css/admin.css') }}">
</head>
<body>
    <div id="app">

        <header>
            @include('admin.partials._navbar')
        </header>

        <main class="container mt-5">
            @yield('content')
        </main>
    </div>

    <script src="{{ mix('/js/admin.js') }}"></script>
</body>
</html>
