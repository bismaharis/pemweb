/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js}'],
  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter"],
      },
      colors: {
        primary: '#704AF2',
        dark: '#3D3D3D',
      }
    },
  },
  plugins: [],
}

