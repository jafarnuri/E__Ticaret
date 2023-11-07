
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{asset('/')}}frondend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}frondend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frondend/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}frondend/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}frondend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frondend/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{asset('/')}}frondend/css/aos.css">

    <link rel="stylesheet" href="{{asset('/')}}frondend/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
     @include('frond_layout.header')


      @yield('content')


     @include('frond_layout.footer')
  </div>

  <script src="{{asset('/')}}frondend/js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('/')}}frondend/js/jquery-ui.js"></script>
  <script src="{{asset('/')}}frondend/js/popper.min.js"></script>
  <script src="{{asset('/')}}frondend/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}frondend/js/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}frondend/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('/')}}frondend/js/aos.js"></script>

  <script src="{{asset('/')}}frondend/js/main.js"></script>
    
  </body>
</html>