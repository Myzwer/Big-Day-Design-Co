module.exports = {
  /*
   * This project now uses v3 of Tailwind, if you don't know what that means, then don't worry about it.
   * If you're familiar with the way a previous version worked, Tailwind no longer purges CSS, rather it uses a
   * new feature called JIT (just in time) to call the CSS as needed as opposed to purging after the fact.
   *
   * More information: https://tailwindcss.com/blog/tailwindcss-v3
   */
  content: ["*.php", "./assets/src/js/*.js"],
  theme: {
    colors: {
      screens: {
        sm: "39.9375em",
        // => @media (min-width: 640px) { ... }

        md: "63.9375em",
        // => @media (min-width: 768px) { ... }

        lg: "64em",
        // => @media (min-width: 1024px) { ... }

        xl: "74.9375em",
        // => @media (min-width: 1280px) { ... }
      },
      transparent: "transparent",
      current: "currentColor",
      /* How to Add custom Colors
       * Give your color a name, make it something that makes sense.
       * If you aren't going to use the colors below, delete them.
       *
       * Default is the normal base color.
       * Light / Dark are variants within the same palette
       * Classes are named text-CLASSNAME
       *
       * https://tailwindcss.com/docs/customizing-colors#custom-colors
       * */
      white: {
        DEFAULT: "#eae5df",
      },
      black: {
        DEFAULT: "#333333",
      },
      charcoal: {
        DEFAULT: "#333333",
      },
      purple: {
        DEFAULT: "#686aa8",
        hover: "#5b5ead",
      },
      blue: {
        DEFAULT: "#b9c8e7",
        hover: "#93a9ce",
      },
      rose: {
        DEFAULT: "#8a437d",
        hover: "#752d67",
      },
      tan: {
        DEFAULT: "#eae5df",
        gradient: "#DFD4C7",
      },
    },
  },
  plugins: [],
};
