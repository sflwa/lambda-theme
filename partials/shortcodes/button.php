<a href="<?php echo esc_url($link); ?>" class="btn <?php echo esc_attr(implode(' ', $classes)); ?>" target="<?php echo esc_attr($link_open); ?>" <?php echo empty($modal) ? '' : 'data-toggle="modal" data-target="#' . esc_attr($modal) . '"'; ?>  data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay);?>s"<?php echo empty($override_bg) ? '' : ' style="background:' . esc_attr($override_bg) . ' !important"'; ?>>
	<?php if ($icon_position == 'left' && $icon != '') : ?>
        <i class="<?php echo esc_attr($icon); ?>" <?php echo '' != $animation ? ' data-animation="' . esc_attr($animation) . '"' : ''; ?>></i>
    <?php endif ?>
    <?php echo esc_html($label) . ' '; ?>
    <?php if ( $icon_position == 'right' && $icon != '' ): ?>
	    <i class="<?php echo esc_attr($icon); ?>" <?php echo '' != $animation ? ' data-animation="' . esc_attr($animation) . '"' : ''; ?>></i>
	<?php endif ?>
</a>