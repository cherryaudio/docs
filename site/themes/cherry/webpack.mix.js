const mix = require('laravel-mix');

mix.postCss('css/app.css', 'css/cherry.css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested')
]);
