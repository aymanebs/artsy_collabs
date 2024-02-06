import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
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
                pri: {
                    500: "#9d9d9c",
                },
                sec: {
                    100: "#f1f1f1",
                    200: "#ccc",
                    300: "#777",
                    400: "#333",
                    800: "#211F1D"
                },
                white: "#fff",
                green: "#3FDBA9",
                blue: "#124297",
                yellow: "#FFB13C",
            },
        },

    },

    plugins: [forms],



};
