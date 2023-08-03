const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: {
                'gold'       : '#B89761',
                'darkblue'   : '#063579',
                'davygray'  : '#565555',
                'babypowder' : '#FAF8F4'
            },
            fontFamily: {
                'lora'      : ['Lora', 'serif'],
                'poppins'   : ['Poppins', 'sans-serif']
            },


        },
        screens: {
            'xs': '320px',
            'sm': '480px',
            'md': '768px',
            'lg': '1023px',
            'xl': '1280px',
            '2xl': '1440px',
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
