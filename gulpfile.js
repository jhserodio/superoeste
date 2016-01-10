var elixir      = require('laravel-elixir');
    postcss     = require('laravel-elixir-postcss');
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
  mix.postcss("resources/assets/styles/style.css", "public/styles", "resources/assets/styles/**/*.css");
  mix.livereload();
});
