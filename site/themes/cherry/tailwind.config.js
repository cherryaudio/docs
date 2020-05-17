module.exports = {
  theme: {
    aspectRatio: {
      none: 0,
      square: [1, 1],
      "16/9": [16, 9],
      "4/3": [4, 3],
      "21/9": [21, 9]
    },
    extend: {
      borderRadius: {
        'xl': '.7rem'
      },
      borderWidth: {
        default: '1px',
        '0': '0',
        '2': '2px',
        '4': '4px',
        '6': '6px',
      },
      colors: {
        yellow: {
          '500': '#ffe600',
          '600': '#E8D200',
          '700': '#e6cf00' // todo- bye bye
        },
        gray: {
          '100': '#f8f8f8',
          '200': '#e2e2e2',
          '300': '#b5b5b5',
          '400': '#888888',
          '500': '#5a5a5a', // mid gray
          '600': '#484848',
          '700': '#363636', // main text - jet gray
          '750': '#2d2d2d',
          '800': '#282828',
          '850': '#1f1f1f', // rasin black
          '900': '#1a1a1a',
          '950': '#171717'
        },
        'blue-gray': {
          '400': '#225d72',
          '500': '#394247',
        },
        cherry: '#ed1c24',
      },
      fill: {
        'red-500': '#ed1c24'
      },
      height: {
        '2/3-screen': '66vh'
      },
      maxWidth: {
        '64': '16rem'
      },
      minWidth: {
        "40": "10rem"
      },
      opacity: {
        "90": ".9"
      },
      spacing: {
        "96": "24rem",
        "128": "32rem",
        "192": "48rem",
      },
      zIndex: {
        "100": "100"
      }
    },
  },
  variants: {
    aspectRatio: ['responsive'],
    backgroundColor: ['responsive', 'hover', 'focus', 'active', 'disabled'],
    cursor: ['responsive', 'disabled'],
    fill: ['responsive', 'hover', 'focus', 'group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
  },
  plugins: [
    require('@tailwindcss/ui'),
    require("tailwindcss-responsive-embed"),
    require("tailwindcss-aspect-ratio"),
  ]
}
