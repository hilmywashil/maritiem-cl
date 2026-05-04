<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - CAAIP Maritiem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="{{ asset('asset-front/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('asset-front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset-front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset-front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('asset-front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset-front/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset-front/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('asset-front/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('asset-front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('asset-front/css/style.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <style>
        /* Sticky Header */
        .sticky-header {
            position: fixed;
            top: -100px;
            left: 0;
            width: 100%;
            z-index: 9999;
            background: #fff;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.25);
            transition: top 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .sticky-header.is-visible {
            top: 0;
        }

        .sticky-header .sticky-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 12px 20px;
        }

        .sticky-header .sticky-logo img {
            max-height: 60px;
            width: auto;
        }

        .sticky-header .sticky-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sticky-header .sticky-nav ul li a {
            text-decoration: none;
            color: #000;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 6px 14px;
            display: inline-block;
            transition: color 0.2s;
        }

        .sticky-header .sticky-nav ul li a:hover {
            color: #f0a500;
        }

        .sticky-header .sticky-nav ul li.active a {
            color: #f0a500;
        }

        /* Arrow for has-children */
        .sticky-header .sticky-nav ul li.has-children>a::after {
            content: ' \203A';
            font-size: 15px;
            vertical-align: middle;
        }

        @media (max-width: 991px) {
            .sticky-header .sticky-nav {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="site-wrap">
        <!-- Sticky Header -->
        <div class="sticky-header" id="stickyHeader">
            <div class="sticky-inner">
                <div class="sticky-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('asset-front/images/caaip-logo.png') }}" alt="CAAIP Logo">
                    </a>
                </div>
                <nav class="sticky-nav">
                    <ul>
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">Tentang</a>
                        </li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Industries</a></li>
                        <li class="{{ request()->routeIs('berita') ? 'active' : '' }}">
                            <a href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')

        @stack('scripts')

    </div>

    <script src="{{ asset('asset-front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset-front/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('asset-front/js/aos.js') }}"></script>

    <script src="{{ asset('asset-front/js/main.js') }}"></script>

    <script>
        (function () {
            var stickyHeader = document.getElementById('stickyHeader');
            var scrollThreshold = 120; // px sebelum header asli hilang dari viewport

            window.addEventListener('scroll', function () {
                if (window.scrollY > scrollThreshold) {
                    stickyHeader.classList.add('is-visible');
                } else {
                    stickyHeader.classList.remove('is-visible');
                }
            }, { passive: true });
        })();
    </script>
</body>

</html>