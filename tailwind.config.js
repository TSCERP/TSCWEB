import preset from './vendor/filament/support/tailwind.config.preset'
const colors = require('tailwindcss/colors')
const { fontFamily } = require('tailwindcss/defaultTheme')

module.exports = {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.purple,
                success: colors.green,
                warning: colors.amber,
                cream: '#FFF9F5',
                butter: '#d8c9ef',
                midnight: '#0F033A',
                evening: '#251A4D',
                merino: '#F2E7DD',
                hurricane: '#807575',
                dolphin: '#6C6489',
                'burnt-dolphin': '#454059',
                'peach-orange': '#aa97ff',
                'seashell-peach': '#FFF0E8',
                'dawn-pink': '#F1E5E4',
                salmon: '#c593ef',
                'fair-pink': '#FFEAE4',
                'bg-main': '#290b50',
                "bg-secondary": "#F2F0F4",
                'text-main': '#D0A9F8',
                // "border-main": "#E9DDF4",
                "border-main": "#5C3C97",
                "text-primary": "#29282D",
                "bg-dark": "#290B50",
                "icon-main": "#D0A9F8",
                'bg-gray': "#F8F4F9",
                'gradient-start': 'rgba(41, 11, 80, 0)',
                'gradient-end': '#290B50',
                'border-gray': '#D1D5DB',
                'bg-btn': '#6E409D',
                'primary-gt': '#663399',      // Grant Thornton Purple
                'secondary-gt': '#8B5FBF',    // Light Purple
                accent: '#FF6B35',            // Orange accent
                gtPurple: '#663399',
                gtLightPurple: '#8B5FBF',
                gtDarkPurple: '#4A1A5C',
                aka: '#C62D42',               // Traditional Japanese Red
                kin: '#E6B422',               // Japanese Gold
                ai: '#002FA7',                // Traditional Indigo Blue
                midori: '#769164',            // Japanese Green
                sakura: '#FFCCCB',            // Cherry Blossom Pink
                sumi: '#2C2C2C',              // Ink Black
                shiro: '#FEFEFE',             // Pure White
                washi: '#F5F3F0',             // Paper White
                accent: '#06b6d4',
                aiPurple: '#7c3aed',
                aiBlue: '#0ea5e9',
                aiGreen: '#10b981',
                aiOrange: '#f59e0b',
                'ai-primary': '#0EA5E9',
                'ai-secondary': '#3B82F6',
                'ai-accent': '#06B6D4',
                'ai-purple': '#8B5CF6',
                'ai-pink': '#EC4899',
                'ai-green': '#10B981',
                'dark-bg': '#0F172A',
                'dark-card': '#1E293B',
                accent: '#06B6D4',
                success: '#10B981',
                warning: '#F59E0B',
                danger: '#EF4444',
            },
            fontFamily: {
                cursive: ['Kalam', ...fontFamily.serif],
                heading: ['Lexend', ...fontFamily.sans],
                mono: ['JetBrains Mono', ...fontFamily.sans],
                sans: ['DM Sans', ...fontFamily.sans],
                vietnam: ['Be Vietnam Pro', ...fontFamily.sans],
                'roboto-mono': ['Roboto Mono', ...fontFamily.sans],
            },
            maxWidth: {
                '8xl': '88rem',
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        a: {
                            '&:hover': {
                                color: theme('colors.primary.600'),
                            },
                            '&:focus': {
                                color: theme('colors.primary.600'),
                            },
                        },
                        blockquote: {
                            fontStyle: 'normal',
                        },
                        'blockquote p:first-of-type::before': {
                            content: 'none',
                        },
                        'blockquote p:first-of-type::after': {
                            content: 'none',
                        },
                        code: {
                            fontWeight: theme('fontWeight.normal'),
                        },
                    },
                },
                invert: {
                    css: {
                        a: {
                            '&:hover': {
                                color: theme('colors.primary.500'),
                            },
                            '&:focus': {
                                color: theme('colors.primary.500'),
                            },
                        },
                    },
                },
            }),
            zIndex: {
                '-1': '-1',
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(180deg, rgba(41, 11, 80, 0) 0%, #290B50 100%)',
                'gradient-gt': 'linear-gradient(135deg, #5c3c97 0%, #8B5FBF 50%, #B794D6 100%)',
                'grid-pattern': "url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><defs><pattern id='grid' width='20' height='20' patternUnits='userSpaceOnUse'><path d='M 20 0 L 0 0 0 20' fill='none' stroke='white' stroke-width='1' opacity='0.1'/></pattern></defs><rect width='100' height='100' fill='url(%23grid)'/></svg>\")",
                'hero-pattern-1': "url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%236633991a' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
                'gradient-japan': 'linear-gradient(135deg, #FEFEFE 0%, #F5F3F0 50%, #FFCCCB 100%)',
                'gradient-sakura': 'linear-gradient(135deg, #FFCCCB 0%, #F5F3F0 100%)',
                'torii-gate': 'linear-gradient(135deg, #C62D42 0%, #A52334 100%)',
                'lantern': 'linear-gradient(135deg, #E6B422 0%, #C19A1E 100%)',
            },
            scale: {
                '115': '1.15',
                '65': '0.65',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                slideIn: {
                    'from': { opacity: '0', transform: 'translateX(-50px)' },
                    'to': { opacity: '1', transform: 'translateX(0)' }
                },
                fadeIn: {
                    'from': { opacity: '0' },
                    'to': { opacity: '1' }
                },
                rotate: {
                    'from': { transform: 'rotate(0deg)' },
                    'to': { transform: 'rotate(360deg)' }
                }
            },
            animation: {
                float: 'float 6s ease-in-out infinite',
                'float-delay': 'float 6s ease-in-out 2s infinite',
                'pulse-slow': 'pulse 4s ease-in-out infinite',
                'slide-in': 'slideIn 1s ease-out',
                'fade-in': 'fadeIn 1.5s ease-out',
                'rotate-slow': 'rotate 20s linear infinite',
            },
            screens: {
                'phone': '480px',
                'smallPhone': '400px',
                'tablet2': '900px',
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
    darkMode: 'class',
}
