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
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '2rem',
        sm: '3rem',
        lg: '5rem',
        xl: '6rem',
        '2xl': '7rem',
      },
    }
  },
  plugins: [],
}
