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
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><a href="{{ url('/dashboard') }}">Home</a></div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="{{ route('articles.index') }}">Artikel
                    Managament</a>
                {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Gallery
                    Management</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Product
                    Managament</a> --}}

                <li class="list-group-item list-group-item-action list-group-item-light p-3 dropdown ms-auto">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Hallo, {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-item"
                            href="{{ url('/') }}">
                            Homepage
                        </a>
                        <a class="list-group-item
                            list-group-item-action list-group-item-light p-3 dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </div>



        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">

            <main class="py-4">
                @yield('content')
            </main>
            {{-- main content --}}
        </div>



    </div>

</body>

</html>
