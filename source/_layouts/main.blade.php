<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    {{-- <meta name="description" content="{{ $page->description }}"> --}}
    <title>{{ $page->title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ $page->images }}/starq.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="stylesheet" href="{{ mix('css/starq.css', 'assets/build') }}">
    <link rel="stylesheet" href="{{ mix('css/layout.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/starq.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-sans antialiased" data-bs-theme="dark">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="d-flex m-auto">
            <a class="fs-2 navbar-brand" href="/">StarQ</a>
        </div>
    </nav>

    @yield('body')
</body>

</html>
