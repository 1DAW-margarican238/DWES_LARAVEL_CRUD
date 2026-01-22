<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
        <h1>CRUD AIRLINES</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>