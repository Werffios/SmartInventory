const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'green-unal': {
                    DEFAULT: '#94B43B', // el color predeterminado, se puede omitir si deseas
                    'rgb': '148,180,59', // valor en RGB
                },
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
