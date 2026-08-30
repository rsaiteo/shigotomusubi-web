<!-- ============ ENTRY CTA ============ -->
<section id="entry" class="relative py-16 md:py-20 px-5 overflow-hidden">
  <div class="absolute inset-0 bg-white"></div>
  <img src="<?php echo esc_url($img . 'cta-bg.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-60">
  <img src="<?php echo esc_url($img . 'cta-line.svg'); ?>" alt="" class="absolute left-[-7%] top-[2%] w-[80%] h-auto pointer-events-none opacity-80 hidden md:block">
  <div class="relative max-w-[1024px] mx-auto bg-white/60 px-6 sm:px-10 md:px-[60px] py-10 md:py-[60px] flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="flex flex-col items-center md:items-start gap-4 md:gap-6 text-center md:text-left">
      <div class="flex flex-col gap-3 md:gap-4">
        <p class="font-sans text-brand text-sm tracking-wide">Entry</p>
        <p class="font-serif text-2xl md:text-3xl text-ink tracking-wide">京都の企業とあなたのご縁を結ぶ</p>
      </div>
      <p class="font-yu text-base md:text-lg text-ink tracking-wide">まずはご気軽にご相談ください。</p>
    </div>
    <a href="<?php echo $entry_url; ?>" class="bg-brand text-cream text-base md:text-lg tracking-wider px-10 py-4 whitespace-nowrap hover:opacity-90 transition-opacity">
      無料で相談する
    </a>
  </div>
</section>
