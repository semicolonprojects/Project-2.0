/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                button: "#22DB66",
                buttonhover: "#12C554",
                background: "#FFC525",
            },
        },
        fontFamily: {
            custom: ["Montserrat", "sans-serif"],
        },
    },
    plugins: [require("flowbite/plugin")],
};
