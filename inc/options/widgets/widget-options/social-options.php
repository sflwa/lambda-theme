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


$options = array(
    'sections'   => array(
        'social-section' => array(
            'fields' => array()
        )
    )
);

$options['sections']['social-section']['fields'][] = array(
    'name' => esc_html__('Widget Title', 'lambda-admin-td'),
    'id' => 'title',
    'type' => 'text',
    'default' => '',
    'attr'      =>  array(
        'class'    => 'widefat',
    ),
);

$options['sections']['social-section']['fields'][] =  array(
    'name'    => esc_html__('Open links in new window', 'lambda-admin-td'),
    'id'      => 'social_window',
    'type'    => 'checkbox',
    'default' => 'off'
);

$options['sections']['social-section']['fields'][] =  array(
    'name'    => esc_html__('Enable custom social colors', 'lambda-admin-td'),
    'id'      => 'social_color',
    'type'    => 'select',
    'options' =>  array(
        'on'   => 'On',
        'off'  => 'Off',
    ),
    'attr'    =>  array(
        'class' => 'widefat',
    ),
    'default'   => 'on',
);

$options['sections']['social-section']['fields'][] =  array(
    'name'    => esc_html__('Social icons style', 'lambda-admin-td'),
    'id'      => 'social_style',
    'type'    => 'select',
    'options' =>  array(
        'social-background'   => 'Show background',
        'social-simple' => 'Hide background'
    ),
    'attr'    =>  array(
        'class' => 'widefat',
    ),
    'default'   => 'social-simple',
);

$options['sections']['social-section']['fields'][] =  array(
    'name' => esc_html__('Social icons size', 'lambda-admin-td'),
    'id' => 'social_size',
    'type' => 'select',
    'options'    =>  array(
        'social-normal' => 'Normal',
        'social-lg'    => 'Big'
    ),
    'attr'    =>  array(
        'class' => 'widefat',
    ),
    'default' => 'social-normal',
);


for ($i = 0; $i < 10; $i++) {

    $options['sections']['social-section']['fields'][] = array(
        'name'    => sprintf(esc_html__('Social %s Icon', 'lambda-admin-td'), $i + 1),
        'id'      => 'social' . $i . '_icon',
        'type'    => 'select',
        'options' => 'icons',
        'default' => '',
        'blank'   => esc_html__('Choose a social network icon', 'lambda-admin-td'),
        'attr'    =>  array(
            'class'    => 'widefat',
        ),
    );
    $options['sections']['social-section']['fields'][] = array(
        'name'    => sprintf(esc_html__('Social %s URL ', 'lambda-admin-td'), $i + 1),
        'id'      => 'social' . $i . '_url',
        'type'    => 'text',
        'default' => '',
        'attr'    =>  array(
            'class'    => 'widefat',
        ),
    );
}

return $options;
