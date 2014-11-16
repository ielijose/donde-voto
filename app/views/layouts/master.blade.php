<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Donde Voto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,500,700' rel='stylesheet' type='text/css'>
  </head>

  <body class="home-2">

    <!-- Navbar -->

    @include('layouts.header')

    @yield('content')

    <!-- Footer Widgets -->
    @include('layouts.footer')

    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/assets/js/jquery.autocomplete.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.backstretch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/application.js') }}"></script>

  </body>
</html>
