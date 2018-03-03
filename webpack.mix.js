let mix = require('laravel-mix');

/*mix.browserSync('http://localhost:8000/');*/

var LiveReloadPlugin = require('webpack-livereload-plugin');

mix.webpackConfig({
    plugins: [
        new LiveReloadPlugin()
    ]
});

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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/vue-app.js', 'public/js/vue-app.js')
    .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    'public/assets/vendors/nprogress/nprogress.css',
    'public/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
], 'public/assets/vendorsMix/css/vendorsMix.css')
    .scripts([
        'public/assets/vendors/fastclick/lib/fastclick.js',
        'public/assets/vendors/nprogress/nprogress.js',
        'public/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'public/assets/vendors/iCheck/icheck.min.js',
    ], 'public/assets/vendorsMix/js/vendorsMix.js');
