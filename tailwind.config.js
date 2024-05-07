/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "node_modules/preline/dist/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {},
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("daisyui"),
        require("preline/plugin"),
    ],
    daisyui: {
        themes: false,
    },
};
