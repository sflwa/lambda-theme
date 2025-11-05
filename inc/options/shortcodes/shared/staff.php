<?php
/**
 * Staff options
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
        'name'    => esc_html__('Show Position', 'lambda-admin-td'),
        'desc'    => esc_html__('Display the staff position below the name', 'lambda-admin-td'),
        'id'      => 'show_position',
        'type'    => 'select',
        'default' => 'show',
        'options' => array(
            'show' => esc_html__('Show', 'lambda-admin-td'),
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Show Social Links', 'lambda-admin-td'),
        'desc'    => esc_html__('Enables hover overlay.', 'lambda-admin-td'),
        'id'        => 'show_social',
        'type'      => 'select',
        'default'   => 'show',
        'options' => array(
            'show' => esc_html__('Show', 'lambda-admin-td'),
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'    => esc_html__('Link Title', 'lambda-admin-td'),
        'desc'    => esc_html__('Makes the Title a link.', 'lambda-admin-td'),
        'id'      => 'link_title',
        'type'    => 'select',
        'default' => 'on',
        'options'   => array(
            'on'  => esc_html__('On', 'lambda-admin-td'),
            'off' => esc_html__('Off', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Show Description', 'lambda-admin-td'),
        'id'        => 'show_description',
        'type'      => 'select',
        'default'   => 'show',
        'options' => array(
            'show' => esc_html__('Show', 'lambda-admin-td'),
            'hide' => esc_html__('Hide', 'lambda-admin-td'),
        ),
    ),
    array(
        'name'      => esc_html__('Text Horizontal Alignment', 'lambda-admin-td'),
        'id'        => 'text_align',
        'type'      => 'select',
        'default'   => 'center',
        'options' => array(
            'center' => esc_html__('Center', 'lambda-admin-td'),
            'left'   => esc_html__('Left', 'lambda-admin-td'),
            'right'  => esc_html__('Right', 'lambda-admin-td'),
            'justify'     => esc_html__('Justify', 'lambda-admin-td')
        ),
        'desc'    => esc_html__('The text alignment of the caption text / title.', 'lambda-admin-td'),
    ),
    array(
        'name'      => esc_html__('Item Overlay Hover Animation', 'lambda-admin-td'),
        'id'        => 'overlay_animation',
        'type'        => 'select',
        'default'     => 'fade-in',
        'options'     => array(
            'fade-in'     => esc_html__('Fade in', 'lambda-admin-td'),
            'fade-in from-top'    => esc_html__('Fade From Top', 'lambda-admin-td'),
            'fade-in from-bottom' => esc_html__('Fade From Bottom', 'lambda-admin-td'),
            'fade-in from-left'   => esc_html__('Fade From Left', 'lambda-admin-td'),
            'fade-in from-right'  => esc_html__('Fade From Right', 'lambda-admin-td'),
            'fade-none'        => esc_html__('No Animation', 'lambda-admin-td'),
        ),
        'desc'    => esc_html__('What animation will be used to reveal the image hover overlay.', 'lambda-admin-td'),
    ),
    array(
        'name'      => esc_html__('Item Overlay Grid', 'lambda-admin-td'),
        'desc'      => esc_html__('Grid pattern to apply over the image on hover.', 'lambda-admin-td'),
        'id'        => 'overlay_grid',
        'type'      => 'slider',
        'default'   => '0',
        'attr'      => array(
            'max'       => 100,
            'min'       => 0,
            'step'      => 10,
        )
    )
);
