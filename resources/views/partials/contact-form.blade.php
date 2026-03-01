<section class="contact" id="contacto">
    <div class="contact__container">
        <h2 class="contact__title">Formulario de Contacto</h2>

        <!-- Estado de éxito -->
        <div class="contact__success" id="form-success">
            ¡Mensaje enviado correctamente!
        </div>

        <form class="contact__form" id="contact-form" novalidate>
            <div class="contact__row">

                <!-- Nombre -->
                <div class="contact__field">
                    <label for="name" class="contact__label">Nombre</label>
                    <input type="text" id="name" name="name" class="contact__input" placeholder="Ingrese su nombre">
                    <span class="contact__error" id="name-error"></span>
                </div>

                <!-- Email -->
                <div class="contact__field">
                    <label for="email" class="contact__label">Email</label>
                    <input type="email" id="email" name="email" class="contact__input" placeholder="Ingrese su email">
                    <span class="contact__error" id="email-error"></span>
                </div>

            </div>

            <!-- Mensaje -->
            <div class="contact__field">
                <label for="message" class="contact__label">Mensaje</label>
                <textarea id="message" name="message" class="contact__input contact__input--textarea"
                    placeholder="Ingrese su mensaje" rows="4"></textarea>
                <span class="contact__error" id="message-error"></span>
            </div>

            <button type="submit" class="contact__btn">Enviar mensaje</button>
        </form>
    </div>
</section>