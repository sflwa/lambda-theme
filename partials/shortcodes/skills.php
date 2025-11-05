 <?php
/**
 * Tags shortcode
 *
 * @package Lambda
 * @subpackage Admin
 * @since 0.1
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 */
?>
<ul class="<?php echo esc_attr(implode(' ', $classes)); ?>" data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay); ?>s">
<?php
	foreach( $skills as $skill ) : ?>
		<li>
            <?php echo esc_html($skill); ?>
		</li><?php
	endforeach; ?>
</ul>