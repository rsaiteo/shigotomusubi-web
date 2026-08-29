/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./inc/**/*.php",
    "./template-parts/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        brand: '#922616',
        ink: '#1c1714',
        body: '#44474e',
        cream: '#fbf8f2',
        paper: '#fdfaf5',
        card: '#fdfcfb',
        beige: '#e8e0d2',
        beigelight: '#f5f0e8',
        footerdark: '#1e1e1e',
      },
      fontFamily: {
        serif: ['"Noto Serif JP"', 'serif'],
        sans: ['"Noto Sans JP"', '"Yu Gothic"', '"Hiragino Sans"', 'sans-serif'],
        yu: ['"Yu Gothic"', '"Noto Sans JP"', '"Hiragino Sans"', 'sans-serif'],
        roboto: ['"Roboto"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
