<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>    

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Monithor" />
    <meta property="og:description" content="Curso ABC del Emprendedor" />
    <meta property="og:url" content="https://abc.monithor.com.pe/" />
    <meta property="og:site_name" content="Monithor" />
    <meta property="og:image" content="https://monithor.com.pe/wp-content/uploads/2020/09/cropped-icono.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:locale" content="es_LA" />

    <link rel="icon" href="https://monithor.com.pe/wp-content/uploads/2020/09/cropped-icono-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://monithor.com.pe/wp-content/uploads/2020/09/cropped-icono-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://monithor.com.pe/wp-content/uploads/2020/09/cropped-icono-180x180.png" />
    <meta name="msapplication-TileImage" content="https://monithor.com.pe/wp-content/uploads/2020/09/cropped-icono-270x270.png" />

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link href="{{ asset(mix('css/all.css')) }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150852334-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-150852334-2');
    </script>-->

</head>
<body class="body-color">
    <div class="body-inner">
        
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')

    </div>

    <!-- Javascript Files
        ================================================== -->
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
