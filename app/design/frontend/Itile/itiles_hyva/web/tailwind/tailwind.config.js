const { spacing } = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const hyvaModules = require('@hyva-themes/hyva-modules');

// Design tokens extracted from Figma (adjust hex values to match Figma exports)
const tokens = {
  colors: {
    brand: {
      DEFAULT: '#111827', // dark brand (logo text)
      accent: '#10b981',  // green for search button
      sale: '#f97316',    // orange for sale badge
      banner: '#bbf7d0'   // light green banner
    },
    neutral: {
      50: '#ffffff',
      100: '#f8fafc',
      200: '#eef2ff',
      300: '#e5e7eb',
      400: '#9ca3af',
      700: '#374151',
      800: '#111827'
    }
  },
  fontFamily: {
    sans: ['Inter', 'Segoe UI', 'Helvetica Neue', 'Arial', 'sans-serif']
  },
  spacing: {
    '72': '18rem',
    '84': '21rem'
  },
  borderRadius: {
    sm: '0.125rem',
    md: '0.375rem',
    lg: '0.5rem'
  },
  boxShadow: {
    header: '0 4px 12px rgba(2,6,23,0.06)'
  }
};

module.exports = hyvaModules.mergeTailwindConfig({
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px'
      },
      fontFamily: {
        sans: tokens.fontFamily.sans
      },
      colors: {
        primary: {
          lighter: colors.blue['300'],
          DEFAULT: colors.blue['800'],
          darker: colors.blue['900']
        },
        brand: tokens.colors.brand,
        neutral: tokens.colors.neutral
      },
      spacing: {
        ...spacing,
        ...tokens.spacing
      },
      borderRadius: {
        ...tokens.borderRadius
      },
      boxShadow: {
        ...tokens.boxShadow
      },
      minHeight: {
        a11y: spacing['11'],
        'screen-25': '25vh',
        'screen-50': '50vh',
        'screen-75': '75vh'
      },
      maxHeight: {
        'screen-25': '25vh',
        'screen-50': '50vh',
        'screen-75': '75vh'
      },
      container: {
        center: true,
        padding: spacing['6']
      }
    }
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
  content: [
    // Tema iTiles Hyvä
    '/var/www/magento248/app/design/frontend/Itile/itiles_hyva/**/*.phtml',
    '/var/www/magento248/app/design/frontend/Itile/itiles_hyva/**/layout/**/*.xml',
    '/var/www/magento248/app/design/frontend/Itile/itiles_hyva/**/page_layout/override/base/*.xml',
    // Hyvä Default (vendor)
    '/var/www/magento248/vendor/hyva-themes/magento2-default-theme/**/*.phtml',
    '/var/www/magento248/vendor/hyva-themes/magento2-default-theme/**/layout/**/*.xml',
    '/var/www/magento248/vendor/hyva-themes/magento2-default-theme/**/page_layout/override/base/*.xml',
    // Hyvä UI (vendor)
    '/var/www/magento248/vendor/hyva-themes/hyva-ui/components/**/*.phtml',
    '/var/www/magento248/vendor/hyva-themes/hyva-ui/components/**/src/**/layout/*.xml'
  ]
});
