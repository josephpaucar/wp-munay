/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    fontFamily: {
      heebo: ["Heebo", "sans-serif"],
    },
    extend: {
      colors: {
        blue: "#464A91",
        purple: "#6E2A89",
        red: "#D21E3B",
        orange: "#F07430",
        yellow: "#F2AC35",
        white: "#EEEEF7",
        black: "#191A34",
      },
    },
  },
  plugins: [],
};
