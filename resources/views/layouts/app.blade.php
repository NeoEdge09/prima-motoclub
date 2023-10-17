<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prima Moto Club</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="bg-primary px-3 py-2" data-bs-theme="dark">
        <div class="d-flex gap-5">
            <img class="" src="/image/Prima Moto Club-logos_transparent.png" alt="logo" width="120"
                class="">
            <a>
                <h1 class="text-white-50 ps-5">Prima Moto Club</h1>
            </a>
        </div>
    </div>


    <div id="app" class="d-flex">
        <!-- Sidebar-->
        @include('layouts.sidebar')

        @if (Auth::check())
            <div id="page-content-wrapper">
                @include('layouts.navbar')
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        @endif

    </div>
    @if (!Auth::check())
        <div id="page-content-wrapper">
            @include('layouts.navbar')
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    @endif


</body>

</html>
