import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                robotoMono: ['Roboto Mono', 'monospace']
            },
            colors: {
                background: '#34353A',
                gradientBackground: '#3b3c41',
                title: '#FFD26E',
                border: '#2e3035',
            },
            screens: {
                'phone': '360px',
            }
        },
    },
    plugins: [],
};
