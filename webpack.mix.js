const mix = require('laravel-mix');

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.js('node_modules/dayjs/dayjs.min.js', 'public/js/dayjs.min.js');
