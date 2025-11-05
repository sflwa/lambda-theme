<blockquote <?php echo !empty($min_height) ? 'style="min-height: ' . esc_attr($min_height) . 'px"' : '' ?>>
    <p><?php echo strip_tags( get_the_content() ); ?></p>
    <footer><?php
        the_title();
        if( !empty( $cite ) ) {?>
        <cite title="<?php echo esc_attr($cite); ?>"><?php
            echo esc_html($cite); ?>
        </cite>
    <?php } ?>
    </footer>
</blockquote>
