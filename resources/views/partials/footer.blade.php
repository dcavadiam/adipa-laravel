<footer class="footer">
    <div class="footer__container">

        <!-- Logo y copyright -->
        <div class="footer__brand">
            <a href="/">
                <img src="{{ asset('images/logo-adipa-white.svg') }}" alt="Adipa Chile" class="footer__logo">
            </a>
            <p class="footer__copy">© Adipa {{ date('Y') }} - Todos los derechos reservados.</p>
        </div>

        <!-- Nav -->
        <ul class="footer__nav">
            <li><a href="#cursos" class="footer__nav-link">Cursos</a></li>
            <li><a href="#diplomados" class="footer__nav-link">Diplomados</a></li>
            <li><a href="#recursos" class="footer__nav-link">Recursos</a></li>
            <li><a href="#contacto" class="footer__nav-link">Contacto</a></li>
        </ul>

        <!-- Redes sociales -->
        <div class="footer__social">
            <p class="footer__social-title">Síguenos en nuestras redes sociales</p>
            <div class="footer__social-links">

                <a href="https://www.facebook.com/Adipa-102577181991776" target="_blank" rel="noopener noreferrer"
                    class="footer__social-link" aria-label="Facebook">
                    <x-icons.facebook class="footer__social-icon" />
                </a>

                <a href="https://www.instagram.com/adipa.cl/" target="_blank" rel="noopener noreferrer"
                    class="footer__social-link" aria-label="Instagram">
                    <x-icons.instagram class="footer__social-icon" />
                </a>

                <a href="https://www.youtube.com/channel/UCSx-fxlxiMHExaWwyHT8P8A" target="_blank"
                    rel="noopener noreferrer" class="footer__social-link" aria-label="YouTube">
                    <x-icons.youtube class="footer__social-icon" />
                </a>

                <a href="https://www.linkedin.com/company/academia-digital-de-psicologia-y-aprendizaje-adipa/"
                    target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="LinkedIn">
                    <x-icons.linkedin class="footer__social-icon" />
                </a>

                <a href="https://open.spotify.com/show/4mwZlXLYaGdr9WIqiuSHup" target="_blank" rel="noopener noreferrer"
                    class="footer__social-link" aria-label="Spotify">
                    <x-icons.spotify class="footer__social-icon" />
                </a>

                <a href="https://www.tiktok.com/@somosadipa" target="_blank" rel="noopener noreferrer"
                    class="footer__social-link" aria-label="TikTok">
                    <x-icons.tiktok class="footer__social-icon" />
                </a>

            </div>
        </div>

    </div>
</footer>