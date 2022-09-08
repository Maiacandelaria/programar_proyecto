const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
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

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

   
   // desactivar la clase container que trae wailwind ya que tiene otras medidas que las nuestra
    corePlugins: {
        // ...
       container: false,
      },


    plugins: [require('@tailwindcss/ui')],
};

module.exports = {
    //...
  
    // add daisyUI plugin
    plugins: [require("daisyui")],
  
    // daisyUI config (optional)
    daisyui: {
      styled: true,
      themes: true,
      base: true,
      utils: true,
      logs: true,
      rtl: false,
      prefix: "",
      darkTheme: "dark",
    },
  }