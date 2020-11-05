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
    .postCss('resources/css/app.css', 'public/css')
    .sass('resources/sass/urku.scss', 'public/css')
    .sass('resources/sass/aurora-theme-base.scss', 'public/css')
    .sass('resources/sass/aurora-pack.scss', 'public/css')
    .sass('resources/sass/_aurora-pack.scss', 'public/css');
mix.browserSync('http://crypta.test');
