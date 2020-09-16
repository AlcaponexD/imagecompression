const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
    'resources/js/plugins/jquery.min.js',
    'resources/js/plugins/jquery-migrate-3.0.1.min.js',
    'resources/js/plugins/popper.min.js',
    'resources/js/plugins/bootstrap.min.js',
    'resources/js/plugins/jquery.easing.1.3.js',
    'resources/js/plugins/jquery.waypoints.min.js',
    'resources/js/plugins/jquery.stellar.min.js',
    'resources/js/plugins/owl.carousel.min.js',
    'resources/js/plugins/jquery.magnific-popup.min.js',
    'resources/js/plugins/aos.js',
    'resources/js/plugins/jquery.animateNumber.min.js',
    'resources/js/plugins/scrollax.min.js',
    'resources/js/plugins/google-map.js'
], 'public/js/vendor.js');

mix.scripts([
    'resources/js/main.js'
], 'public/js/main.js');

mix.styles([
    'resources/css/open-iconic-bootstrap.min.css',
    'resources/css/animate.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/aos.css',
    'resources/css/ionicons.min.css',
    'resources/css/bootstrap-datepicker.css',
    'resources/css/jquery.timepicker.css',
    'resources/css/flaticon.css',
    'resources/css/icomoon.css'
], 'public/css/vendor.css');

mix.styles([
    'resources/css/style.css'
], 'public/css/styles.css');

mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/fonts', 'public/fonts');

