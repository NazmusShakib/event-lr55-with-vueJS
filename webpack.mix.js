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

mix.js('resources/src/main.js', 'public/js')
    .styles([
        'resources/css/themify-icons.css'
    ], 'public/css/themify-icons.css')
    .sass(
        'resources/src/assets/sass/vendor.scss', 'public/css')
    .copyDirectory('resources/src/assets/fonts', 'public/fonts');


mix.webpackConfig({
    plugins: [
        // new BundleAnalyzerPlugin()
    ],
    resolve: {
        extensions: ['.js', '.json', '.vue'],
        alias: {
            'src': path.join(__dirname, './resources/src')
        }
    },
    module: {
        rules: [{
            test: /\.js?$/,
            exclude: /(bower_components)/,
            use: [{
                loader: 'babel-loader',
                options: mix.config.babel()
            }]
        }]
    }
});