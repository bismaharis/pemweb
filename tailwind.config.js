/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js,php}'],
  theme: {
    container: {
      padding: {
        DEFAULT: '1px',
      }
    },
    screens:{
      sm: '640px',
      md: '768px',
      lg: '960px',
      xl: '1200px',
    },
    backgroundImage:{
      hero: 'url(/public/assets/images/1teamwork.jpg)',
    },
    extend: {
      fontFamily: {
        inter: ["Inter"],
      },
      colors: {
        primary: '#704AF2',
        dark: '#3D3D3D',
      }, 
      listStyleImage: {
        facebook: 'url("../public/assets/images/Facebook.jpg")',
      },
    },
  },
  plugins: [],
}

