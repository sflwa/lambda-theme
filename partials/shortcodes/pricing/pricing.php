<div class="<?php echo esc_attr(implode(' ', $classes)); ?>" data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay); ?>s">
    <?php
    if( $heading !== "" ) : ?>
    <h2 class="pricing-head" style="background: <?php echo esc_attr($pricing_background_colour); ?>; color:<?php echo esc_attr($pricing_foreground_colour); ?>"><?php echo esc_html($heading); ?></h2>
    <?php
    endif; ?>
    <div class="pricing-body" style="background: <?php echo esc_attr($pricing_background_colour); ?>; color:<?php echo esc_attr($pricing_foreground_colour); ?>">
        <?php
        if( $show_price === 'true' ) : ?>
        <div class="pricing-price" >
            <header style="background: <?php echo esc_attr($pricing_background); ?>; color: <?php echo esc_attr($pricing_colour); ?>;">
                <h2>
                    <?php
                    if( $currency === 'custom' ) : ?>
                    <small style="color: <?php echo esc_attr($pricing_colour); ?>;"><?php echo esc_html($custom_currency); ?></small>
                    <?php
                    else : ?>
                    <small style="color: <?php echo esc_attr($pricing_colour); ?>;"><?php echo esc_html($currency); ?></small>
                    <?php
                    endif; ?>
                    <?php echo esc_html($price); ?>
                </h2>
                <p style="color: <?php echo esc_attr($pricing_colour); ?>;"><?php echo esc_html($per); ?></p>
            </header>
        </div>
        <?php
        endif; ?>
        <ul class="pricing-list">
        <?php
        foreach( $list as $item ) : ?>
            <li style="border-color: <?php echo esc_attr(oxy_hex2rgba($pricing_foreground_colour, .10)); ?>"><?php echo esc_html($item); ?></li>
        <?php
        endforeach; ?>
        </ul>
        <?php
        if( $show_button === 'true' ) : ?>
        <a href="<?php echo esc_url($button_link); ?>" class="btn btn-lg btn-primary" style="background: <?php echo esc_attr($button_background_colour); ?>; color: <?php echo esc_attr($button_foreground_colour); ?>;"><?php echo esc_html($button_text); ?></a>
        <?php
        endif; ?>
    </div>
</div>