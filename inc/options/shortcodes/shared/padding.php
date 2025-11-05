<?php
/**
 * Padding element options
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
