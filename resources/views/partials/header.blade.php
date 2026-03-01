<header class="header">
    <div class="header__container">

        <!-- Logo -->
        <a href="/" class="header__logo">
            <img src="{{ asset('images/logo-adipa.svg') }}" alt="Adipa Chile" class="header__logo-img">
        </a>

        <!-- Nav desktop -->
        <nav class="header__nav">
            <span class="header__nav-link">
                Inicio
            </span>
            <span class="header__nav-link">
                Cursos
            </span>
            <span class="header__nav-link">
                Diplomados
            </span>
            <span class="header__nav-link">
                Recursos
            </span>
            <span class="header__nav-link">
                Contacto
            </span>
        </nav>

        <div class="header__actions">
            <!-- Botón login desktop -->
            <button class="header__btn-login">Iniciar sesión</button>

            <!-- Hamburguesa mobile -->
            <button class="header__hamburger" id="hamburger" aria-label="Abrir menú">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </button>
        </div>

    </div>

    <!-- Overlay -->
    <div class="header__overlay" id="overlay"></div>

    <!-- Nav mobile -->
    <nav class="header__nav-mobile" id="nav-mobile">
        <button class="header__nav-mobile-close" id="nav-close" aria-label="Cerrar menú">✕</button>
        <a href="/" class="header__nav-link">Inicio</a>
        <a href="#cursos" class="header__nav-link">Cursos</a>
        <a href="#diplomados" class="header__nav-link">Diplomados</a>
        <a href="#recursos" class="header__nav-link">Recursos</a>
        <a href="#contacto" class="header__nav-link">Contacto</a>
        <button class="header__btn-login">Iniciar sesión</button>
    </nav>

</header>