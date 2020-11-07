const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/en/script.js', 'public/en/js')
    .js('resources/js/ar/script.js', 'public/ar/js')
    .sass('resources/sass/en/style.scss', 'public/en/css')
    .styles([
        'resources/css/en/animate.css',
        'resources/css/en/bootstrap.min.css',
        'resources/css/en/datepicker.min.css',
        'resources/css/en/flaticon.css',
        'resources/css/en/font-awesome.min.css',
        'resources/css/en/hamburgers.min.css',
        'resources/css/en/jquery.rprogessbar.min.css',
        'resources/css/en/magnific-popup.css',
        'resources/css/en/nice-select.css',
        'resources/css/en/owl.carousel.min.css',
        'resources/css/en/responsive.css',
        'resources/css/en/rvideoplayer.css',
        'resources/css/en/slick-theme.css',
        'resources/css/en/swiper.css',
        'resources/css/en/swiper.min.css',
        'resources/css/en/twentytwenty.css',
        'resources/css/en/wickedpicker.min.css',
    ], 'public/en/css/app.css');
