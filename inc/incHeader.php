<!-- ============ NAV ============ -->
<header class="fixed top-0 inset-x-0 z-40 bg-[#f5f0e8]/95 backdrop-blur-sm border-b border-black/5">
  <div class="max-w-[1280px] mx-auto flex items-center justify-between h-16 px-5 lg:px-0">
    <a href="<?php echo esc_url(home_url('/')); ?>#top" class="flex items-center gap-2">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-mark.svg'); ?>" alt="" class="size-9">
      <span class="flex flex-col gap-1">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-wordmark.svg'); ?>" alt="京都しごとむすび" class="h-[17px] w-auto">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-tagline.svg'); ?>" alt="あなたと京都の企業のご縁を結ぶ" class="h-[7px] w-auto">
      </span>
    </a>

    <nav class="hidden lg:flex items-center gap-8">
      <a href="<?php echo esc_url(home_url('/')); ?>#promise" class="text-sm text-ink tracking-wide hover:text-brand transition-colors">京都しごとむすびの約束</a>
      <a href="<?php echo esc_url(home_url('/')); ?>#feature" class="text-sm text-ink tracking-wide hover:text-brand transition-colors">京都しごとむすびの特徴</a>
      <a href="<?php echo esc_url(home_url('/')); ?>#supporter" class="text-sm text-ink tracking-wide hover:text-brand transition-colors">サポーター</a>
      <a href="<?php echo esc_url(home_url('/')); ?>#flow" class="text-sm text-ink tracking-wide hover:text-brand transition-colors">ご縁を結ぶまでの流れ</a>
      <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="bg-brand text-cream text-sm tracking-wider px-6 py-2 whitespace-nowrap hover:opacity-90 transition-opacity">無料相談</a>
    </nav>

    <button id="hamburgerBtn" class="lg:hidden flex flex-col gap-1.5 p-2" aria-label="メニュー">
      <span class="hb-line w-6 h-0.5 bg-ink block transition-transform"></span>
      <span class="hb-line w-6 h-0.5 bg-ink block transition-opacity"></span>
      <span class="hb-line w-6 h-0.5 bg-ink block transition-transform"></span>
    </button>
  </div>
</header>

<div id="mobileMenu" class="lg:hidden fixed inset-0 z-30 bg-[#f5f0e8] flex flex-col items-center justify-center gap-8 -translate-y-full transition-transform duration-300">
  <a href="<?php echo esc_url(home_url('/')); ?>#promise" class="text-lg text-ink">京都しごとむすびの約束</a>
  <a href="<?php echo esc_url(home_url('/')); ?>#feature" class="text-lg text-ink">京都しごとむすびの特徴</a>
  <a href="<?php echo esc_url(home_url('/')); ?>#supporter" class="text-lg text-ink">サポーター</a>
  <a href="<?php echo esc_url(home_url('/')); ?>#flow" class="text-lg text-ink">ご縁を結ぶまでの流れ</a>
  <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="bg-brand text-cream text-base tracking-wider px-8 py-3">無料相談</a>
</div>
