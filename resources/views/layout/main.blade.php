<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/materialize.min.css') }}>
    <!-- <link rel="stylesheet" href={{ asset('css/app.css') }}> -->
    <title>@yield('title')</title> <!-- Compiled and minified CSS -->

</head>

<body>
    @include('layout.partial.header')

    <div class="main_content">
        @yield('main_content')
    </div>

    @include('layout.partial.footer')

    <style>
        html,
        body {
            height: 100%;
        }

        .main_content {
            min-height: 700px;
        }

        table {
            background-color: lightgray;
            padding: 20px;
        }

        table * {
            text-align: center;
        }

        th {
            padding: 10px;
        }

        tr {
            border-bottom: 2px solid black;
        }
    </style>

    <script src={{ asset('js/app.js') }}></script>
    <script src={{ asset('js/materialize.min.js') }}></script>
    <script>
        $(document).ready(
            () => {
                $('.sidenav').sidenav();
            }
        );
    </script>

</body>

</html>