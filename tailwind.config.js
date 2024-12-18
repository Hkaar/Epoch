import preline from 'preline/plugin';
import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "selector",
  mode: "jit",
  presets: [preset],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    'node_modules/preline/dist/*.js',
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
        'twitter': "#1d9df0",
      },
      fontFamily: {
        'figtree': ['Figtree', 'sans-ui'],
      }
    },
  },
  plugins: [
    preline,
  ],
}

