const { mix } = require('laravel-mix');

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

mix.js(['resources/assets/js/app.js',
		'node_modules/vuetify/dist/vuetify.min.js'], 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css/custom/custom.css')
   .stylus('resources/assets/stylus/main.styl', 'public/css/vendor/main.css')
   .styles(
   		['node_modules/vuetify/dist/vuetify.min.css',
   		'public/css/vendor/main.css',
   		'public/css/custom/custom.css'],
   		 'public/css/app.css')
   version('public/css/app.css');
