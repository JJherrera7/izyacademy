/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php, js}"],
  theme: {
    extend: {
      screens: {
        mn: "600px"
      },
      colors: {
        primary: "#1D3A6C",
      },
    },
  },
  plugins: [],
};
