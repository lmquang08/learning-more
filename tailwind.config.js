module.exports = {
  // important: true,
  mode: 'jit',
  purge: {
    enabled: true,
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        slate: {
          200: '#F1F2F7',
          700: '#062759',
        },
        zinc: {
          300: '#F7F7F7',
          400: '#D9D9D9',
        },
        gray: {
          350: 'var(--border-gray-350)',
          500: '#666666',
          400: '#CDCEE0',
          200: '#EAEAEA',
          50: '#F8F8F8',
          600: '#DFE3E9',
        },
        blue: {
          400: '#062759',
          500: '#1370E3',
          600: '#2B70E3',
          700: '#0F3774',
        },
        orange: {
          300: '#FC601D',
          400: '#FD601D',
        },
      },
      boxShadow: {
        md: '0 3px 10px rgba(0, 0, 0, 0.16)',
      },
      container: {
        center: true,
        padding: '1rem',
        screens: {
          sm: '540px',
          md: '720px',
          lg: '930px',
          xl: '1040px',
        },
      },
      backgroundImage: {
        ai: "url('/images/background/bg_ai.png')",
        ai02: "url('/images/background/bg_ai02.png')",
      },
      backgroundSize: {
        full: '100% 100%',
        banner01sizeOnSp: '150% 100%',
      },
      backgroundPosition: {
        banner01OnSp: 'right -50px top',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    // require('@themesberg/flowbite/plugin'),
    require('daisyui'),
    require('@tailwindcss/line-clamp'),
  ],
  daisyui: {
    themes: [
      {
        light: {
          primary: '#1370E3',
          'primary-focus': '#0b5fc7',
          'primary-content': '#fff',
          secondary: '#f000b8',
          'secondary-focus': '#bd0091',
          'secondary-content': '#fff',
          accent: '#37cdbe',
          'accent-focus': '#2aa79b',
          'accent-content': '#fff',
          neutral: '#000',
          'neutral-focus': '#2a2e37',
          'neutral-content': '#fff',
          'base-100': '#fff',
          'base-200': '#f9fafb',
          'base-300': '#d1d5db',
          'base-content': '#1f2937',
          info: '#2094f3',
          success: '#009485',
          warning: '#ff9900',
          error: '#ff5724',
          '--rounded-btn': '0.375rem',
        },
      },
    ],
  },
}
