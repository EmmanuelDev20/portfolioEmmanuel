const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', 'sans-serif'],
            },
            colors: {
              transparent: 'transparent',
              current: 'currentColor',
              'white': '#ffffff',
              'darkBlue': '#021D33',
              'lightBlue': '#02345C',
              'redOne': '#E71D36',
              'gray': '#AAAAAA',
              'grayBar': '#C4C4C4',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
