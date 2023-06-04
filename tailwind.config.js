const defaultTheme = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors');

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
                danger: colors.rose,
                primary:
                    {
                        900: '#4d5720',
                        800: '#5e6828',
                        700: '#6e792f',
                        600: '#7f8a37',
                        500: '#94B43B',
                        400: '#909b3f',
                        300: '#97be57',
                        200: '#9bc873',
                        100: '#9fcd8f',
                        50: '#a3d7ab'
                    },// valor en RGB
                success: colors.blue,
                warning: colors.yellow,
                'green-unal': {
                    DEFAULT: '#94B43B', // el color predeterminado, se puede omitir si deseas
                    'rgb': '148,180,59', // valor en RGB
                },
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],

};
