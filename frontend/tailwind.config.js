/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],

  theme: {
    extend: {

      fontFamily: {
        opensauce: ['"Open Sauce One"', "sans-serif"],
      },

      colors: {
        primary: "#005c50",
        heroStart: "#0097B2",
        heroEnd: "#7ED957",
      },

      backgroundImage: {
        "hero-gradient": "linear-gradient(90deg,#0097B2,#7ED957)",
      },

    },
  },

  plugins: [],
};