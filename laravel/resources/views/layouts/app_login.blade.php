<!doctype html>
<html lang="en" id="home">

<head>
    <link rel="shortcut icon" href="{{ url('frontend/image/fav.png') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('includes.style')
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar_login')

    @yield('content')



    @include('includes.script')
</body>

</html>