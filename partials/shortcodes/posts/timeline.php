<div id="cd-timeline" class="cd-container <?php echo esc_attr(implode(' ', $classes)); ?>" data-os-animation="<?php echo esc_attr($scroll_animation); ?>" data-os-animation-delay="<?php echo esc_attr($scroll_animation_delay); ?>s">
   <?php
   foreach($posts as $post):
       setup_postdata($post);
       // get related post image
       $image = '';
       if (has_post_thumbnail()) {
           $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'related-post-image');
           if(!empty($attachment)) {
               $image = $attachment[0];
           }
       }

       $format = get_post_format();
       if($format !== 'quote' && $format !== 'link') :
           $format = 'standard';
       endif; ?>

       <?php include(locate_template('partials/blog/posts/timeline/post-' . $format . '.php')); ?>
   <?php endforeach; ?>
</div>
