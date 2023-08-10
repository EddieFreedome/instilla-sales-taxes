/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {

      maxWidth: {
        '1/4':'25%',
        '2/4':'50%',
        '3/4':'75%',
        '4/4':'100%',
      },

      colors: {
        'instilla': '#08c6c0'
      }
    },
  },
  plugins: [],
}

