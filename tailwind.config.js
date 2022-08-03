module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  // theme: {
  //   extend: {},
  //   colors: {
  //     primary: '#0F6F54',
  //     secondary: '#F2C836'
  //   }
  // },
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    colors: {
      primary: '#0F6F54',
      secondary: '#F2C836',
      
      black: "#151719",
      white: "#FFFFFF",

      gray: {
        200: "#eceded",
        500: "#9ca9b3",
        600: "#2a2d32",
        700: "#33363a",
        800: "#25282c",
      },

      green: {
        300: "#73efcc",
        400: "#1cb68b",
      },
    },
    fontSize: {
      xs: "0.75rem",
      sm: "0.875rem",
      base: "1rem",
      lg: "1.125rem",
      xl: "1.25rem",
      "2xl": "1.5rem",
      "3xl": "1.875rem",
      "4xl": "2.25rem",
      "5xl": "3rem",
      "6xl": "4rem",
    },
  },  
  variants: {
    extend: {},
  },
  plugins: [
    require("tailwindcss-animatecss")({
      classes: ["animated", "fadeIn", "fadeInUp"],
    }),
    require('@tailwindcss/line-clamp'),
  ],
}
