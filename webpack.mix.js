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

/*mix.js('resources/assets/js/app.js', 'public/js')
 .sass('resources/assets/sass/app.scss', 'public/css');*/

mix.styles([
    'public/vendors/nprogress/nprogress.css',
    'public/vendors/iCheck/skins/flat/green.css',
    'public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
    'public/vendors/jqvmap/dist/jqvmap.min.css',
    'public/vendors/jqvmap/dist/jqvmap.min.css',
    'public/vendors/bootstrap-daterangepicker/daterangepicker.css',
], 'public/vendorsMix/css/vendorsMix.css')
    .scripts([
        'public/vendors/fastclick/lib/fastclick.js',
        'public/vendors/nprogress/nprogress.js',
        'public/vendors/Chart.js/dist/Chart.min.js',
        'public/vendors/gauge.js/dist/gauge.min.js',
        'public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'public/vendors/iCheck/icheck.min.js',
        'public/vendors/skycons/skycons.js',
        'public/vendors/Flot/jquery.flot.js',
        'public/vendors/Flot/jquery.flot.pie.js',
        'public/vendors/Flot/jquery.flot.time.js',
        'public/vendors/Flot/jquery.flot.stack.js',
        'public/vendors/Flot/jquery.flot.resize.js',
        'public/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'public/vendors/flot-spline/js/jquery.flot.spline.min.js',
        'public/vendors/flot.curvedlines/curvedLines.js',
        'public/vendors/DateJS/build/date.js',
        'public/vendors/jqvmap/dist/jquery.vmap.js',
        'public/vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        'public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'public/vendors/moment/min/moment.min.js',
        'public/vendors/bootstrap-daterangepicker/daterangepicker.js',
    ], 'public/vendorsMix/js/vendorsMix.js');