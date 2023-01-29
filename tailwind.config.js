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
                gradienthover: "#FDA085",
                Via: "#FFA800",
                bgTopProducs: "#F9F9E0",
            },
            animation: {
                "spin-slow": "bounce 1.5s linear infinite",
            },
        },
        fontFamily: {
            custom: ["Montserrat", "sans-serif"],
        },
    },
    plugins: [require("flowbite/plugin")],
};
