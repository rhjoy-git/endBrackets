import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                'inter': ['Inter', 'sans-serif'],
            },
            colors: {
                primary: "#FDFDFD",
                "primary-dark": "#E4E4E4",
                button: "#6762FF",
            },
        },
    },

    plugins: [forms],
};
