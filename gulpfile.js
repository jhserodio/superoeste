var elixir      = require('laravel-elixir');
    pcss        = require('laravel-elixir-pcss');
    livereload  = require('laravel-elixir-livereload');

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

elixir(function(mix) {
  mix.pcss("resources/assets/styles/style.css", "public/styles", "resources/assets/styles/**/*.css");
  mix.copy("resources/assets/fonts", "public/fonts")
     .copy("resources/assets/images", "public/images");
  mix.livereload();
});
