<?php
/**
 * Test Options Page
 *
 * @package Lambda
 * @subpackage options-pages
 * @since 1.0
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.59.23
 */

return array(
    'sections'   => array(
        'twitter-section' => array(
            'fields' => array(
                array(
                    'name' => esc_html__('Show language as', 'lambda-admin-td'),
                    'id' => 'display',
                    'type' => 'select',
                    'default' => 'name',
                    'options' => array(
                        'name'        => esc_html__('Name', 'lambda-admin-td'),
                        'name-native' => esc_html__('Name (native)', 'lambda-admin-td'),
                        'code'        => esc_html__('Country Code', 'lambda-admin-td'),
                        'flag'        => esc_html__('Flag', 'lambda-admin-td'),
                        'nameflag'    => esc_html__('Name & Flag', 'lambda-admin-td')
                    )
                ),
                array(
                    'name' => esc_html__('Show as dropdown', 'lambda-admin-td'),
                    'id' => 'dropdown',
                    'type'    => 'checkbox',
                    'default' => 'off'
                ),
                array(
                    'name' => esc_html__('Dropdown Alignment', 'lambda-admin-td'),
                    'id' => 'dropdown_align',
                    'type' => 'select',
                    'default' => 'dropdown-menu-left',
                    'options' => array(
                        'dropdown-menu-left'   => esc_html__('Left', 'lambda-admin-td'),
                        'dropdown-menu-right'  => esc_html__('Right', 'lambda-admin-td')
                    ),
                ),
                array(
                    'name' => esc_html__('Order languages by', 'lambda-admin-td'),
                    'id' => 'order',
                    'type' => 'select',
                    'default' => 'id',
                    'options' => array(
                        'id'   => esc_html__('ID', 'lambda-admin-td'),
                        'code' => esc_html__('Code', 'lambda-admin-td'),
                        'name' => esc_html__('Name', 'lambda-admin-td')
                    ),
                ),
                array(
                    'name' => esc_html__('Order direction', 'lambda-admin-td'),
                    'id' => 'orderby',
                    'type' => 'select',
                    'default' => 'id',
                    'options' => array(
                        'asc'   => esc_html__('Ascending', 'lambda-admin-td'),
                        'desc' => esc_html__('Descending', 'lambda-admin-td'),
                    ),
                ),
                array(
                    'name' => esc_html__('Skip Missing Languages', 'lambda-admin-td'),
                    'id' => 'skip_missing',
                    'type' => 'select',
                    'default' => '1',
                    'options' => array(
                        '1' => esc_html__('Skip', 'lambda-admin-td'),
                        '0' => esc_html__('Dont Skip', 'lambda-admin-td'),
                    ),
                    'desc' => esc_html__('Skip languages with no translations.', 'lambda-admin-td')
                ),
            )//fields
        )//section
    )//sections
);//array
