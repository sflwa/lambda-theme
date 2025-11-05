<blockquote <?php echo !empty($min_height) ? 'style="min-height: ' . esc_attr($min_height) . 'px"' : '' ?>>
    <p><?php echo strip_tags( get_the_content() ); ?></p>
    <div class="box box-small box-round">
        <div class="box-dummy"></div>
        <div class="box-inner">
            <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
        </div>
    </div>
    <footer><?php
        the_title();
        if( !empty( $cite ) ) {?>
        <cite title="<?php echo esc_attr($cite); ?>"><?php
            echo esc_html($cite); ?>
        </cite>
    <?php } ?>
    </footer>
</blockquote>
