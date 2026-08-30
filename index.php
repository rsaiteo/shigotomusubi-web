<?php
/**
 * フォールバックテンプレート
 * トップページは front-page.php、無料相談フォームは template-entry*.php を使用します。
 * このファイルはそれ以外のURL（未設定の投稿・アーカイブ等）が呼ばれた場合の保険です。
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<div class="pt-16 px-5 py-16 md:py-20 max-w-[768px] mx-auto">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('mb-10'); ?>>
        <h1 class="font-serif text-2xl md:text-4xl text-ink tracking-[0.08em] mb-4"><?php the_title(); ?></h1>
        <div class="font-sans text-sm md:text-base text-body leading-[1.8]"><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p class="font-sans text-sm text-body">コンテンツが見つかりませんでした。</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
