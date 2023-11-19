<html>

<head>
    <link rel="stylesheet" href="css/partials/globals.css" />
    <link rel="stylesheet" href="css/partials/footer.css" />

    <title>{{ $title }} Foody's</title>
</head>

<body>
    {{-- @include('partials.users.header') --}}
    @yield('content')
    @include('partials.users.footer')
</body>

</html>
