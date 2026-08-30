<?php
/**
 * Template Name: 無料相談申し込み(入力)
 * Description: 固定ページ「entry」に割り当ててください。
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
      <?php echo do_shortcode('[contact-form-7 id="6f20f6d" title="無料相談"]'); ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>
