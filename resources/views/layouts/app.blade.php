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

</head>

<body>

    <div class="site-wrap">

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

</body>

</html>