<?php
/**
 * Template Name: 無料相談申し込み(入力)
 * Description: 固定ページ「apply」に割り当ててください。
 */
if (!defined('ABSPATH')) {
    exit;
}

$shigotomusubi_meta_description = '京都しごとむすびへの無料相談のお申し込みフォームです。以下のフォームにご記入ください。専任スタッフより2営業日以内にご連絡いたします。';

get_header();
?>
<div class="pt-16">
  <section class="px-5 py-16 md:py-20">
    <div class="max-w-[768px] mx-auto flex flex-col gap-10 md:gap-14">
      <?php get_template_part('template-parts/form-steps', null, array('current_step' => 1)); ?>

      <div class="flex flex-col gap-3">
        <p class="font-roboto font-light text-brand text-xs md:text-sm tracking-[0.2em]">CONTACT</p>
        <h1 class="font-serif text-2xl md:text-4xl text-ink tracking-[0.08em]">無料相談のお申し込み</h1>
        <div class="font-yu text-sm md:text-base text-body leading-[1.8]">
          <p>以下のフォームにご記入ください。</p>
          <p>専任スタッフより2営業日以内にご連絡いたします。</p>
        </div>
      </div>

      <form id="applyForm" class="flex flex-col gap-8">
        <div class="flex flex-col gap-2">
          <label for="name" class="flex items-center gap-2 font-sans text-sm text-ink tracking-wide">
            お名前
            <span class="font-sans text-xs text-brand">必須</span>
          </label>
          <input type="text" id="name" name="name" required placeholder="山田 花子"
            class="bg-cream border border-beige rounded-[3px] px-4 py-3.5 font-sans text-sm text-ink placeholder:text-ink/40 focus:outline-none focus:border-brand transition-colors">
        </div>

        <div class="flex flex-col gap-2">
          <label for="affiliation" class="flex items-center gap-2 font-sans text-sm text-ink tracking-wide">
            大学名・所属
            <span class="font-sans text-xs text-body">任意</span>
          </label>
          <input type="text" id="affiliation" name="affiliation" placeholder="〇〇大学 〇〇学部"
            class="bg-cream border border-beige rounded-[3px] px-4 py-3.5 font-sans text-sm text-ink placeholder:text-ink/40 focus:outline-none focus:border-brand transition-colors">
        </div>

        <div class="flex flex-col gap-2">
          <label for="email" class="flex items-center gap-2 font-sans text-sm text-ink tracking-wide">
            メールアドレス
            <span class="font-sans text-xs text-brand">必須</span>
          </label>
          <input type="email" id="email" name="email" required placeholder="example@kyoto.ac.jp"
            class="bg-cream border border-beige rounded-[3px] px-4 py-3.5 font-sans text-sm text-ink placeholder:text-ink/40 focus:outline-none focus:border-brand transition-colors">
        </div>

        <div class="flex flex-col gap-2">
          <label for="tel" class="flex items-center gap-2 font-sans text-sm text-ink tracking-wide">
            電話番号
            <span class="font-sans text-xs text-body">任意</span>
          </label>
          <input type="tel" id="tel" name="tel" placeholder="090-0000-0000"
            class="bg-cream border border-beige rounded-[3px] px-4 py-3.5 font-sans text-sm text-ink placeholder:text-ink/40 focus:outline-none focus:border-brand transition-colors">
        </div>

        <div class="flex flex-col gap-2">
          <label for="category" class="flex items-center gap-2 font-sans text-sm text-ink tracking-wide">
            相談カテゴリ
            <span class="font-sans text-xs text-brand">必須</span>
          </label>
          <div class="relative">
            <select id="category" name="category" required
              class="w-full appearance-none bg-cream border border-beige rounded-[3px] px-4 py-3.5 pr-10 font-sans text-sm text-ink focus:outline-none focus:border-brand transition-colors">
              <option value="" disabled selected>選択してください</option>
              <option value="transfer">転職について相談したい</option>
              <option value="jobhunting">就職について相談したい</option>
              <option value="introduction">求人・企業を紹介してほしい</option>
              <option value="other">その他のご相談</option>
            </select>
            <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 font-sans text-xs text-body">▼</span>
          </div>
        </div>

        <div class="flex flex-col gap-2">
          <label for="message" class="flex items-center gap-2 font-sans text-sm text-ink tracking-wide">
            ご相談内容
            <span class="font-sans text-xs text-brand">必須</span>
          </label>
          <textarea id="message" name="message" required rows="6" placeholder="どのような企業に興味があるか、現在の状況、気になることなど、自由にお書きください。"
            class="bg-cream border border-beige rounded-[3px] px-4 py-3.5 font-sans text-sm text-ink placeholder:text-ink/40 leading-[1.7] focus:outline-none focus:border-brand transition-colors resize-none"></textarea>
        </div>

        <div class="bg-beigelight rounded-[3px] p-4">
          <p class="font-yu text-xs text-body leading-[1.8]">ご入力いただいた個人情報は、ご相談への回答および当サービスのご案内にのみ使用し、第三者への提供は行いません。</p>
        </div>

        <button type="submit" class="w-full bg-brand text-cream text-sm md:text-base tracking-wider py-4 rounded-[3px] hover:opacity-90 transition-opacity">
          入力内容を確認する →
        </button>
      </form>
    </div>
  </section>
</div>
<?php get_footer(); ?>
