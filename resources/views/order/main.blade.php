<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Order</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('user/}css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

    @include('user.header')
    <!-- end header section -->

    <!-- slider section -->
    @yield('user.content')
  <!-- end info section -->

  <!-- footer section -->
    @include('user.footer')
  <!-- footer section -->


  <script type="text/javascript" src="{{ asset('userjs/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('user/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('user/js/custom.js') }}"></script>

</body>

</html>