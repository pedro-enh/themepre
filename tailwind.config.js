const colors = require('tailwindcss/colors');

const phoenixNeutral = {
    50: '#f0f0f5',
    100: '#e1e1e6',
    200: '#c3c3cc',
    300: '#a5a5b3',
    400: '#878799',
    500: '#696980',
    600: '#4b4b66',
    700: '#1e1e2e', // Borders
    800: '#12121a', // Cards
    900: '#0a0a0f', // Base background
};

const phoenixCyan = {
    50: '#e0faff',
    100: '#b3f0ff',
    200: '#80e6ff',
    300: '#4ddbff',
    400: '#1ad1ff',
    500: '#00d4ff', // Electric cyan
    600: '#00a8cc',
    700: '#007d99',
    800: '#005266',
    900: '#002733',
};

module.exports = {
    content: [
        './resources/scripts/**/*.{js,ts,tsx}',
    ],
    theme: {
        extend: {
            fontFamily: {
                header: ['"Inter"', '"Roboto"', 'system-ui', 'sans-serif'],
                sans: ['"Inter"', 'system-ui', 'sans-serif'],
                mono: ['"JetBrains Mono"', 'monospace'],
            },
            colors: {
                black: '#0a0a0f',
                primary: phoenixCyan,
                cyan: phoenixCyan,
                gray: phoenixNeutral,
                neutral: phoenixNeutral,
                success: colors.emerald,
                danger: colors.rose,
                warning: colors.amber,
                orange: colors.orange,
            },
            fontSize: {
                '2xs': '0.625rem',
            },
            transitionDuration: {
                250: '250ms',
            },
            borderColor: theme => ({
                default: theme('colors.neutral.700', 'currentColor'),
            }),
            boxShadow: {
                'glow': '0 0 15px rgba(0, 212, 255, 0.4)',
                'glow-lg': '0 0 25px rgba(0, 212, 255, 0.6)',
                'card': '0 4px 6px -1px rgba(0,0,0,0.3), 0 2px 4px -1px rgba(0,0,0,0.2)',
                'modal': '0 25px 50px -12px rgba(0,0,0,0.5)',
            },
            borderRadius: {
                'xl': '12px',
                '2xl': '16px',
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/forms')({
            strategy: 'class',
        }),
    ]
};
