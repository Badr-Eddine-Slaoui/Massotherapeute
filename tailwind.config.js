/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
              'xs': '320px',
            }
        },
        backgroundImage: {
            'HomeBg': "url('/public/Images/massotherapie.jpg')",
        },
    },
    plugins: [],
}
