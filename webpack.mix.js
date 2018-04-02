let mix = require('laravel-mix');

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
    'resources/assets/vanilla/checkInstall.js',
    'resources/assets/vanilla/editor.js',
    'resources/assets/vanilla/login.js',
    'resources/assets/vanilla/tooltip.js',
    'resources/assets/vanilla/touchHover.js',
],'public/js/main.js')
mix.js('resources/assets/js/app.js', 'public/js');