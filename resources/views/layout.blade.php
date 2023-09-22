<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MeFamily Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>

  <!-- =======================================================
  * Template Name: MeFamily
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('components/header')
  
  <!-- ======= Page ======= -->
  @yield('content')

  <!-- ======= Footer ======= -->
  @include('components/footer')
  
  @include('components/arrow-up')

  <!-- Vendor JS Files -->
  <script src="{{asset('./vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('./vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('./vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('./vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('./vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>