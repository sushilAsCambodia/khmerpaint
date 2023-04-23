<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Khmerpaint - Khmerpaint Company and paints</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Khmerpaint Company and paints" name="keywords">
    <meta content="Khmerpaint Company and paints" name="description">

    <!-- Favicon -->
    <link href="{{ URL::to('assets/website/img/favicon.ico') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ URL::to('assets/website/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/website/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/website/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/website/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/website/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::to('assets/website/css/style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- wrapper --}}
    <div class="">
        <!-- Top Bar Start -->
        @include('website.layouts.topBar')
        <!-- Nav Bar End -->

        <!-- Main Wrapper -->
        @yield('content')
        <!-- /Main Wrapper -->

        <!-- Footer Start -->
        @include('website.layouts.footer')
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('assets/website/lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/wow/wow.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::to('assets/website/js/main.js') }}"></script>


    <!-- Contact Javascript File -->
    <script src="{{ URL::to('assets/website/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ URL::to('assets/website/mail/contact.js') }}"></script>
</body>

</html>
