<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <title>@yield('title', 'Workshop 1')</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home.index') }}">Home</a>
            <a href={{ route('artwork.create') }}>Create artwork form</a>
            <a href={{ route('artwork.index') }}>List artworks</a>
        </nav>
        <h1>Workshop 1</h1>
        <p>@yield('subtitle', 'Just some code')</p>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Hello :)</p>
    </footer>
</body>
