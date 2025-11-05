<?php
/**
 * Themes shortcode image options go here
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
        'title' => esc_html__('Image options', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Image Shape', 'lambda-admin-td'),
                'desc'    => esc_html__('Choose the shape of the image', 'lambda-admin-td'),
                'id'      => 'image_shape',
                'type'    => 'select',
                'options' => array(
                    'box-round'    => esc_html__('Round', 'lambda-admin-td'),
                    'box-rect'     => esc_html__('Rectangle', 'lambda-admin-td'),
                    'box-square'   => esc_html__('Square', 'lambda-admin-td'),
                ),
                'default' => 'box-round',
            ),
            array(
                'name'    => esc_html__('Image Size', 'lambda-admin-td'),
                'desc'    => esc_html__('Choose the size of the image', 'lambda-admin-td'),
                'id'      => 'image_size',
                'type'    => 'select',
                'options' => array(
                    'box-mini'    => esc_html__('Mini', 'lambda-admin-td'),
                    'no-small'    => esc_html__('Small', 'lambda-admin-td'),
                    'box-medium'  => esc_html__('Medium', 'lambda-admin-td'),
                    'box-big'     => esc_html__('Big', 'lambda-admin-td'),
                    'box-huge'    => esc_html__('Huge', 'lambda-admin-td'),
                ),
                'default' => 'box-medium',
            ),
        )
);