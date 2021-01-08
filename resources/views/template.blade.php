<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Semi_column Training_Center</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.min.css')}}">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/business-frontpage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include ('part.nav')


  @yield('content')

  <!-- Footer -->
  @include ('part.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
