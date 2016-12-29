const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/', 'public/fonts/bootstrap');
});

elixir(function(mix) {
    mix.copy("./bower_components/font-awesome/css/font-awesome.min.css", 'public/css/font-awesome.min.css');
    mix.copy('./bower_components/font-awesome/fonts', 'public/fonts');
    mix.copy('./bower_components/bootstrap-social/bootstrap-social.css', 'public/css/bootstrap-social.css');
});