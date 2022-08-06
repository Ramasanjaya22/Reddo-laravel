const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("daisyui")
    ],

    daisyui: {
        themes: [
          {
            mytheme: {
            
   "primary": "#5b21b6",
            
   "secondary": "#CDC4E1",
            
   "accent": "#fff",
            
   "neutral": "#000",
            
   "base-100": "#F4F4FA",
            
   "info": "#009BD6",
            
   "success": "#456CFA",
            
   "warning": "#E3B716",
            
   "error": "#E0513E",
            },
          },
        ],
      },
};
