<!-- ============ FOOTER ============ -->
<footer class="bg-footerdark border-t border-white/[0.08] pt-12 pb-6">
  <div class="max-w-[1152px] mx-auto px-6 flex flex-col gap-10">
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-10">
      <div class="flex flex-col gap-6">
        <a href="<?php echo esc_url(home_url('/')); ?>#top" class="flex items-center gap-2">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/footer-mark.svg'); ?>" alt="" class="size-9">
          <span class="flex flex-col gap-1.5">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/footer-wordmark.svg'); ?>" alt="京都しごとむすび" class="h-[17px] w-auto">
            <span class="text-white text-[10px] tracking-wide">あなたと京都の企業のご縁を結ぶ</span>
          </span>
        </a>
        <div class="flex flex-col gap-0.5 text-sm text-white/40">
          <p class="font-bold">運営会社</p>
          <p>京都WORKS LAB</p>
          <p>京都市下京区松原通烏丸西入玉津島町294番地</p>
          <p>コモンルーム四条烏丸415</p>
        </div>
      </div>

      <div class="flex flex-col items-start lg:items-end gap-8">
        <nav class="flex flex-wrap gap-6 lg:gap-8 text-sm text-white/55">
          <a href="<?php echo esc_url(home_url('/')); ?>#promise" class="hover:text-white transition-colors">京都しごとむすびの約束</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#feature" class="hover:text-white transition-colors">京都しごとむすびの特徴</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#supporter" class="hover:text-white transition-colors">サポーター</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#flow" class="hover:text-white transition-colors">ご縁を結ぶまでの流れ</a>
        </nav>
        <a href="https://kyoto-workslab.co.jp/" target="_blank" rel="noopener" class="bg-[#ddd] rounded-full flex items-center gap-3 pl-4 pr-6 py-2.5 hover:opacity-90 transition-opacity">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/corporate-icon.svg'); ?>" alt="" class="size-8">
          <span class="flex flex-col leading-tight">
            <span class="text-[#464646] text-sm font-medium">京都WORKS LAB</span>
            <span class="text-[#464646] text-xs">コーポレートサイト</span>
          </span>
        </a>
      </div>
    </div>

    <div class="border-t border-white/10 pt-6 flex justify-center">
      <p class="text-xs text-white/30">© <?php echo esc_html(date('Y')); ?> 株式会社京都WORKS LAB. All rights reserved.</p>
    </div>
  </div>
</footer>
