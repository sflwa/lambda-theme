<blockquote <?php echo !empty($min_height) ? 'style="min-height: ' . esc_attr($min_height) . 'px"' : '' ?>>
    <p><?php echo strip_tags( get_the_content() ); ?></p>
</blockquote>
