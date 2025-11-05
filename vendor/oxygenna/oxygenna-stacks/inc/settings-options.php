<?php
/**
 * Stores stack settings options
 *
 * @package Lambda
 * @subpackage Admin
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 * @author Oxygenna.com
 */

return array(
    'page_title' => esc_html__('Settings', 'lambda-admin-td'),
    'menu_title' => esc_html__('Settings', 'lambda-admin-td'),
    'slug'       => THEME_SHORT . '-stack-settings',
    'main_menu'  => false,
    'icon'       => 'tools',
    'sections'   => array(
        'stack-save-css-options' => array(
            'title'   => esc_html__('CSS Style options', 'lambda-admin-td'),
            'header'  => esc_html__('Set up how your styles are saved.', 'lambda-admin-td'),
            'fields' => array(
                array(
                    'name'    => esc_html__('Load CSS from', 'lambda-admin-td'),
                    'desc'    => esc_html__('CSS can be loaded from a file (requires file permissions) or injected into the header.', 'lambda-admin-td'),
                    'id'      => 'css_save_to',
                    'type'    => 'select',
                    'options' => array(
                        'header' => esc_html__('Header', 'lambda-admin-td'),
                        'file'   => esc_html__('File', 'lambda-admin-td')
                    ),
                    'default' => 'file',
                ),
                array(
                    'name'    => esc_html__('CSS Output format', 'lambda-admin-td'),
                    'desc'    => esc_html__('Choose an output format for your CSS (useful for debugging CSS).', 'lambda-admin-td'),
                    'id'      => 'css_format',
                    'type'    => 'select',
                    'options' => array(
                        'scss_formatter'            => esc_html__('Normal', 'lambda-admin-td'),
                        'scss_formatter_nested'     => esc_html__('Nested', 'lambda-admin-td'),
                        'scss_formatter_compressed' => esc_html__('Compressed', 'lambda-admin-td'),
                    ),
                    'default' => 'scss_formatter_compressed',
                ),
            )
        ),
    )
);
