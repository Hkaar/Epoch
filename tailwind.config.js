/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      container: {
        padding: "1rem",
        center: true,
      },
      colors: {
        primary: "#071952",
        secondary: "#153494",
        tertiary: "#2451DB",
      }
    },
  },
  plugins: [],
}

