<?php
    /**
     * Options for responsive features
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
        'name'    => esc_html__('Hidden on Large', 'lambda-admin-td'),
        'desc'    => esc_html__('Hides the element on large devices.', 'lambda-admin-td'),
        'id'      => 'hidden_on_large',
        'default' => 'off',
        'type'    => 'select',
        'options' => array(
            'off' => esc_html__('Off', 'lambda-admin-td'),
            'on'  => esc_html__('On', 'lambda-admin-td'),
        )
    ),
    array(
        'name'    => esc_html__('Hidden on Medium', 'lambda-admin-td'),
        'desc'    => esc_html__('Hides the element on medium devices.', 'lambda-admin-td'),
        'id'      => 'hidden_on_medium',
        'default' => 'off',
        'type'    => 'select',
        'options' => array(
            'off' => esc_html__('Off', 'lambda-admin-td'),
            'on'  => esc_html__('On', 'lambda-admin-td'),
        )
    ),
    array(
        'name'    => esc_html__('Hidden on Small', 'lambda-admin-td'),
        'desc'    => esc_html__('Hides the element on small devices.', 'lambda-admin-td'),
        'id'      => 'hidden_on_small',
        'default' => 'off',
        'type'    => 'select',
        'options' => array(
            'off' => esc_html__('Off', 'lambda-admin-td'),
            'on'  => esc_html__('On', 'lambda-admin-td'),
        )
    ),
    array(
        'name'    => esc_html__('Hidden on Extra Small', 'lambda-admin-td'),
        'desc'    => esc_html__('Hides the element on extra small devices.', 'lambda-admin-td'),
        'id'      => 'hidden_on_xsmall',
        'default' => 'off',
        'type'    => 'select',
        'options' => array(
            'off' => esc_html__('Off', 'lambda-admin-td'),
            'on'  => esc_html__('On', 'lambda-admin-td'),
        )
    )
);
