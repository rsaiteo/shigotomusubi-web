<?php
/**
 * Template Name: 無料相談申し込み(確認)
 * Description: 固定ページ「entry」の子ページ「confirm」に割り当ててください。
 */
if (!defined('ABSPATH')) {
    exit;
}

$shigotomusubi_meta_description = '京都しごとむすびへの無料相談のお申し込み内容をご確認ください。';

get_header();
?>
<div class="pt-16">
  <section class="px-5 py-16 md:py-20">
    <div class="max-w-[768px] mx-auto flex flex-col gap-10 md:gap-14">
      <?php get_template_part('template-parts/form-steps', null, array('current_step' => 2)); ?>

      <div class="flex flex-col gap-3">
        <p class="font-roboto font-light text-brand text-xs md:text-sm tracking-[0.2em]">CONFIRM</p>
        <h1 class="font-serif text-2xl md:text-4xl text-ink tracking-[0.08em]">入力内容のご確認</h1>
        <p class="font-yu text-sm md:text-base text-body leading-[1.8]">以下の内容でよろしければ、「送信する」ボタンを押してください。</p>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="046b5cf" title="無料相談確認"]'); ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>
