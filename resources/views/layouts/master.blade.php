<!doctype html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    

    <style>
        /* Initial Large Navbar Styles */
        .navbar-custom {
            transition: all 0.3s ease;
            padding: 5px 10px;
            background-color: #ffffff; /* Background color */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom.scrolled {
            padding: 10px 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Slightly darker shadow when scrolled */
        }

        /* Navbar Brand */
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            transition: font-size 0.3s ease;
        }

        /* Shrinking Effect for Navbar Brand */
        .navbar-custom.scrolled .navbar-brand {
            font-size: 1.2rem; /* Smaller font size when scrolled */
        }

        /* Navbar Links */
        .navbar-nav .nav-link {
            font-size: 1rem;
            margin-right: 10px;
            color: #343a40; /* Dark color */
            transition: color 0.3s ease, font-size 0.3s ease;
        }

        /* Change Link Color on Hover */
        .navbar-nav .nav-link:hover {
            color: #007bff; /* Bootstrap primary color */
        }

        /* Shrinking Effect for Navbar Links */
        .navbar-custom.scrolled .nav-link {
            font-size: 0.9rem; /* Slightly smaller font size when scrolled */
        }
    </style>
</head>
<body>

    <!-- Shrinking Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutJimmy">Jimmy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutMF">Ming Fang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutPeiYee">Pei Yee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutGan">Gan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-5">
        @yield('content')
    </main>

    <!-- Bootstrap and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Shrink Navbar on Scroll JavaScript -->
    <script>
        $(document).ready(function() {
            // Check scroll position on page load and scroll
            $(window).on("scroll", function() {
                if ($(this).scrollTop() > 50) {
                    $(".navbar-custom").addClass("scrolled");
                } else {
                    $(".navbar-custom").removeClass("scrolled");
                }
            });
        });
    </script>

</body>
</html>
