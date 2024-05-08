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
    purge: {
        enabled: process.env.NODE_ENV === 'production',
        content: [
            "node_modules/preline/dist/*.js",
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
        ],
        options: {
            safelist: [], // Add any necessary safelist entries
        },
    },
    daisyui: {
        themes: false,
    },
};
