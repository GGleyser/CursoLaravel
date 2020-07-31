<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- <link rel="stylesheet" href={{ asset('css/app.css') }}> -->
    <title>@yield('title')</title> <!-- Compiled and minified CSS -->

</head>

<body>
    @include('layout.partial.header')
    
    @yield('main_content')
    
    @include('layout.partial.footer')

    <script src={{ asset('js/app.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(
            () => 
            {
                $('.sidenav').sidenav();
            }
        );
    </script>

</body>

</html>