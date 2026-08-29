<?php
/**
 * Template Name: 無料相談申し込み(完了)
 * Description: 固定ページ「apply」の子ページ「complete」に割り当ててください。
 */
if (!defined('ABSPATH')) {
    exit;
}

$shigotomusubi_meta_description = '京都しごとむすびへの無料相談のお申し込みが完了しました。';

get_header();
?>
<div class="pt-16">
  <section id="applyComplete" class="px-5 py-24 md:py-32">
    <div class="max-w-[600px] mx-auto flex flex-col items-center gap-10 text-center">
      <?php get_template_part('template-parts/form-steps', null, array('current_step' => 3)); ?>

      <div class="flex flex-col items-center gap-4">
        <p class="font-roboto font-light text-brand text-xs md:text-sm tracking-[0.2em]">COMPLETE</p>
        <h1 class="font-serif text-2xl md:text-4xl text-ink tracking-[0.08em]">お申し込みが完了しました</h1>
        <p class="font-yu text-sm md:text-base text-body leading-[1.8]">
          この度はご相談のお申し込みをいただき、誠にありがとうございます。<br>
          担当スタッフより2営業日以内にご連絡いたしますので、今しばらくお待ちください。
        </p>
      </div>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-brand text-cream text-sm md:text-base tracking-wider px-10 py-4 rounded-[3px] hover:opacity-90 transition-opacity">
        トップへ戻る
      </a>
    </div>
  </section>
</div>
<?php get_footer(); ?>
