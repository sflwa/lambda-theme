<div class="panel <?php echo esc_attr(implode(' ', $classes)); ?>" data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay); ?>s">
    <?php if (!empty($title)) : ?>
    <div class="panel-heading">
        <h3 class="panel-title">
            <?php echo esc_html($title); ?>
        </h3>
    </div>
    <?php endif ?>
    <div class="panel-body"<?php echo empty($background_colour) ? '' : ' style="background-color:' . $background_colour . ';"'; ?>>
        <?php echo do_shortcode( $content ) ?>
    </div>
</div>