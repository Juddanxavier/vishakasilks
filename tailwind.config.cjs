module.exports = {
    content: [
        "../../**.php",
        "../../**/**.php",
        "./**.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            textColor: {
                skin: {
                    base: 'var(--color-text-base)',
                    muted: 'var(--color-text-muted)'
                }
            },
            backgroundColor: {
                skin: {
                    fill: 'var(--color-bg-fill)'
                }
            },
            herobutton: {
                skin: {
                    buttonfill: 'var(--color-button-hero)'
                }
            }
        }
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('flowbite/plugin'),
    ]
}