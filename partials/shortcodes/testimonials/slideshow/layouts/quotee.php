<blockquote class="blockquote-simple" <?php echo !empty($min_height) ? 'style="min-height: ' . esc_attr($min_height) . 'px"' : '' ?>>
    <h1><?php the_title(); ?></h1>


    <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>

    <footer><?php
        if( !empty( $cite ) ) {?>
        <cite title="<?php echo esc_attr($cite); ?>"><?php
            echo esc_html($cite); ?>
        </cite>
    <?php } ?>
    </footer>
</blockquote>
