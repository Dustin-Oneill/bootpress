/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',  // Scan all PHP files in the root and subdirectories
    './src/*.css',  // Scan all CSS files in the src folder
    './js/**/*.js',  // Scan JavaScript files only in your js folder
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
