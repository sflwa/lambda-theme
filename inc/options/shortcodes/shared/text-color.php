<?php
/**
 * Text color options
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
        'name'      => esc_html__('Text Color', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the text color of the heading', 'lambda-admin-td'),
        'id'        => 'text_color',
        'type'      => 'select',
        'options'   => array(
            'text-normal' => esc_html__('Normal Text', 'lambda-admin-td'),
            'text-light'  => esc_html__('Light Text', 'lambda-admin-td'),
        ),
        'default'   => 'text-normal'
    )
);
