<header class="header">
    <div class="header__container">

        <!-- Logo -->
        <a href="/" class="header__logo">
            <img src="{{ asset('images/logo-adipa.svg') }}" alt="Adipa Chile" class="header__logo-img">
        </a>

        <!-- Nav desktop -->
        <nav class="header__nav">
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
                <x-icons.menu />
            </button>
        </div>

    </div>

    <!-- Overlay -->
    <div class="header__overlay" id="overlay"></div>

    <!-- Nav mobile -->
    <nav class="header__nav-mobile" id="nav-mobile">
        <button class="header__nav-mobile-close" id="nav-close" aria-label="Cerrar menú">
            <x-icons.close />
        </button>
        <a href="#cursos" class="header__nav-link">Cursos</a>
        <a href="#diplomados" class="header__nav-link">Diplomados</a>
        <a href="#recursos" class="header__nav-link">Recursos</a>
        <a href="#contacto" class="header__nav-link">Contacto</a>
        <button class="header__btn-login header__btn-login--mobile">Iniciar sesión</button>
    </nav>

</header>