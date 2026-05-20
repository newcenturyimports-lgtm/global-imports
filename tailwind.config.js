/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/View/Components/**/*.php',
        './app/Filament/**/*.php',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    red:    '#D81E1E',
                    'red-dark': '#A8121A',
                    green:  '#0F6B3B',
                    'green-dark': '#0A4F2B',
                    'green-deep': '#063621',
                    gold:   '#F5C518',
                    'gold-dark': '#C99C0F',
                },
                cream:  '#FAF6EE',
                sand:   '#E8DFC9',
                kraft:  '#D9C9A8',
                ink:    '#1A1410',
                'ink-soft': '#3F362E',
            },

            fontFamily: {
                display: ['Fraunces', 'ui-serif', 'Georgia', 'serif'],
                sans:    ['Inter', ...defaultTheme.fontFamily.sans],
                script:  ['Caveat', 'cursive'],
            },

            boxShadow: {
                card:   '0 6px 18px -8px rgba(26, 20, 16, 0.25)',
                'card-hover': '0 16px 36px -12px rgba(26, 20, 16, 0.35)',
                ribbon: '0 2px 0 0 rgba(168, 18, 26, 0.4)',
            },

            backgroundImage: {
                'kente-band': "url('/images/brand/kente-divider.svg')",
            },

            maxWidth: {
                '8xl': '88rem',
            },

            keyframes: {
                'fade-up': {
                    '0%': { opacity: '0', transform: 'translateY(8px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                marquee: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
            },
            animation: {
                'fade-up': 'fade-up 0.6s ease-out both',
                marquee:   'marquee 40s linear infinite',
            },
        },
    },

    plugins: [forms, typography],
};
