<!DOCTYPE html>
<html lang="es-CL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cursos de Psicología con Certificado en 2026 | Adipa Chile')</title>
    <!-- TODO: cambiar el contenido de la descripción, keywords, author, etc. -->
    <meta name="description" content="Cursos de Psicología con Certificado en 2026 | Adipa Chile">
    <meta name="keywords" content="Cursos de Psicología, Certificado en 2026, Adipa Chile">
    <meta name="author" content="Adipa Chile">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="google" content="notranslate">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- CSS compilado por Mix -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- jQuery + JS compilado por Mix -->
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>