<html>
<head>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>
        @yield('titulo')
    </title>
</head>

<body>
    @include('partials.nav')
    @yield('contenido')
</body>

</html>
