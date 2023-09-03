const mix = require('laravel-mix');
const Alpine = require('alpinejs');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      //
   ])
   .webpackConfig({
       plugins: [new Alpine()],
   });
