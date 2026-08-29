<!-- ============ HERO ============ -->
<header id="top" class="relative">
  <!-- Mobile hero -->
  <div class="md:hidden relative bg-beigelight px-6 pt-24 pb-12 min-h-screen flex flex-col justify-center overflow-hidden">
    <img src="<?php echo esc_url($img . 'hero-mobile-arc.svg'); ?>" alt="" class="absolute -left-12 top-[60px] w-[360px] max-w-none h-auto pointer-events-none">
    <img src="<?php echo esc_url($img . 'hero-mobile-skyline.svg'); ?>" alt="" class="absolute inset-x-0 bottom-0 w-full h-auto pointer-events-none">
    <div class="relative flex flex-col items-center gap-8">
      <img src="<?php echo esc_url($img . 'hero-mobile-photo.jpg'); ?>" alt="" class="w-full max-w-[322px] aspect-[322/410] object-cover shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)]">
      <div class="flex flex-col items-center gap-2 text-center font-serif text-ink tracking-[0.1em] leading-[1.8]">
        <p class="text-4xl">「京都で働きたい」</p>
        <p class="text-2xl">を叶える。</p>
      </div>
      <div class="w-full flex flex-col gap-4">
        <p class="font-serif text-base text-ink tracking-[0.1em] text-center">あなたに合った「優良企業」を紹介します</p>
        <div class="font-yu text-xs tracking-wide leading-[2] text-ink">
          <p>たくさんの企業の紹介ではなく、</p>
          <p>あなたに合った企業との出会いを届けること。</p>
          <p>求職者一人ひとりと向き合うことを大切に、</p>
          <p>京都の優良企業とあなたを、価値あるご縁で結びます。</p>
        </div>
      </div>
      <a href="<?php echo $apply_url; ?>" class="w-full bg-brand text-cream text-base text-center tracking-wider px-10 py-4 hover:opacity-90 transition-opacity">
        無料で相談する
      </a>
    </div>
  </div>

  <!-- Desktop hero -->
  <div class="hidden md:flex relative min-h-screen items-center overflow-hidden">
    <img src="<?php echo esc_url($img . 'hero-visual.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover object-[70%_40%]">
    <div class="relative z-10 w-full max-w-[1280px] mx-auto px-5">
      <div class="max-w-[650px] flex flex-col gap-14">
        <div class="flex flex-col gap-1 font-serif text-ink tracking-[0.1em] leading-[1.8]">
          <div class="flex flex-wrap items-end gap-1">
            <p class="text-5xl">「京都で働きたい」</p>
            <p class="text-4xl">を叶える。</p>
          </div>
          <p class="text-3xl whitespace-nowrap">あなたに合った「優良企業」を紹介します</p>
        </div>
        <div class="font-yu text-lg tracking-wide leading-[2] text-ink">
          <p>たくさんの企業の紹介ではなく、</p>
          <p>あなたに合った企業との出会いを届けること。</p>
          <p>求職者一人ひとりと向き合うことを大切に、</p>
          <p>京都の優良企業とあなたを、価値あるご縁で結びます。</p>
        </div>
        <a href="<?php echo $apply_url; ?>" class="bg-brand text-cream text-lg tracking-wider px-10 py-4 w-fit hover:opacity-90 transition-opacity">
          無料で相談する
        </a>
      </div>
    </div>
  </div>
</header>
