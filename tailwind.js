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
                    'default': '#500b30'
                },
                challenger: {
                    'default': '#fd2849'
                },
                offwhite: {
                    'default': '#e1dece',
                    '400': '#ebe9df',
                    '500': '#e1dece'
                },
                link: {
                    'default': '#3182ce',
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
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
