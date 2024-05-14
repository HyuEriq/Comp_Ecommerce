/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/Admin/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  daisyui: {
    themes: [],
  },
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
    require('daisyui'),
  ],
}

