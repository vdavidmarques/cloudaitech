 /** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,php,js}',
    './components/**/*.{js,php}'
  ],
  theme: {
    colors: {
      white: '#fff',
      black: '#000',
      'gray-dark': "#131313",
      red: {
        DEFAULT: '#DF1C1A',
        light: '#F99594',
        dark: '#760604',
        ultradark: '#390000',
      },
      'image-effect': '#860706', 
      'image-effect-darker': '#2D0302', 

    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '1.5xl': '1440px',
      '2xl': '1536px',
    },
    extend: {

    },
    fontFamily: {
      'neuro': ['Neuro', "sans-serif"],
      'resamitz': ['Resamitz', "sans-serif"]
    },
  },
  variants: {},
  safelist: [
    'gap-x-16',
    'heading-xxs',
    'heading-xs',
    'heading-sm',
    'heading-md',
    'heading-lg',
    'heading-xl',
    'heading-2xl',
    'font-neuro',
    {pattern: /text-./},
  ],
  plugins: [
  ],
}

