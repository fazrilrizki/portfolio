/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      margin: {
        '19' : '4rem',
        '21' : '6rem',
        '22' : '7rem',
        '23' : '8rem',
      }
    },
  },
  plugins: [require("tw-elements/dist/plugin.cjs")],
}

