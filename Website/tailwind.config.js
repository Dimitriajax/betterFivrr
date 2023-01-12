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
            colors: {
                pink: '#F1A1EE',
                purple: '#2B163B',
                hotpink: '#EC49C0',
                dark: '#101010',
                lightgrey: '#D2D2D2',
                grey: '#949090',
                blue: '#1E69E6'
            },
            screens: {
                'sm': '481px',

                'md': '680px',

                'lg': '1024px',

                'xl': '1280px',

                '2xl': '1536px',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
