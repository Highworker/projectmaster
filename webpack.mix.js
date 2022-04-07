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

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.css',
    'resources/css/lightbox.css',
    'resources/css/responsive.css',
    'resources/css/style.css',
    'resources/css/swiper.min.css',
// Другие стили
], 'public/css/styles.css');

mix.scripts([
    'resources/js/bootstrap.min.js',
    'resources/js/functions.js',
    'resources/js/isotope.pkgd.min.js',
    'resources/js/jquery.gmap.min.js',
    'resources/js/jquery.syotimer.js',
    'resources/js/jquery.vide.js',
    'resources/js/jquery-2.2.3.min.js',
    'resources/js/lightbox.js',
    'resources/js/plugins.js',
    'resources/js/swiper.min.js',
    // Другие js скрипты
], 'public/js/scripts.js');
