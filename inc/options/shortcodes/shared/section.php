<?php
/**
 * Themes shortcode options go here
 *
 * @package Lambda
 * @subpackage Core
 * @since 1.0
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.59.23
 */

$section_options =  array(
    array(
        'name'    => esc_html__('Text Shadow', 'lambda-admin-td'),
        'desc'    => esc_html__('Adds a text shadow to all the text in this row.', 'lambda-admin-td'),
        'id'      => 'text_shadow',
        'type'    => 'select',
        'options' => array(
            'no-shadow' => esc_html__('No Shadow', 'lambda-admin-td'),
            'shadow'    => esc_html__('Show Shadow', 'lambda-admin-td'),
        ),
        'default' => 'no-shadow',
    ),
    array(
        'name'    => esc_html__('Inner Shadow', 'lambda-admin-td'),
        'desc'    => esc_html__('Adds an inner shadow to the inside of this row.', 'lambda-admin-td'),
        'id'      => 'inner_shadow',
        'type'    => 'select',
        'options' => array(
            'no-shadow' => esc_html__('No Shadow', 'lambda-admin-td'),
            'shadow'    => esc_html__('Show Shadow', 'lambda-admin-td'),
        ),
        'default' => 'no-shadow',
    ),
    array(
        'name'    => esc_html__('Section Width', 'lambda-admin-td'),
        'desc'    => esc_html__('Choose between padded-non padded section', 'lambda-admin-td'),
        'id'      => 'width',
        'type'    => 'select',
        'options' => array(
            'padded'    => esc_html__('Padded', 'lambda-admin-td'),
            'no-padded' => esc_html__('Full Width', 'lambda-admin-td'),
        ),
        'default' => 'padded',
    ),
    array(
        'name'    => esc_html__('Optional class', 'lambda-admin-td'),
        'id'      => 'class',
        'type'    => 'text',
        'default' => '',
        'desc'    => esc_html__('Add an optional class to the section (separated with spaces)', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Optional id', 'lambda-admin-td'),
        'id'      => 'id',
        'type'    => 'text',
        'default' => '',
        'desc'    => esc_html__('Add an optional id to the section', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Optional label', 'lambda-admin-td'),
        'id'      => 'label',
        'type'    => 'text',
        'default' => '',
        'desc'    => esc_html__('Add an optional label for this section, used in bullet nav tooltips', 'lambda-admin-td'),
    ),
    array(
        'name'      => esc_html__('Overlay Colour', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the colour of the video & image overlay', 'lambda-admin-td'),
        'id'        => 'overlay_colour',
        'type'      => 'colour',
        'default'   => '#000000',
    ),
    array(
        'name'      => esc_html__('Overlay Opacity', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the opacity of the video & image overlay', 'lambda-admin-td'),
        'id'        => 'overlay_opacity',
        'type'      => 'slider',
        'default'   => '0',
        'attr'      => array(
            'max'       => 1,
            'min'       => 0,
            'step'      => 0.1,
        )
    ),
    array(
        'name'      => esc_html__('Overlay Grid', 'lambda-admin-td'),
        'desc'      => esc_html__('Adds an overlay pattern image', 'lambda-admin-td'),
        'id'        => 'overlay_grid',
        'type'      => 'slider',
        'default'   => '0',
        'attr'      => array(
            'max'       => 100,
            'min'       => 0,
            'step'      => 10,
        )
    ),
    array(
        'name'    => esc_html__('Background Video mp4', 'lambda-admin-td'),
        'id'      => 'background_video_mp4',
        'type'    => 'text',
        'default' => '',
        'desc'    => esc_html__('Enter url of an mp4 video to use for this rows background.', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Background Video webm', 'lambda-admin-td'),
        'id'      => 'background_video_webm',
        'type'    => 'text',
        'default' => '',
        'desc'    => esc_html__('Enter url of a webm video to use for this rows background.', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Background Image', 'lambda-admin-td'),
        'id'      => 'background_image',
        'store'   => 'url',
        'type'    => 'upload',
        'default' => '',
        'desc'    => esc_html__('Choose an image to use for this rows background.', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Image Background Size', 'lambda-admin-td'),
        'desc'    => esc_html__('Set how the image will fit into the section', 'lambda-admin-td'),
        'id'      => 'background_image_size',
        'type'    => 'select',
        'options' => array(
            'cover' => esc_html__('Full Width', 'lambda-admin-td'),
            'auto'  => esc_html__('Actual Size', 'lambda-admin-td'),
        ),
        'default' => 'cover',
    ),
    array(
        'name'    => esc_html__('Image Background Repeat', 'lambda-admin-td'),
        'id'      => 'background_image_repeat',
        'type'    => 'select',
        'default' => 'no-repeat',
        'options' => array(
            'no-repeat' => esc_html__('No repeat', 'lambda-admin-td'),
            'repeat-x'  => esc_html__('Repeat horizontally', 'lambda-admin-td'),
            'repeat-y'  => esc_html__('Repeat vertically', 'lambda-admin-td'),
            'repeat'    => esc_html__('Repeat horizontally and vertically', 'lambda-admin-td')
        ),
        'desc'    => esc_html__('Set how the image will be repeated', 'lambda-admin-td'),
    ),
    array(
        'name'      => esc_html__('Background Position vertical', 'lambda-admin-td'),
        'desc'      => esc_html__('Set the vertical position of background image. 0 value represents the top horizontal edge of the section. Positive values will push the background image up.', 'lambda-admin-td'),
        'id'        => 'background_position_vertical',
        'type'      => 'slider',
        'default'   => '0',
        'attr'      => array(
            'max'       => 100,
            'min'       => -100,
            'step'      => 1,
        )
    ),
    array(
        'name'    => esc_html__('Background Image Attachment', 'lambda-admin-td'),
        'id'      => 'background_image_attachment',
        'type'    => 'select',
        'default' => 'scroll',
        'options' => array(
            'scroll' => esc_html__('Scroll', 'lambda-admin-td'),
            'fixed'  => esc_html__('Fixed', 'lambda-admin-td'),
        ),
        'desc'    => esc_html__('Set the way the background image is attached to the page. Scroll = normal Fixed = The background is fixed with regard to the viewport.', 'lambda-admin-td'),
    ),
    array(
        'name'    => esc_html__('Background Image Parallax Effect', 'lambda-admin-td'),
        'id'      => 'background_image_parallax',
        'type'    => 'select',
        'default' => 'off',
        'options' => array(
            'off' => esc_html__('Off', 'lambda-admin-td'),
            'on'  => esc_html__('On', 'lambda-admin-td'),
        ),
        'desc'    => esc_html__('Toggles the background image parallax effect.', 'lambda-admin-td'),
    ),
    array(
        'name'      => esc_html__('Parallax Effect Start Position ', 'lambda-admin-td'),
        'desc'      => esc_html__('Sets the position of the image in pixels that the parallax effect will start from.', 'lambda-admin-td'),
        'id'        => 'background_image_parallax_start',
        'type'      => 'slider',
        'default'   => '0',
        'attr'      => array(
            'max'       => 500,
            'min'       => -500,
            'step'      => 1
        )
    ),
    array(
        'name'      => esc_html__('Parallax Effect End Position', 'lambda-admin-td'),
        'desc'      => esc_html__('Sets the percentage of the image in pixels that the parallax effect will end up at.', 'lambda-admin-td'),
        'id'        => 'background_image_parallax_end',
        'type'      => 'slider',
        'default'   => '-80',
        'attr'      => array(
            'max'       => 500,
            'min'       => -500,
            'step'      => 1
        )
    ),
    array(
        'name'    => esc_html__('Section Height', 'lambda-admin-td'),
        'desc'    => esc_html__('Section will vertically cover the entire viewport if Full Height is selected', 'lambda-admin-td'),
        'id'      => 'height',
        'type'    => 'select',
        'options' => array(
            'normal'       => esc_html__('Normal', 'lambda-admin-td'),
            'fullheight'   => esc_html__('Full Height', 'lambda-admin-td'),
        ),
        'default' => 'normal',
    ),
    array(
        'name'    => esc_html__('Section Transparency', 'lambda-admin-td'),
        'desc'    => esc_html__('Section will be tranparent if On is selected', 'lambda-admin-td'),
        'id'      => 'transparency',
        'type'    => 'select',
        'options' => array(
            'transparent'   => esc_html__('On', 'lambda-admin-td'),
            'opaque'        => esc_html__('Off', 'lambda-admin-td'),
        ),
        'default' => 'opaque',
    ),
    array(
        'name'    => esc_html__('Section Content Vertical Alignment', 'lambda-admin-td'),
        'desc'    => esc_html__('Align the content of the section vertically', 'lambda-admin-td'),
        'id'      => 'vertical_alignment',
        'type'    => 'select',
        'options' => array(
            'default'   => esc_html__('Normal', 'lambda-admin-td'),
            'top'       => esc_html__('Top', 'lambda-admin-td'),
            'middle'    => esc_html__('Middle', 'lambda-admin-td'),
            'bottom'    => esc_html__('Bottom', 'lambda-admin-td'),
        ),
        'default' => 'default',
    ),
);

$responsive_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php';
return array_merge($section_options, $responsive_options);
