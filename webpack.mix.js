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

mix.combine('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js');
// mix.js('node_modules/jquery/dist/jquery.js','public/js/')
//    .js('resources/assets/js/app.js',
//         'public/js/app.js')
//     .js(['resources/assets/js/js1.js',
//         'resources/assets/js/js2.js'],'public/js/test.js')
//    .js(['node_modules/chartjs/chart.js',
//         'resources/assets/js/jquery.nicescroll.js',
//         'resources/assets/js/jquery.blockUI.js',
//         'resources/assets/js/detect.js',
//         'resources/assets/js/fastclick.js',
//         'resources/assets/js/pikeadmin.js',
//         'node_modules/fullcalendar/dist/fullcalendar.min.js'],
//         'public/js/admin.js')
//    .sass('resources/assets/sass/app.scss', 'public/css/app.css')
//    .styles([
//             'resources/assets/css/fullcalendar_ext.css',
//             'resources/assets/css/style.css'], 'public/css/admin.css');
