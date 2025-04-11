import preline from 'preline/plugin';

import tailwindTypography from '@tailwindcss/typography';
import tailwindForms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class",
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
    tailwindForms,
    tailwindTypography,
  ],
}

