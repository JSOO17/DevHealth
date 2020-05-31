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
    .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/sass/login.scss', 'public/css');
mix.sass('resources/sass/style.scss', 'public/css');
mix.sass('resources/sass/styleProfile.scss', 'public/css');

mix.styles([
    'resources/css/login.css',
    'resources/css/style.css',
    'resources/css/styleProfile.css',
], 'public/css/all.css');

mix.scripts([
    'public/js/secciones.js',
], 'public/js/all.js');