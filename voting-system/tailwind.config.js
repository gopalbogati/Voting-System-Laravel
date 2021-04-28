const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
module.exports = {
    purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
              'bg-gray-background':'#f7f8fc',
              'blue':'#0000FF',
              'blue-hover':'#2879bd',
               'green':'##00FF00',
              'yellow':'#FFFF00',
              'red':'#ec454f',
               'purple':'##800080',
                black: colors.black,
                white: colors.white,
                gray: colors.coolGray,
                red: colors.red,
                yellow: colors.amber,
                green: colors.emerald,
            },
            maxWidth:{
                custom:'62.5rem',

            },
            spacing:{
                70:'17.5rem',
                175:'43.75rem',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
