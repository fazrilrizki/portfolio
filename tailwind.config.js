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
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      color: {
        'primary' : '#0891b2',
        'secondary' : '#64748b',
      },
      margin: {
        '19' : '4rem',
        '21' : '6rem',
        '22' : '7rem',
        '23' : '8rem',
      },
      screens: {
        '2xl': '1320px',
      }
    },
  },
  plugins: [require("tw-elements/dist/plugin.cjs")],
}

