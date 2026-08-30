<?php
/**
 * Template Name: 無料相談申し込み(完了)
 * Description: 固定ページ「entry」の子ページ「complete」に割り当ててください。
 */
if (!defined('ABSPATH')) {
    exit;
}

$shigotomusubi_meta_description = '京都しごとむすびへの無料相談のお申し込みが完了しました。';

get_header();
?>
<div class="pt-16">
  <section id="entryComplete" class="px-5 py-24 md:py-32">
    <div class="max-w-[600px] mx-auto flex flex-col items-center gap-10 text-center">
      <?php get_template_part('template-parts/form-steps', null, array('current_step' => 3)); ?>

      <div class="flex flex-col items-center gap-4">
        <p class="font-roboto font-light text-brand text-xs md:text-sm tracking-[0.2em]">COMPLETE</p>
        <h1 class="font-serif text-2xl md:text-4xl text-ink tracking-[0.08em]">お申し込みが完了しました</h1>
        <div class="flex flex-col gap-4 font-yu text-sm md:text-base text-body leading-[1.8]">
          <p>この度はお申し込みいただきましてありがとうございます。</p>
          <p>お申し込みが完了致しました。</p>
          <p>担当者より3営業日以内にご連絡させていただきます。</p>
          <p>※お申込み後、確認メールが届かない場合は迷惑メールフォルダに入っている可能性がございます。<br>届かない場合は、一度ご確認をお願い致しております。</p>
        </div>
      </div>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-brand text-cream text-sm md:text-base tracking-wider px-10 py-4 rounded-[3px] hover:opacity-90 transition-opacity">
        トップへ戻る
      </a>
    </div>
  </section>
</div>
<?php get_footer(); ?>
