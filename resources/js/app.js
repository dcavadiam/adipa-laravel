require('./bootstrap');
window.$ = window.jQuery = require("jquery");

$(document).ready(function () {

    $('#hamburger').on('click', function () {
        $('#nav-mobile').addClass('is-open');
        $('#overlay').addClass('is-open');
    });

    $('#nav-close, #overlay').on('click', function () {
        $('#nav-mobile').removeClass('is-open');
        $('#overlay').removeClass('is-open');
    });

});