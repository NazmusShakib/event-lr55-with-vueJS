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

/*mix.js('resources/assets/js/app.js', 'public/js')
 .sass('resources/assets/sass/app.scss', 'public/css');*/

mix.styles([
    'public/assets/vendors/nprogress/nprogress.css',
    'public/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
    'public/assets/vendors/jqvmap/dist/jqvmap.min.css',
    'public/assets/vendors/bootstrap-daterangepicker/daterangepicker.css',
], 'public/assets/vendorsMix/css/vendorsMix.css')
    .scripts([
        'public/assets/vendors/fastclick/lib/fastclick.js',
        'public/assets/vendors/nprogress/nprogress.js',
        'public/assets/vendors/Chart.js/dist/Chart.min.js',
        'public/assets/vendors/gauge.js/dist/gauge.min.js',
        'public/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'public/assets/vendors/iCheck/icheck.min.js',
        'public/assets/vendors/skycons/skycons.js',
        'public/assets/vendors/Flot/jquery.flot.js',
        'public/assets/vendors/Flot/jquery.flot.pie.js',
        'public/assets/vendors/Flot/jquery.flot.time.js',
        'public/assets/vendors/Flot/jquery.flot.stack.js',
        'public/assets/vendors/Flot/jquery.flot.resize.js',
        'public/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'public/assets/vendors/flot-spline/js/jquery.flot.spline.min.js',
        'public/assets/vendors/flot.curvedlines/curvedLines.js',
        'public/assets/vendors/DateJS/build/date.js',
        'public/assets/vendors/jqvmap/dist/jquery.vmap.js',
        'public/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        'public/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'public/assets/vendors/moment/min/moment.min.js',
        'public/assets/vendors/bootstrap-daterangepicker/daterangepicker.js',
    ], 'public/assets/vendorsMix/js/vendorsMix.js');