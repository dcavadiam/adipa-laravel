<!DOCTYPE html>
<html lang="es-CL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cursos de Psicología con Certificado en 2026 | Adipa Chile')</title>

    <!-- Dublin Core -->
    <meta name="dc.title" content="Cursos de Psicología con Certificado en 2026 | Adipa Chile">
    <meta name="dc.description"
        content="Mira los mejores cursos de psicología para realizar en el 2026. Recibe certificado oficial al finalizar. ¡Conoce Adipa Chile!">
    <meta name="dc.language" content="es_CL">
    <meta name="dc.source" content="https://adipa.cl/">

    <!-- SEO -->
    <title>@yield('title', 'Cursos de Psicología con Certificado en 2026 | Adipa Chile')</title>
    <meta name="description"
        content="@yield('description', 'Mira los mejores cursos de psicología para realizar en el 2026. Recibe certificado oficial al finalizar. ¡Conoce Adipa Chile!')">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="ADIPA Chile">
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="article">
    <meta property="og:title" content="@yield('title', 'Cursos de Psicología con Certificado en 2026 | Adipa Chile')">
    <meta property="og:description"
        content="@yield('description', 'Mira los mejores cursos de psicología para realizar en el 2026. Recibe certificado oficial al finalizar. ¡Conoce Adipa Chile!')">
    <meta property="og:image" content="https://adipa.cl/content/uploads/2025/01/cursos-banner-2025-2.webp">
    <meta property="og:image:width" content="992">
    <meta property="og:image:height" content="463">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title', 'Cursos de Psicología con Certificado en 2026 | Adipa Chile')">
    <meta name="twitter:description"
        content="@yield('description', 'Mira los mejores cursos de psicología para realizar en el 2026. Recibe certificado oficial al finalizar. ¡Conoce Adipa Chile!')">
    <meta name="twitter:image" content="https://adipa.cl/content/uploads/2025/01/cursos-banner-2025-2.webp">


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