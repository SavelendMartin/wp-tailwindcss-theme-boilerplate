const colors = require('tailwindcss/colors')

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
},
purge: [
    './*.php',
    './templates/**/*.php',
    './build/js/**/*.js',
],
theme: {
    container: {
        padding: '1.5rem',
    },
    extend: {
        colors: {
            progressive: {
              DEFAULT: '#500b30'
            },
            challenger: {
              DEFAULT: '#fd2849'
            },
            offwhite: {
                DEFAULT: '#e1dece',
                '400': '#ebe9df',
                '500': '#e1dece'
            },
            restless: {
                DEFAULT: '#ffbf88'
            },
            inclusive: {
                DEFAULT: '#009b7d'
            },
            genuine: {
                DEFAULT: '#003d4c'
            },
            link: {
              DEFAULT: '#3182ce',
                'hover': '#63b3ed',
            }
        },
        fontSize: {
            xxs: '0.675rem',
        },
        lineHeight: {
            tighter: '1.125',
        },
    },
    fontFamily: {
        sans: [
            'Blinker',
            'system-ui',
            '-apple-system',
            'BlinkMacSystemFont',
            '"Segoe UI"',
            'Roboto',
            '"Helvetica Neue"',
            'Arial',
            '"Noto Sans"',
            'sans-serif',
            '"Apple Color Emoji"',
            '"Segoe UI Emoji"',
            '"Segoe UI Symbol"',
            '"Noto Color Emoji"',
        ],
        serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
        mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
    },
},
variants: {
    textColor: ['responsive', 'hover', 'focus', 'visited'],
},
plugins: [
    require('@tailwindcss/typography'),
    ({addUtilities}) => {
        const utils = {
            '.translate-x-half': {
                transform: 'translateX(50%)',
            },
        };
        addUtilities(utils, ['responsive'])
    }
]
}
