require('./bootstrap');
window.$ = window.jQuery = require("jquery");

// Menu desplegable
$(document).ready(function () {

    // Abrir menu
    $('#hamburger').on('click', function () {
        $('#nav-mobile').addClass('is-open');
        $('#overlay').addClass('is-open');
    });

    // Cerrar menu
    $('#nav-close, #overlay').on('click', function () {
        $('#nav-mobile').removeClass('is-open');
        $('#overlay').removeClass('is-open');
    });

});

// Filtros
$(document).ready(function () {

    $('.filter-pill').on('click', function () {
        const category = $(this).data('category');

        // Actualizar pills activas
        $('.filter-pill').removeClass('filter-pill--active');
        $(this).addClass('filter-pill--active');

        // Filtrar cards
        if (category === 'Todos') {
            $('.course-card').show();
        } else {
            $('.course-card').each(function () {
                if ($(this).data('category') === category) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });

});

// Validación del formulario
$('#contact-form').on('submit', function (e) {
    e.preventDefault();

    let isValid = true;

    // Limpiar errores previos
    $('.contact__input').removeClass('contact__input--error');
    $('.contact__error').removeClass('is-visible').text('');
    $('#form-success').removeClass('is-visible');

    // Validar nombre
    const name = $('#name').val().trim();
    if (name.length === 0) {
        showError('name', 'El nombre es requerido');
        isValid = false;
    } else if (name.length < 2) {
        showError('name', 'El nombre debe tener al menos 2 caracteres');
        isValid = false;
    }

    // Validar email
    const email = $('#email').val().trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.length === 0) {
        showError('email', 'El email es requerido');
        isValid = false;
    } else if (!emailRegex.test(email)) {
        showError('email', 'El email no es válido');
        isValid = false;
    }

    // Validar mensaje
    const message = $('#message').val().trim();
    if (message.length === 0) {
        showError('message', 'El mensaje es requerido');
        isValid = false;
    } else if (message.length < 10) {
        showError('message', 'El mensaje debe tener al menos 10 caracteres');
        isValid = false;
    }

    // Si todo es válido mostrar éxito
    if (isValid) {
        $('#form-success').addClass('is-visible');
        $('#contact-form')[0].reset();
    }
});

function showError(field, message) {
    $('#' + field).addClass('contact__input--error');
    $('#' + field + '-error').addClass('is-visible').text(message);
}