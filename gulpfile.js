var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    /*
    mix.less([
        'app.les',
    ])
    */

    mix.styles([
        'bootstrap.min.css',
        'font-awesome.css',
        'site.css',
        'smartadmin-production.min.css',
        'smartadmin-production-plugins.min.css',
        'extralayers.css',
        'settings.css',
        'main.css',
        'color.css',
     ], 'public/assets/site/css/everything.css','resources/assets/site/css')

    mix.scripts([
         'bootstrap.min.js',
         'jquery.cookie.js',
         'jquery.scrollUp.js',
         'jquery.themepunch.plugins.min.js',
         'jquery.themepunch.revolution.min.js',
         //'formController.js'

    ],'public/assets/site/js/everything.js','resources/assets/site/js')

    mix.version([
        'assets/site/css/everything.css',
        'assets/site/js/everything.js',
    ])

    .copy('resources/assets/site/fonts/',   'public/assets/site/fonts')
    .copy('resources/assets/site/img/',     'public/assets/site/img')
    .copy('resources/assets/site/angular/', 'public/assets/site/angular')
    .copy('resources/assets/site/libs/' ,   'public/assets/site/libs')
    .copy('resources/assets/site/requirejs/' ,   'public/assets/site/requirejs')

    ;
});
