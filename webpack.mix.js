const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.disableNotifications();
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
    mix.postCss('resources/css/house.css', 'public/css');
    mix.js('resources/js/mainscript.js', 'public/js');
    // mix.sass('resources/sass/main.scss', 'public/css');

    //ADMIN CSS
    mix.postCss('resources/views/admin/lib/owlcarousel/assets/owl.carousel.min.css', 'public/css');
    mix.postCss('resources/views/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', 'public/css');
    mix.postCss('resources/views/admin/css/bootstrap.min.css', 'public/css');
    mix.postCss('resources/views/admin/css/style.css', 'public/css');

    //ADMIN JS
    mix.js('resources/views/admin/lib/chart/chart.min.js','public/js');
    mix.js('resources/views/admin/lib/waypoints/waypoints.min.js','public/js');
    mix.js('resources/views/admin/lib/owlcarousel/owl.carousel.min.js','public/js');
    mix.js('resources/views/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js','public/js');
