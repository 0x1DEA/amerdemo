const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Archivo', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'pt': {
                    3517: '#C10016',
                    466: '#3F4443',
                    6020: '#E25800',
                    6200: '#B5B5AD',
                    6197: '#D7D9D2',
                    6183: '#798772',
                }
            },
            // colors: {
            //     'pt': {
            //         3517: '#3F4443',
            //         466: '#C10016',
            //         6020: '#E25800',
            //         6200: '#B5B5AD',
            //         6197: '#798772',
            //         6183: '#D7D9D2',
            //     }
            // },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
