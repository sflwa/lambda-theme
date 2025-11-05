<?php
    /**
     * Options for on scroll animations
     *
     * @package Lambda
     * @subpackage Admin
     * @since 0.1
     *
     * @copyright (c) 2015 Oxygenna.com
     * @license **LICENSE**
     * @version 1.59.23
     */
return array(
    array(
        'name'        => esc_html__('Scroll Animation', 'lambda-admin-td'),
        'desc'        => esc_html__('Animation that will occur when the user scrolls onto the element.', 'lambda-admin-td'),
        'id'          => 'scroll_animation',
        'type'        => 'select',
        'default'     => 'none',
        'options'     => include OXY_THEME_DIR . 'inc/options/global-options/animations.php',
    ),
    array(
        'name'    => esc_html__('Animation Delay', 'lambda-admin-td'),
        'desc'    => esc_html__('Delay after scrolling onto the element before animation starts.', 'lambda-admin-td'),
        'id'      => 'scroll_animation_delay',
        'type'    => 'slider',
        'default' => '0',
        'attr'    => array(
            'max'  => 4,
            'min'  => 0,
            'step' => 0.1
        )
    )
);
