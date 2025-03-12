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
                sans: ["DM Sans", ...defaultTheme.fontFamily.sans],
                mono: ["DM Mono", ...defaultTheme.fontFamily.mono],
            },
            colors: {
                primary: "#FDFDFD",
                "primary-dark": "#E4E4E4",
                button: "#6762FF",
                neon: { 500: "#CEFF5F" },
                neutral: {900: "#111827"},
            },
            animation: {
                scroll: "scroll 15s linear infinite",
            },
            keyframes: {
                scroll: {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
            maskImage: {
                "fade-sides":
                    "linear-gradient(to right, transparent 0%, #000 10%, #000 90%, transparent 100%)",
            },
        },
    },

    plugins: [forms],
};
