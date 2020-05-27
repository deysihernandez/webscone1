<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name=" routeName" content="{{ Route::currentRouteName() }}">
    <link rel="stylesheet" href="{{  url('/bootstrap-4.4.1-dist/css/bootstrap.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{  url('/static/fontawesome-free/css/all.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{  url('/static/fontawesome-free/css/font-awesome.min.css?v='.time()) }}">
    <script src="{{  url('/static/jquery/jquery.min.js') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{  url('/static/fontawesome-free/js/b0d8aefb17.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

</head>
<body>
 
    @section('content')
    hola mundo
    @show
    <script>
        $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
        $(this)
        .parent()
        .hasClass("active")
        ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .parent()
        .removeClass("active");
        } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
        $(this)
        .parent()
        .addClass("active");
        }
        });

        $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
        });
</script>
</body>
</html>