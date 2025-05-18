const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        '/api/**/*.php'
    ],

    theme: {
        minWidth: {
            '1/19': '45%',
          },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

        },
    },

    plugins: [
      require('@tailwindcss/forms'), 
      require('@tailwindcss/typography'),
      require('tailwindcss'),
      require('autoprefixer')],

};