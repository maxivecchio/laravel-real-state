<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
    <link rel="icon" type="image/png" href="/images/icon.png">

	<meta name="description" content="">
	<meta name="keywords" content="bootstrap, bootstrap5">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{asset('/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('/fonts/flaticon/font/flaticon.css')}}">
    <script src="https://kit.fontawesome.com/82cfd2079d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/tiny-slider.css')}}" >
    <link rel="stylesheet" href="{{asset('/css/aos.css')}}" >
	<link rel="stylesheet" href="{{asset('/css/style2.css')}}" >
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" >
	<link rel="stylesheet" href="{{asset('/css/index.css')}}" >
	
    <title>{{ config('app.name', 'Properties') }}</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Properties') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto gap-2">
                        <li><a href="/dashboard/properties">Properties</a></li>
                        <li><a href="/dashboard/news">News</a></li>
                        <li><a href="/dashboard/users">Users</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav gap-2">
                        <li><a class="nav-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a></li>
                        <li>
                            <a class="nav-link" href="/logout"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="/logout" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
