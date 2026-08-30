/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./inc/**/*.php",
    "./template-parts/**/*.php",
    "./js/**/*.js",
  ],
  // Contact Form 7 のフォーム内容(DB管理でスキャン対象外)で使っているクラス
  safelist: [
    "flex", "flex-col", "sm:flex-row", "gap-1", "gap-2", "gap-2.5", "gap-3", "gap-4", "gap-8", "items-center", "items-baseline",
    "font-sans", "font-yu", "text-xs", "text-sm", "text-base", "text-ink", "text-brand", "text-body",
    "tracking-wide", "leading-[1.8]", "whitespace-pre-line", "underline", "hover:opacity-80", "transition-opacity", "w-fit",
    "relative", "absolute", "pointer-events-none", "right-4", "top-1/2", "-translate-y-1/2",
    "bg-beigelight", "rounded-[3px]", "p-4", "py-5",
    "grid", "grid-cols-1", "sm:grid-cols-[160px_1fr]",
    "divide-y", "divide-beige", "border-t", "border-b", "border-beige",
    "sm:gap-4",
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
