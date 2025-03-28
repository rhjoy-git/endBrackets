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
                primary: "#FFFFFF",
                button: "#6762FF",
                'head-color': "#374151",
                'content-color': "#111827",
                'faq-color': "#4B5563",
                'bg-neon': "#CEFF5F",
                'bg-cart': "#F3F4F6",
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
