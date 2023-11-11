/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
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
  plugins: [],
}

