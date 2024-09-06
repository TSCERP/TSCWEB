import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    theme: {
        extend: {
            colors: {
                'bg-main': '#290b50',
                "bg-secondary": "#F2F0F4",
                'text-main': '#D0A9F8',
                "border-main": "#E9DDF4",
                "text-primary": "#29282D",
                "bg-dark": "#290B50",
                "icon-main": "#D0A9F8",
                'bg-gray': "#F8F4F9",
                'gradient-start': 'rgba(41, 11, 80, 0)',
                'gradient-end': '#290B50',
                'border-gray': '#D1D5DB'
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(180deg, rgba(41, 11, 80, 0) 0%, #290B50 100%)',
            },
            scale: {
                '115': '1.15',
            }
        },
    },
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
