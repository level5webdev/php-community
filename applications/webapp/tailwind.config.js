/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
const palette = require("./palette");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: palette,
        },
    },
    fontFamily: {
        regular: ["RobotoRegular"],
        medium: ["RobotoMedium"],
        bold: ["RobotoBold"],
        black: ["RobotoBlack"],
        sans: [
            "ui-sans-serif",
            "system-ui",
            "-apple-system",
            "BlinkMacSystemFont",
            '"Segoe UI"',
            "Roboto",
            '"Helvetica Neue"',
            "Arial",
            '"Noto Sans"',
            "sans-serif",
            '"Apple Color Emoji"',
            '"Segoe UI Emoji"',
            '"Segoe UI Symbol"',
            '"Noto Color Emoji"',
        ],
        serif: [
            "ui-serif",
            "Georgia",
            "Cambria",
            '"Times New Roman"',
            "Times",
            "serif",
        ],
        mono: [
            "ui-monospace",
            "SFMono-Regular",
            "Menlo",
            "Monaco",
            "Consolas",
            '"Liberation Mono"',
            '"Courier New"',
            "monospace",
        ],
  },
    
    plugins: [],
};

