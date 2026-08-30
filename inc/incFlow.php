<!-- ============ FLOW ============ -->
<section id="flow" class="relative bg-paper py-16 md:py-20 overflow-hidden">
  <img src="<?php echo esc_url($img . 'flow-line.svg'); ?>" alt="" class="absolute top-[44%] w-[110%] h-auto pointer-events-none hidden md:block">
  <div class="relative max-w-[1024px] mx-auto px-5 flex flex-col items-center gap-3 text-center mb-10 md:mb-14">
    <p class="font-roboto font-light text-brand text-sm md:text-base tracking-[0.1em]">Flow</p>
    <p class="font-serif text-2xl md:text-4xl text-ink tracking-[0.08em]">ご縁を結ぶまでの流れ</p>
    <div class="font-yu text-sm md:text-base text-body leading-[1.8]">
      <p>まずは無料相談にエントリー。</p>
      <p>サポーターがあなたの想いや悩みをお聞きし、就職・転職のアドバイスをします</p>
    </div>
  </div>

  <div class="relative mx-auto px-5 md:px-0">
    <div id="flowTrack" class="flex gap-5 overflow-x-auto no-scrollbar scroll-smooth pb-4 snap-x snap-mandatory px-3 md:px-[calc(50%-160px)]">
      <div class="flow-card transition-all duration-300 ease-out bg-[#f5f0e8]/80 shrink-0 snap-center w-[calc(100vw-64px)] max-w-[380px] md:w-[320px] md:max-w-none flex flex-col gap-9 p-9">
        <div class="flex items-center justify-between text-brand font-roboto font-light tracking-wide">
          <p class="text-base">01</p>
          <p class="text-xs tracking-[0.2em]">CONTACT</p>
        </div>
        <div class="flex flex-col items-center gap-4">
          <img data-flow-media src="<?php echo esc_url($img . 'flow-illustration-01.svg'); ?>" alt="" class="w-[170px] h-auto transition-opacity duration-300 md:!opacity-100 md:!visible">
          <div class="flex flex-col items-center gap-2 text-center">
            <p class="font-serif text-xl text-brand tracking-wide">無料相談</p>
            <p class="font-sans text-sm text-ink leading-[1.8]">まずはお気軽にご相談ください。サポーターがあなたの想いや価値観をじっくりお聞きします。</p>
          </div>
        </div>
        <a href="<?php echo $entry_url; ?>" class="bg-brand text-cream text-sm text-center tracking-wide py-3.5 rounded-[3px] hover:opacity-90 transition-opacity">無料で相談する</a>
      </div>

      <div class="flow-card transition-all duration-300 ease-out bg-[#f5f0e8]/80 shrink-0 snap-center w-[calc(100vw-64px)] max-w-[380px] md:w-[320px] md:max-w-none flex flex-col gap-11 p-9 self-center">
        <div class="flex items-center justify-between text-brand font-roboto font-light tracking-wide">
          <p class="text-base">02</p>
          <p class="text-xs tracking-[0.2em]">MATCHING</p>
        </div>
        <div class="flex flex-col items-center gap-4">
          <img data-flow-media src="<?php echo esc_url($img . 'flow-illustration-02.svg'); ?>" alt="" class="w-[170px] h-auto transition-opacity duration-300 md:!opacity-100 md:!visible">
          <div class="flex flex-col gap-4 text-center">
            <p class="font-serif text-xl text-brand tracking-wide">あなたに合った優良企業を紹介</p>
            <p class="font-sans text-sm text-ink leading-[1.8]">応募先企業の経営者の考え方やビジョンをわかりやすくお伝えします。入社後のギャップが生まれにくい仕組みです。</p>
          </div>
        </div>
      </div>

      <div class="flow-card transition-all duration-300 ease-out bg-[#f5f0e8]/80 shrink-0 snap-center w-[calc(100vw-64px)] max-w-[380px] md:w-[320px] md:max-w-none flex flex-col gap-11 p-9 self-center">
        <div class="flex items-center justify-between text-brand font-roboto font-light tracking-wide">
          <p class="text-base">03</p>
          <p class="text-xs tracking-[0.2em]">RECOMMEND</p>
        </div>
        <div class="flex flex-col items-center gap-4">
          <img data-flow-media src="<?php echo esc_url($img . 'flow-illustration-03.svg'); ?>" alt="" class="w-[170px] h-auto transition-opacity duration-300 md:!opacity-100 md:!visible">
          <div class="flex flex-col gap-4 text-center">
            <p class="font-serif text-xl text-brand tracking-wide">京都しごとむすびがあなたを推薦</p>
            <p class="font-sans text-sm text-ink leading-[1.8]">応募先が決まれば、あなたの推薦状を応募先に届け、あなたの選考試験をバックアップします。</p>
          </div>
        </div>
      </div>

      <div class="flow-card transition-all duration-300 ease-out bg-[#f5f0e8]/80 shrink-0 snap-center w-[calc(100vw-64px)] max-w-[380px] md:w-[320px] md:max-w-none flex flex-col gap-11 p-9 self-center">
        <div class="flex items-center justify-between text-brand font-roboto font-light tracking-wide">
          <p class="text-base">04</p>
          <p class="text-xs tracking-[0.2em]">SUPPORT</p>
        </div>
        <div class="flex flex-col items-center gap-4">
          <img data-flow-media src="<?php echo esc_url($img . 'flow-illustration-04.svg'); ?>" alt="" class="w-[170px] h-auto transition-opacity duration-300 md:!opacity-100 md:!visible">
          <div class="flex flex-col gap-4 text-center">
            <p class="font-serif text-xl text-brand tracking-wide">選考試験も無料で個別サポート</p>
            <p class="font-sans text-sm text-ink leading-[1.8]">プロのサポーターが、履歴書などの選考書類を添削します。プロのサポーターが、面接のレクチャーをします。</p>
          </div>
        </div>
      </div>

      <div class="flow-card transition-all duration-300 ease-out bg-[#f5f0e8]/80 shrink-0 snap-center w-[calc(100vw-64px)] max-w-[380px] md:w-[320px] md:max-w-none flex flex-col gap-11 p-9 self-center">
        <div class="flex items-center justify-between text-brand font-roboto font-light tracking-wide">
          <p class="text-base">05</p>
          <p class="text-xs tracking-[0.2em]">OFFER</p>
        </div>
        <div class="flex flex-col items-center gap-4">
          <img data-flow-media src="<?php echo esc_url($img . 'flow-illustration-05.svg'); ?>" alt="" class="w-[170px] h-auto transition-opacity duration-300 md:!opacity-100 md:!visible">
          <div class="flex flex-col gap-4 text-center">
            <p class="font-serif text-xl text-brand tracking-wide">企業からの内定獲得までサポート</p>
            <p class="font-sans text-sm text-ink leading-[1.8]">選考試験～入社まで丁寧にサポートをしますので、安心して入社までの準備ができます。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="flex items-center justify-center gap-[17px] mt-4">
      <button type="button" id="flowPrev" aria-label="前へ" class="border border-brand rounded-full flex items-center justify-center size-8 shrink-0 hover:bg-brand/10 transition-colors disabled:opacity-30 disabled:hover:bg-transparent">
        <img src="<?php echo esc_url($img . 'flow-arrow-left.svg'); ?>" alt="" class="size-4">
      </button>
      <div id="flowDots" class="flex items-center gap-2">
        <button type="button" data-flow-dot="0" aria-label="1枚目へ" class="rounded-full size-2 bg-brand/30 transition-all"></button>
        <button type="button" data-flow-dot="1" aria-label="2枚目へ" class="rounded-full size-2 bg-brand/30 transition-all"></button>
        <button type="button" data-flow-dot="2" aria-label="3枚目へ" class="rounded-full size-2 bg-brand/30 transition-all"></button>
        <button type="button" data-flow-dot="3" aria-label="4枚目へ" class="rounded-full size-2 bg-brand/30 transition-all"></button>
        <button type="button" data-flow-dot="4" aria-label="5枚目へ" class="rounded-full size-2 bg-brand/30 transition-all"></button>
      </div>
      <button type="button" id="flowNext" aria-label="次へ" class="border border-brand rounded-full flex items-center justify-center size-8 shrink-0 hover:bg-brand/10 transition-colors disabled:opacity-30 disabled:hover:bg-transparent">
        <img src="<?php echo esc_url($img . 'flow-arrow-right.svg'); ?>" alt="" class="size-4">
      </button>
    </div>
  </div>
</section>
