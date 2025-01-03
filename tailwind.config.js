import { plugin } from 'postcss';
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
                secondBackground: '#2f3035',
                gradientBackground: '#3b3c41',
                title: '#FFD26E',
                hoverTitle: '#ffda86',
                border: '#2e3035',
            },
            screens: {
                'phone': '360px',
            },
        },
    },
    plugins: [],
};
