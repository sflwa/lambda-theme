<?php
/**
 * Bordered Divider
 *
 * @package Lambda
 * @subpackage Frontend
 * @since 1.01
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 */
?>
<?php
$divider_color = empty($divider_color) ? '' : 'background:' . $divider_color . '; ';
$divider_width = $divider_width == 40 ? '' : 'width:' . $divider_width . 'px;';
$inner_style = $divider_color . $divider_width; ?>
<div class="divider-border <?php echo esc_attr(implode(' ', $classes)); ?>" data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay); ?>s" <?php echo 4 == $divider_height ? '' : ' style="height:' . esc_attr($divider_height) . 'px;"'; ?>>
    <div class="divider-border-inner" <?php echo empty($inner_style) ? '' : ' style="' . esc_attr($inner_style) .'"'; ?>></div>
</div>