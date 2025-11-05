<?php
/**
 * Stores options for themes quick uploaders
 *
 * @package Lambda
 * @subpackage Admin
 * @since 0.1
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.59.23
 */

return array(
    // slideshoe quick upload
    'oxy_slideshow_image' => array(
        'menu_title' => esc_html__('Quick Slideshow', 'lambda-admin-td'),
        'page_title' => esc_html__('Quick Slideshow Creator', 'lambda-admin-td'),
        'item_singular'  => esc_html__('Slideshow Image', 'lambda-admin-td'),
        'item_plural'  => esc_html__('Slideshow Images', 'lambda-admin-td'),
        'taxonomies' => array(
            'oxy_slideshow_categories'
        )
    ),
    // services quick upload
    'oxy_service' => array(
        'menu_title' => esc_html__('Quick Services', 'lambda-admin-td'),
        'page_title' => esc_html__('Quick Services Creator', 'lambda-admin-td'),
        'item_singular'  => esc_html__('Services', 'lambda-admin-td'),
        'item_plural'  => esc_html__('Service', 'lambda-admin-td'),
        'show_editor' => true,
    ),
    // portfolio quick upload
    'oxy_portfolio_image' => array(
        'menu_title' => esc_html__('Quick Portfolio', 'lambda-admin-td'),
        'page_title' => esc_html__('Quick Portfolio Creator', 'lambda-admin-td'),
        'item_singular'  => esc_html__('Portfolio Image', 'lambda-admin-td'),
        'item_plural'  => esc_html__('Portfolio Images', 'lambda-admin-td'),
        'show_editor' => true,
        'taxonomies' => array(
            'oxy_portfolio_categories'
        )
    ),
    // staff quick upload
    'oxy_staff' => array(
        'menu_title' => esc_html__('Quick Staff', 'lambda-admin-td'),
        'page_title' => esc_html__('Quick Staff Creator', 'lambda-admin-td'),
        'item_singular'  => esc_html__('Staff Member', 'lambda-admin-td'),
        'item_plural'  => esc_html__('Staff', 'lambda-admin-td'),
        'show_editor' => true,
        'taxonomies' => array(
            'oxy_staff_skills'
        )
    )
);
