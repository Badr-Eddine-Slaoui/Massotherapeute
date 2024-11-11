/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
      backgroundImage: {
        'HomeBg': "url('/public/Images/massotherapie.jpg')",
      },
    },
    plugins: [],
}
