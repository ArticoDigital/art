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

elixir.config.css.autoprefix = {
    enabled: true,
    options: {
        cascade: true,
        browsers: ['last 2 versions', 'safari >= 4', 'ie >= 8', 'opera >= 12', 'ios >= 6', 'android >= 4']
    }
};


/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});*/




elixir(function(mix) {
    mix.sass('mainFront.sass', 'public/css/front/style.css');
    
});