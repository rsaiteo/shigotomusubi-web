<?php
/**
 * フロントページ (トップページ)
 */
if (!defined('ABSPATH')) {
    exit;
}

$shigotomusubi_meta_description = '京都しごとむすびは、京都の優良企業だけを紹介する就職・転職支援サービスです。無料個別相談でプロのサポーターが、あなたに合った1社との出会いをお手伝いします。';
$img = get_template_directory_uri() . '/images/';
$entry_url = esc_url(home_url('/entry/'));

get_header();
?>

<?php include(STYLESHEETPATH . '/inc/incHero.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incWorry.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incPromise.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incEntry.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incFeature.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incSupporter.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incFlow.php'); ?>
<?php include(STYLESHEETPATH . '/inc/incFinalCta.php'); ?>

<?php get_footer(); ?>
