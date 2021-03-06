<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>

    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png">
    @include('layouts.style-jmla')
    @include('layouts.style-animation')
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@include('layouts.header')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')
@yield('scripts')
</body>
</html>