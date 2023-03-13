/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#652FD9'
      }
    },
    fontFamily: {
      'body': ['"Work Sans"', 'system-ui', 'sans-serif'],
      'display': ['Poppins', 'system-ui', 'sans-serif']
    }
  },
  plugins: [],
}
