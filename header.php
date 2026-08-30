<?php
/**
 * サイト共通ヘッダー
 */
if (!defined('ABSPATH')) {
    exit;
}
global $wp;
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4M3WGZEZGR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4M3WGZEZGR');
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/logo-mark.svg'); ?>">
<meta name="description" content="<?php echo esc_attr(shigotomusubi_meta_description()); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo esc_attr(shigotomusubi_meta_description()); ?>">
<meta property="og:url" content="<?php echo esc_url(home_url($wp->request)); ?>">
<meta property="og:image" content="<?php echo esc_url(shigotomusubi_og_image()); ?>">
<meta property="og:locale" content="ja_JP">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo esc_attr(shigotomusubi_meta_description()); ?>">
<meta name="twitter:image" content="<?php echo esc_url(shigotomusubi_og_image()); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class('bg-paper text-ink overflow-x-hidden'); ?>>
<?php wp_body_open(); ?>

<?php include(STYLESHEETPATH . '/inc/incHeader.php'); ?>
