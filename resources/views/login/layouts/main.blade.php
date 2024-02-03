<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tautan CSS AdminLTE -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    {{-- Style CSS --}}
    <link rel="stylesheet" href="css/styles.css">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    {{-- Title --}}
    <title>FRPB | {{ $title }}</title>
    <style>
        body {
            background-color: red;
        }
    </style>
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        @yield('container')
    </div>

    <!-- Tautan JS AdminLTE -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
