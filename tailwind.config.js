/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./resources/**/*.blade.php",
    ],
    theme: {
        fontFamily: {
            Primary: "Poppins",
            Secondary: "DM Sans"
        },
        extend: {
            colors: {
                primary: '#393E46',
                secondary: '#929AAB'
            }
        },
    },
    plugins: [
        // require('@tailwindcss/ui'),
    ],
};
