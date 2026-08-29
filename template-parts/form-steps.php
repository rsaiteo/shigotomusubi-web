<?php
/**
 * フォームステップバー
 * 使用例: get_template_part('template-parts/form-steps', null, array('current_step' => 1));
 */
if (!defined('ABSPATH')) {
    exit;
}

$current_step = isset($args['current_step']) ? (int) $args['current_step'] : 1;
?>
<div class="flex items-center justify-center gap-3">
  <div class="flex flex-col items-center gap-1.5">
    <div class="flex items-center justify-center size-8 rounded-full font-sans text-xs <?php echo $current_step >= 1 ? 'bg-brand text-cream' : 'bg-beige text-body'; ?>">1</div>
    <p class="font-sans text-xs tracking-wide <?php echo $current_step >= 1 ? 'text-brand font-medium' : 'text-body'; ?>">入力</p>
  </div>
  <div class="w-12 md:w-16 h-px bg-beige mb-5"></div>
  <div class="flex flex-col items-center gap-1.5">
    <div class="flex items-center justify-center size-8 rounded-full font-sans text-xs <?php echo $current_step >= 2 ? 'bg-brand text-cream' : 'bg-beige text-body'; ?>">2</div>
    <p class="font-sans text-xs tracking-wide <?php echo $current_step >= 2 ? 'text-brand font-medium' : 'text-body'; ?>">確認</p>
  </div>
  <div class="w-12 md:w-16 h-px bg-beige mb-5"></div>
  <div class="flex flex-col items-center gap-1.5">
    <div class="flex items-center justify-center size-8 rounded-full font-sans text-xs <?php echo $current_step >= 3 ? 'bg-brand text-cream' : 'bg-beige text-body'; ?>">3</div>
    <p class="font-sans text-xs tracking-wide <?php echo $current_step >= 3 ? 'text-brand font-medium' : 'text-body'; ?>">完了</p>
  </div>
</div>
