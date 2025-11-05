<blockquote <?php echo !empty($min_height) ? 'style="min-height: ' . esc_attr($min_height) . 'px"' : '' ?>>
    <h1><?php the_title(); ?></h1>
    <footer><?php
        if( !empty( $cite ) ) {?>
        <cite title="<?php echo esc_attr($cite); ?>"><?php
            echo esc_html($cite); ?>
        </cite>
    <?php } ?>
    </footer>
</blockquote>
