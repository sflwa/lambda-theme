<?php // If there is no icon, style of no padding-left should be applied ?>
<li class="<?php echo esc_attr(implode( ' ', $classes )); ?>" <?php echo empty( $icon ) ? 'style="padding-left:0px;"' : ''; ?> data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay); ?>s">
    <?php if( !empty( $icon ) ) : ?>
        <div class="features-list-icon box-animate" data-animation="<?php echo esc_attr($animation); ?> "<?php echo !empty($background_color) ? ' style="background-color:' . esc_attr($background_color) . ';"' : ''; ?>>
            <i class="<?php echo esc_attr($icon); ?>"<?php echo !empty($icon_color) ? ' style="color:' . esc_attr($icon_color) . ';"' : ''; ?>></i>
        </div>
    <?php endif; ?>
    <h3>
        <?php echo esc_html($title); ?>
    </h3>
    <p>
        <?php echo esc_html($content); ?>
    </p>
</li>