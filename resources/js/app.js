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