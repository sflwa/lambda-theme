<?php
/**
 * Service options
 *
 * @package Lambda
 * @subpackage Core
 * @since 1.0
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.59.23
 */
return array(
    array(
        'name'      => esc_html__('Image Shape', 'lambda-admin-td'),
        'id'        => 'image_shape',
        'type'      => 'select',
        'admin_label' => true,
        'options'   =>  array(
            'round'  => esc_html__('Circle', 'lambda-admin-td'),
            'square' => esc_html__('Square', 'lambda-admin-td'),
            'rect'   => esc_html__('Rectangle', 'lambda-admin-td'),
            'none'   => esc_html__('None (no shape will be added)', 'lambda-admin-td'),
        ),
        'default'   => 'round',
    ),
    array(
        'name'      =>  esc_html__('Shape Size', 'lambda-admin-td'),
        'id'        => 'image_size',
        'type'      => 'select',
        'options'   =>  array(
            'big'    => esc_html__('Big', 'lambda-admin-td'),
            'huge'   => esc_html__('Huge', 'lambda-admin-td'),
            'normal' => esc_html__('Normal', 'lambda-admin-td'),
            'medium' => esc_html__('Medium', 'lambda-admin-td'),
            'small'  => esc_html__('Small', 'lambda-admin-td'),
        ),
        'default'   => 'big',
    ),
    array(
        'name'      => esc_html__('Icon Color', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the color of the icon', 'lambda-admin-td'),
        'id'        => 'icon_colour',
        'type'      => 'colour',
        'default'   => '',
        'attr'      => array(
            'class' => 'allow-empty'
        )
    ),
    array(
        'name'    => esc_html__('Icon Animation', 'lambda-admin-td'),
        'desc'    => esc_html__('Icon Animation that will occur when you hover over the service shape.', 'lambda-admin-td'),
        'id'      => 'icon_animation',
        'type'    => 'select',
        'default' => 'bounce',
        'options' => include OXY_THEME_DIR . 'inc/options/global-options/animations.php'
    ),
    array(
        'name'      => esc_html__('Shape Background Color', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the color shape background.', 'lambda-admin-td'),
        'id'        => 'background_colour',
        'type'      => 'colour',
        'default'   => '',
        'format'  => 'rgba',
        'attr'      => array(
            'class' => 'allow-empty'
        )
    ),
    array(
        'name'      => esc_html__('Shape Background Grid', 'lambda-admin-td'),
        'desc'      => esc_html__('Adds a grid pattern to the shape background.', 'lambda-admin-td'),
        'id'        => 'overlay_grid',
        'type'      => 'slider',
        'default'   => '0',
        'attr'      => array(
            'max'       => 100,
            'min'       => 0,
            'step'      => 10,
        )
    ),
    array(
        'name'      => esc_html__('Show Image', 'lambda-admin-td'),
        'id'        => 'show_image',
        'type'      => 'select',
        'default'   =>  'show',
        'options' => array(
            'show'  => esc_html__('Show', 'lambda-admin-td'),
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Link Image', 'lambda-admin-td'),
        'id'        => 'link_image',
        'type'      => 'select',
        'default'   =>  'on',
        'options' => array(
            'on'  => esc_html__('On', 'lambda-admin-td'),
            'off' => esc_html__('Off', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Show Titles', 'lambda-admin-td'),
        'id'        => 'show_title',
        'type'      => 'select',
        'default'   =>  'show',
        'options' => array(
            'show' => esc_html__('Show', 'lambda-admin-td'),
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Title Tag', 'lambda-admin-td'),
        'id'        => 'tag_title',
        'type'      => 'select',
        'default'   =>  'h3',
        'options' => array(
            'h1'  => esc_html__('h1', 'lambda-admin-td'),
            'h2'  => esc_html__('h2', 'lambda-admin-td'),
            'h3'  => esc_html__('h3', 'lambda-admin-td'),
            'h4'  => esc_html__('h4', 'lambda-admin-td'),
            'h5'  => esc_html__('h5', 'lambda-admin-td'),
            'h6'  => esc_html__('h6', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Link Title', 'lambda-admin-td'),
        'id'        => 'link_title',
        'type'      => 'select',
        'default'   =>  'on',
        'options' => array(
            'on'  => esc_html__('On', 'lambda-admin-td'),
            'off' => esc_html__('Off', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Show Excerpt', 'lambda-admin-td'),
        'id'        => 'show_excerpt',
        'type'      => 'select',
        'default'   =>  'show',
        'options' => array(
            'show' => esc_html__('Show', 'lambda-admin-td'),
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Excerpt & More Text Alignment', 'lambda-admin-td'),
        'id'        => 'align',
        'type'      => 'select',
        'default'   => 'center',
        'options' => array(
            'default'   => esc_html__('Default alignment', 'lambda-admin-td'),
            'left'   => esc_html__('Left', 'lambda-admin-td'),
            'center' => esc_html__('Center', 'lambda-admin-td'),
            'right'  => esc_html__('Right', 'lambda-admin-td'),
            'justify' => esc_html__('Justify', 'lambda-admin-td')
        ),
        'desc'    => esc_html__('Sets the text alignment of the excerpt text and the read more link.', 'lambda-admin-td'),
    ),
    array(
        'name'      => esc_html__('Show Readmore Link', 'lambda-admin-td'),
        'id'        => 'show_readmore',
        'type'      => 'select',
        'default'   =>  'hide',
        'options' => array(
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
            'show' => esc_html__('Show', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'    => esc_html__('Readmore Link Text', 'lambda-admin-td'),
        'id'      => 'readmore_text',
        'type'    => 'text',
        'default' => esc_html__('read more', 'lambda-admin-td'),
        'desc'    => esc_html__('Customize your readmore link', 'lambda-admin-td'),
    ),
);
