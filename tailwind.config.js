/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                black: "#333333",
                blackSec: "#666666",
                border: "#DADADA",
            },
            fontFamily: {
                base: "Inter, sans-serif",
            },
            backgroundImage: {
                iconSearch: "url('/public/assets/icons/search.png')",
            },
        },
    },
    plugins: [],
};
