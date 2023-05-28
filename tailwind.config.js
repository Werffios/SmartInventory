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
                primary: colors.blue, // valor en RGB
                success: colors.green,
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
