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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/css/fontawesome.css',
        'resources/css/animate.css',
        'resources/css/isotop.css',
        'resources/css/magnific-popup.css',
        'resources/css/owl.carousel.css',
        'resources/css/xsIcon.css',
        'resources/css/style.css',
        'resources/css/responsive.css'
    ], 'public/css/all.css')
    .copyDirectory('resources/vendor/fonts', 'public/fonts')
    .copyDirectory('resources/vendor/webfonts', 'public/webfonts')
    .copyDirectory('resources/vendor/images', 'public/images')
    .version()
    .sourceMaps();