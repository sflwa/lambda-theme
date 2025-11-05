<?php
/**
 * Heading options
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
        'name'        => esc_html__('Header Text', 'lambda-admin-td'),
        'id'          => 'content',
        'type'        => 'text',
        'default'     => '',
        'desc'        => esc_html__('Text that will be used for the header.', 'lambda-admin-td'),
        'admin_label' => true,
    ),
    array(
        'name'      => esc_html__('Text Color', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the text color of the heading', 'lambda-admin-td'),
        'id'        => 'text_color',
        'type'      => 'select',
        'options'   => array(
            'text-normal' => esc_html__('Normal Text', 'lambda-admin-td'),
            'text-light'  => esc_html__('Light Text', 'lambda-admin-td'),
        ),
        'default'   => 'text-normal'
    ),
    array(
        'name'    => esc_html__('Header Type', 'lambda-admin-td'),
        'desc'    => esc_html__('Choose the type of header you want to use', 'lambda-admin-td'),
        'id'      => 'header_type',
        'type'    => 'select',
        'options' => array(
            'h1'      => esc_html__('h1', 'lambda-admin-td'),
            'h2'      => esc_html__('h2', 'lambda-admin-td'),
            'h3'      => esc_html__('h3', 'lambda-admin-td'),
            'h4'      => esc_html__('h4', 'lambda-admin-td'),
            'h5'      => esc_html__('h5', 'lambda-admin-td'),
            'h6'      => esc_html__('h6', 'lambda-admin-td')
        ),
        'default' => 'h1',
    ),
    array(
        'name'    => esc_html__('Header Font Size', 'lambda-admin-td'),
        'desc'    => esc_html__('Choose size of the font to use in your header', 'lambda-admin-td'),
        'id'      => 'header_size',
        'type'    => 'select',
        'options' => array(
            'normal' => esc_html__('Normal', 'lambda-admin-td'),
            'big'    => esc_html__('Big (36px)', 'lambda-admin-td'),
            'bigger' => esc_html__('Bigger (48px)', 'lambda-admin-td'),
            'super'  => esc_html__('Super (60px)', 'lambda-admin-td'),
            'hyper'  => esc_html__('Hyper (96px)', 'lambda-admin-td'),
        ),
        'default' => 'normal',
    ),
    array(
        'name'    => esc_html__('Header Font Weight', 'lambda-admin-td'),
        'desc'    => esc_html__('Choose weight of the font to use in the header', 'lambda-admin-td'),
        'id'      => 'header_weight',
        'type'    => 'select',
        'options' => array(
            'default'  => esc_html__('Default (from skin)', 'lambda-admin-td'),
            'hairline' => esc_html__('Hairline', 'lambda-admin-td'),
            'light'    => esc_html__('Light', 'lambda-admin-td'),
            'regular'  => esc_html__('Regular', 'lambda-admin-td'),
            'black'    => esc_html__('Black', 'lambda-admin-td'),
            'bold'     => esc_html__('Bold', 'lambda-admin-td'),
        ),
        'default' => 'default',
    ),
    array(
        'name' => esc_html__('Header Alignment', 'lambda-admin-td'),
        'desc' => esc_html__('Align the text shown in the header left, right or center.', 'lambda-admin-td'),
        'id'   => 'header_align',
        'type' => 'select',
        'default' => 'left',
        'options' => array(
            'default'   => esc_html__('Default alignment', 'lambda-admin-td'),
            'left'   => esc_html__('Left', 'lambda-admin-td'),
            'center' => esc_html__('Center', 'lambda-admin-td'),
            'right'  => esc_html__('Right', 'lambda-admin-td'),
            'justify'     => esc_html__('Justify', 'lambda-admin-td')
        )
    ),
    array(
        'name'    => esc_html__('Fade out when leaving page', 'lambda-admin-td'),
        'desc'    => esc_html__('Fades the heading out when the heading leaves the page.', 'lambda-admin-td'),
        'id'      => 'header_fade_out',
        'default' => 'off',
        'type'    => 'select',
        'options' => array(
            'off' => esc_html__('Off', 'lambda-admin-td'),
            'on'  => esc_html__('On', 'lambda-admin-td'),
        )
    ),
    array(
        'name'        => esc_html__('Extra Classes', 'lambda-admin-td'),
        'id'          => 'extra_classes',
        'type'        => 'text',
        'default'     => '',
        'desc'        => esc_html__('Space separated extra classes to add to the heading.', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Margin Top', 'lambda-admin-td'),
        'desc'    => esc_html__('Amount of space to add above this element.', 'lambda-admin-td'),
        'id'      => 'margin_top',
        'type' => 'slider',
        'default'   => '20',
        'attr'      => array(
            'max'       => 300,
            'min'       => 0,
            'step'      => 10,
        )
    ),
    array(
        'name'    => esc_html__('Margin Bottom', 'lambda-admin-td'),
        'desc'    => esc_html__('Amount of space to add below this element.', 'lambda-admin-td'),
        'id'      => 'margin_bottom',
        'type' => 'slider',
        'default'   => '20',
        'attr'      => array(
            'max'       => 300,
            'min'       => 0,
            'step'      => 10,
        )
    )
);
