<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  url('/static/css/admin.css?v='.time()) }}">
    <link rel="stylesheet" href="{{  url('/bootstrap-4.4.1-dist/css/bootstrap.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{  url('/static/fontawesome-free/css/all.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{  url('/static/fontawesome-free/css/font-awesome.min.css?v='.time()) }}">
    <link href='https://fonts.googleapis.com/css?family=roboto' rel='stylesheet' type='text/style'>
    <script src="{{  url('/static/jquery/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{  url('/static/fontawesome-free/js/b0d8aefb17.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
    @section('content')
   
    @show

    <!-- Optional JavaScript -->
    <script>
    $(document).ready(function () {
    $('.leftmenutrigger').on('click', function (e) {
      $('.side-nav').toggleClass("open");
      $('#wrapper').toggleClass("open");
      e.preventDefault();
    });
  });
    </script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ url('/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>