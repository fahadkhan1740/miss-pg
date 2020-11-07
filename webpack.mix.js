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
    ], 'public/en/css/app.css')
    .scripts([
        'resources/js/en/bootstrap.min.js',
        'resources/js/en/contact-form.js',
        'resources/js/en/contact.js',
        'resources/js/en/countdown.js',
        'resources/js/en/counter-up.js',
        'resources/js/en/datepicker.en.js',
        'resources/js/en/datepicker.min.js',
        'resources/js/en/imagesloaded.pkgd.min.js',
        'resources/js/en/isotope.pkgd.min.js',
        'resources/js/en/jquery-2.2.4.min.js',
        'resources/js/en/jquery.counterup.min.js',
        'resources/js/en/jquery.event.move.js',
        'resources/js/en/jquery.magnific-popup.js',
        'resources/js/en/jQuery.rProgressbar.min.js',
        'resources/js/en/jquery.rvideoPlayer.js',
        'resources/js/en/jquery.twentytwenty.js',
        'resources/js/en/jquery.validate.min.js',
        'resources/js/en/map.active.js',
        'resources/js/en/nice-select.js',
        'resources/js/en/owl.carousel.min.js',
        'resources/js/en/popper.min.js',
        'resources/js/en/slick-animation.js',
        'resources/js/en/slick.min.js',
        'resources/js/en/timepicker.js',
        'resources/js/en/waypoints.min.js',
        'resources/js/en/wickedpicker.min.js',
        'resources/js/en/wow.min.js',
    ], 'public/en/js/all.js');

mix.copyDirectory('resources/img', 'public/img');
mix.copyDirectory('resources/fonts', 'public/fonts');
