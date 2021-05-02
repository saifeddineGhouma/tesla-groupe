<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tesla groupe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('site/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <link href="{{asset('site/assets/light-gallery/css/lightgallery.css')}}" rel="stylesheet">
<link href="{{asset('site/assets/js/pagination/simplePagination.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('site/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    @include('layout.inc.search')
    @include('layout.inc.nav')
    @yield('carousel')

  <main id="main">
    @yield('content')
  </main>
  @include('layout.inc.section-footer')
  @include('layout.inc.footer')
  @include('layout.inc.link')

</body>
</html>
