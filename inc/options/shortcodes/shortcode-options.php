<?php
/**
 * Sets up all theme shortcode options
 *
 * @package Lambda
 * @subpackage Frontend
 * @since 0.1
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 */

// get available menus for menu shortcode
$menus_data = get_terms('nav_menu');
$menus = array();
$menus['blank'] = esc_html__('Please select a menu', 'lambda-admin-td');
foreach ($menus_data as $single_menu) {
    $menus[$single_menu->slug] = $single_menu->name;
}

return array(
    // SECTION
    'vc_row' => array(
        'shortcode'     => 'vc_row',
        'title'         => esc_html__('Row', 'lambda-admin-td'),
        'desc'          => esc_html__('A Horizontal section to add content to.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => true,
        'sections'      => array(
            array(
                'title' => esc_html__('Section', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/section.php'
            )
        )
    ),
    'vc_row_inner' => array(
        'shortcode'     => 'vc_row_inner',
        'title'         => esc_html__('Row', 'lambda-admin-td'),
        'desc'          => esc_html__('A Horizontal section to add content to.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => true,
        'sections'      => array(
            array(
                'title' => esc_html__('General', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Extra Classes', 'lambda-admin-td'),
                        'desc'    => esc_html__('Add any extra classes you need to add to this column. ( space separated )', 'lambda-admin-td'),
                        'id'      => 'extra_classes',
                        'default'     =>  '',
                        'type'        => 'text',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            )
        )
    ),
    // SECTION
    'vc_column' => array(
        'shortcode'     => 'vc_column',
        'title'         => esc_html__('Column', 'lambda-admin-td'),
        'desc'          => esc_html__('Column shortcode for use inside a row.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => true,
        'sections'      => array(
            array(
                'title' => esc_html__('General', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Column Alignment', 'lambda-admin-td'),
                        'id'        => 'align',
                        'type'      => 'select',
                        'default'   => 'default',
                        'options' => array(
                            'default' => esc_html__('Default (no class)', 'lambda-admin-td'),
                            'left'    => esc_html__('Left', 'lambda-admin-td'),
                            'center'  => esc_html__('Center', 'lambda-admin-td'),
                            'right'   => esc_html__('Right', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Sets the alignment items in the column.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Column Background Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the background color of the column', 'lambda-admin-td'),
                        'id'        => 'column_colour',
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                    array(
                        'name'      => esc_html__('Small screens Column Alignment', 'lambda-admin-td'),
                        'id'        => 'align_sm',
                        'type'      => 'select',
                        'default'   => 'default',
                        'options' => array(
                            'default' => esc_html__('Default (no class)', 'lambda-admin-td'),
                            'left'    => esc_html__('Left', 'lambda-admin-td'),
                            'center'  => esc_html__('Center', 'lambda-admin-td'),
                            'right'   => esc_html__('Right', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Overrides the alignment in the column on small screens.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Mobile Column Span', 'lambda-admin-td'),
                        'desc'      => esc_html__('Size of column to use on mobile sized displays (<768px) as a fraction of the 12-grid row', 'lambda-admin-td'),
                        'id'        => 'xs_col',
                        'type'      => 'select',
                        'default'   => 'default',
                        'options'   => array(
                            'default' => esc_html__('Not Set', 'lambda-admin-td'),
                            '1'       => esc_html__('1/12', 'lambda-admin-td'),
                            '2'       => esc_html__('2/12', 'lambda-admin-td'),
                            '3'       => esc_html__('3/12', 'lambda-admin-td'),
                            '4'       => esc_html__('4/12', 'lambda-admin-td'),
                            '5'       => esc_html__('5/12', 'lambda-admin-td'),
                            '6'       => esc_html__('6/12', 'lambda-admin-td'),
                            '7'       => esc_html__('7/12', 'lambda-admin-td'),
                            '8'       => esc_html__('8/12', 'lambda-admin-td'),
                            '9'       => esc_html__('9/12', 'lambda-admin-td'),
                            '10'      => esc_html__('10/12', 'lambda-admin-td'),
                            '11'      => esc_html__('11/12', 'lambda-admin-td'),
                            '12'      => esc_html__('12/12', 'lambda-admin-td')
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Tablet Column Span', 'lambda-admin-td'),
                        'desc'      => esc_html__('Size of column to use on tablet sized displays (>768px <992px) as a fraction of the 12-grid row', 'lambda-admin-td'),
                        'id'        => 'sm_col',
                        'type'      => 'select',
                        'default'   => 'default',
                        'options'   => array(
                            'default' => esc_html__('Not Set', 'lambda-admin-td'),
                            '1'       => esc_html__('1/12', 'lambda-admin-td'),
                            '2'       => esc_html__('2/12', 'lambda-admin-td'),
                            '3'       => esc_html__('3/12', 'lambda-admin-td'),
                            '4'       => esc_html__('4/12', 'lambda-admin-td'),
                            '5'       => esc_html__('5/12', 'lambda-admin-td'),
                            '6'       => esc_html__('6/12', 'lambda-admin-td'),
                            '7'       => esc_html__('7/12', 'lambda-admin-td'),
                            '8'       => esc_html__('8/12', 'lambda-admin-td'),
                            '9'       => esc_html__('9/12', 'lambda-admin-td'),
                            '10'      => esc_html__('10/12', 'lambda-admin-td'),
                            '11'      => esc_html__('11/12', 'lambda-admin-td'),
                            '12'      => esc_html__('12/12', 'lambda-admin-td')
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Large Desktop Column Span', 'lambda-admin-td'),
                        'desc'      => esc_html__('Size of column to use on large desktop displays (>1200x) as a fraction of the 12-grid row', 'lambda-admin-td'),
                        'id'        => 'lg_col',
                        'type'      => 'select',
                        'default'   => 'default',
                        'options'   => array(
                            'default' => esc_html__('Not Set', 'lambda-admin-td'),
                            '1'       => esc_html__('1/12', 'lambda-admin-td'),
                            '2'       => esc_html__('2/12', 'lambda-admin-td'),
                            '3'       => esc_html__('3/12', 'lambda-admin-td'),
                            '4'       => esc_html__('4/12', 'lambda-admin-td'),
                            '5'       => esc_html__('5/12', 'lambda-admin-td'),
                            '6'       => esc_html__('6/12', 'lambda-admin-td'),
                            '7'       => esc_html__('7/12', 'lambda-admin-td'),
                            '8'       => esc_html__('8/12', 'lambda-admin-td'),
                            '9'       => esc_html__('9/12', 'lambda-admin-td'),
                            '10'      => esc_html__('10/12', 'lambda-admin-td'),
                            '11'      => esc_html__('11/12', 'lambda-admin-td'),
                            '12'      => esc_html__('12/12', 'lambda-admin-td')
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Extra Classes', 'lambda-admin-td'),
                        'desc'    => esc_html__('Add any extra classes you need to add to this column. ( space separated )', 'lambda-admin-td'),
                        'id'      => 'extra_classes',
                        'default'     =>  '',
                        'type'        => 'text',
                    ),
                    array(
                        'name'      =>  esc_html__('Top border', 'lambda-admin-td'),
                        'id'        => 'border_top',
                        'desc'      => esc_html__('Top border on the column', 'lambda-admin-td'),
                        'type'      => 'select',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default'   => 'off',
                    ),
                    array(
                        'name'      =>  esc_html__('Right border', 'lambda-admin-td'),
                        'id'        => 'border_right',
                        'desc'      => esc_html__('Right border on the column', 'lambda-admin-td'),
                        'type'      => 'select',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default'   => 'off',
                    ),
                    array(
                        'name'      =>  esc_html__('Bottom border', 'lambda-admin-td'),
                        'id'        => 'border_bottom',
                        'desc'      => esc_html__('Bottom border on the column', 'lambda-admin-td'),
                        'type'      => 'select',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default'   => 'off',
                    ),
                    array(
                        'name'      =>  esc_html__('Left border', 'lambda-admin-td'),
                        'id'        => 'border_left',
                        'desc'      => esc_html__('Left border on the column', 'lambda-admin-td'),
                        'type'      => 'select',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default'   => 'off',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/animation.php'
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            ),
        )
    ),
    'heading' => array(
        'shortcode'     => 'heading',
        'title'         => esc_html__('Heading', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates a heading.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => true,
        'sections'      => array(
            array(
                'title' => esc_html__('Header', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/heading.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/animation.php'
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            ),
        )
    ),
    'animated_heading' => array(
        'shortcode'     => 'animated_heading',
        'title'         => esc_html__('Animated Heading', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates an animated heading.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => true,
        'sections'      => array(
            array(
                'title' => esc_html__('Header', 'lambda-admin-td'),
                'fields' => array(
                     array(
                        'name'        => esc_html__('Header Text', 'lambda-admin-td'),
                        'id'          => 'content',
                        'type'        => 'text',
                        'default'     => '',
                        'desc'        => esc_html__('Text that will be used for the header. Labels will be added to the text.', 'lambda-admin-td'),
                        'admin_label' => true,
                    ),
                    array(
                        'name'    => esc_html__('Labels', 'lambda-admin-td'),
                        'desc'    => esc_html__('Animating labels, separate labels with |. Will be added to the end of the header.', 'lambda-admin-td'),
                        'id'      => 'labels',
                        'default' =>  '',
                        'type'    => 'textarea',
                    ),
                    array(
                        'name'      => esc_html__('Text Animation', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the animation type for the labels', 'lambda-admin-td'),
                        'id'        => 'text_animation',
                        'type'      => 'select',
                        'options'   => array(
                            'rotate-1'          => esc_html__('Rotate 1', 'lambda-admin-td'),
                            'letters rotate-2'  => esc_html__('Rotate 2', 'lambda-admin-td'),
                            'letters rotate-3'  => esc_html__('Rotate 3', 'lambda-admin-td'),
                            'letters type'      => esc_html__('Type', 'lambda-admin-td'),
                            'loading-bar'       => esc_html__('Loading Bar', 'lambda-admin-td'),
                            'slide'             => esc_html__('Slide', 'lambda-admin-td'),
                            'clip is-full-width'  => esc_html__('Clip', 'lambda-admin-td'),
                            'zoom'                => esc_html__('Zoom', 'lambda-admin-td'),
                            'letters scale'       => esc_html__('Scale', 'lambda-admin-td'),
                            'push'  => esc_html__('Push', 'lambda-admin-td')
                        ),
                        'default'   => 'rotate-1'
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
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/animation.php'
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            ),
        )
    ),
    'service' => array(
        'shortcode'     => 'service',
        'title'         => esc_html__('Single Service', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays a single service.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Services', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Service', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select a service post to show.', 'lambda-admin-td'),
                        'id'      => 'service',
                        'default' =>  '',
                        'admin_label' => true,
                        'type'    => 'select',
                        'options' => 'custom_post_type',
                        'post_type' => 'oxy_service'
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Service Item Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/service.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'services' =>array(
        'shortcode'     => 'services',
        'title'         => esc_html__('Services', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays a horizontal list of services.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Services', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Choose a category', 'lambda-admin-td'),
                        'desc'    => esc_html__('Category of services to show', 'lambda-admin-td'),
                        'id'      => 'category',
                        'default' =>  '',
                        'admin_label' => true,
                        'type'    => 'select',
                        'options' => 'taxonomy',
                        'taxonomy' => 'oxy_service_category',
                        'blank_label' => esc_html__('All Categories', 'lambda-admin-td')
                    ),
                    array(
                        'name'    => esc_html__('Services Count', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of services to show(set to 0 to show all)', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '3',
                        'admin_label' => true,
                        'attr'    => array(
                            'max'  => 30,
                            'min'  => 0,
                            'step' => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to show the services in', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'select',
                        'options' => array(
                            2 => esc_html__('Two columns', 'lambda-admin-td'),
                            3 => esc_html__('Three columns', 'lambda-admin-td'),
                            4 => esc_html__('Four columns', 'lambda-admin-td'),
                            6 => esc_html__('Six columns', 'lambda-admin-td'),
                        ),
                        'default' => '3',
                    )
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Service Item Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/service.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' =>  array_merge(
                    include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php',
                    array(
                        array(
                            'name'    => esc_html__('Animation Timing', 'lambda-admin-td'),
                            'desc'    => esc_html__('Will animate all services at once or each one individually .', 'lambda-admin-td'),
                            'id'      => 'scroll_animation_timing',
                            'type'    => 'select',
                            'default' => 'staggered',
                            'options' => array(
                                'all-same'   => esc_html__('All items appear at same time', 'lambda-admin-td'),
                                'staggered'  => esc_html__('Staggered over Animation Delay', 'lambda-admin-td'),
                            ),
                        )
                    )
                )
            )
        )
    ),
     // TESTIMONIALS SHORTCODE SECTION
    'testimonials' => array(
        'shortcode' => 'testimonials',
        'title'     => esc_html__('Testimonials', 'lambda-admin-td'),
        'desc'      => esc_html__('Displays a slideshow of testimonials.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Testimonials', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Choose a group', 'lambda-admin-td'),
                        'desc'    => esc_html__('Group of testimonials to show', 'lambda-admin-td'),
                        'id'      => 'group',
                        'default' =>  '',
                        'type'    => 'select',
                        'admin_label' => true,
                        'admin_label' => true,
                        'options' => 'taxonomy',
                        'taxonomy' => 'oxy_testimonial_group',
                        'blank_label' => esc_html__('All Testimonials', 'lambda-admin-td')
                    ),
                    array(
                        'name'    => esc_html__('Number Of Testimonials', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of Testimonials to display(set to 0 to show all)', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'admin_label' => true,
                        'default' => '3',
                        'attr'    => array(
                            'max'   => 10,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'      => esc_html__('Layout', 'lambda-admin-td'),
                        'id'        => 'layout',
                        'type'      => 'select',
                        'default'   => 'image',
                        'options' => array(
                            'image'           => esc_html__('Quote, Quotee & Image', 'lambda-admin-td'),
                            'no-image'        => esc_html__('Quote, Quotee', 'lambda-admin-td'),
                            'quote'           => esc_html__('Quote', 'lambda-admin-td'),
                            'quotee'          => esc_html__('Quotee & Image', 'lambda-admin-td'),
                            'quotee-no-image' => esc_html__('Quotee', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Sets layout style of the quote', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Minimum Height', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set a minimum height for the slider(in pxs), i.e 500', 'lambda-admin-td'),
                        'id'      => 'min_height',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'      => esc_html__('Speed', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the speed of the slideshow cycling, in milliseconds', 'lambda-admin-td'),
                        'id'        => 'speed',
                        'type'      => 'slider',
                        'default'   => '7000',
                        'attr'      => array(
                            'max'       => 15000,
                            'min'       => 2000,
                            'step'      => 1000
                        )
                    ),
                    array(
                        'name'      => esc_html__('Transition type', 'lambda-admin-td'),
                        'id'        => 'animation_type',
                        'type'      => 'select',
                        'default'   => 'slide',
                        'options' => array(
                            'slide' => esc_html__('Slide', 'lambda-admin-td'),
                            'fade'  => esc_html__('Fade', 'lambda-admin-td'),
                        ),
                        'desc' => esc_html__('Sets the type of animation that occurs between quotes.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Show Controls', 'lambda-admin-td'),
                        'id'        => 'show_controls',
                        'type'      => 'select',
                        'default'   => 'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Toggles the slideshow bullet nav controls at the bottom.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Randomize', 'lambda-admin-td'),
                        'desc'    => esc_html__('Randomize the ordering of the testimonials', 'lambda-admin-td'),
                        'id'      => 'randomize',
                        'type'    => 'select',
                        'default' => 'off',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Text Align', 'lambda-admin-td'),
                        'id'        => 'text_align',
                        'type'      => 'select',
                        'default'   => 'center',
                        'options' => array(
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                            'justify'  => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the blockquote and citation of the testimonial', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
     // TESTIMONIALS LIST SHORTCODE SECTION
    'testimonials_list' => array(
        'shortcode' => 'testimonials_list',
        'title'     => esc_html__('Testimonials List', 'lambda-admin-td'),
        'desc'      => esc_html__('Displays a list of testimonials.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Testimonials', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Choose a group', 'lambda-admin-td'),
                        'desc'    => esc_html__('Group of testimonials to show', 'lambda-admin-td'),
                        'id'      => 'group',
                        'default' =>  '',
                        'type'    => 'select',
                        'admin_label' => true,
                        'admin_label' => true,
                        'options' => 'taxonomy',
                        'taxonomy' => 'oxy_testimonial_group',
                        'blank_label' => esc_html__('All Testimonials', 'lambda-admin-td')
                    ),
                    array(
                        'name'    => esc_html__('Number Of Testimonials', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of Testimonials to display(set to 0 to show all)', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'admin_label' => true,
                        'default' => '3',
                        'attr'    => array(
                            'max'   => 10,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('List Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to show testimonials in', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'select',
                        'admin_label' => true,
                        'options' => array(
                            2 => esc_html__('Two columns', 'lambda-admin-td'),
                            3 => esc_html__('Three columns', 'lambda-admin-td'),
                            4 => esc_html__('Four columns', 'lambda-admin-td'),
                            6 => esc_html__('Six columns', 'lambda-admin-td'),
                        ),
                        'default' => '3',
                    ),
                    array(
                        'name'    => esc_html__('Show avatars', 'lambda-admin-td'),
                        'desc'    => esc_html__('Display the featured image as avatar', 'lambda-admin-td'),
                        'id'      => 'show_image',
                        'type'    => 'select',
                        'default' => 'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Animation Timing', 'lambda-admin-td'),
                        'desc'    => esc_html__('Will animate all testimonials at once or each one individually .', 'lambda-admin-td'),
                        'id'      => 'testimonial_scroll_animation_timing',
                        'type'    => 'select',
                        'default' => 'staggered',
                        'options' => array(
                            'all-same'   => esc_html__('All items appear at same time', 'lambda-admin-td'),
                            'staggered'  => esc_html__('Staggered over Animation Delay', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
     /* Staff Shortcodes */
    'staff_list' =>  array(
        'shortcode'     => 'staff_list',
        'title'         => esc_html__('Staff List', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays a list of staff members in columns.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Staff members list', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Choose a department', 'lambda-admin-td'),
                        'desc'    => esc_html__('Populate your list from a department', 'lambda-admin-td'),
                        'id'      => 'department',
                        'default' =>  '',
                        'type'    => 'select',
                        'admin_label' => true,
                        'options' => 'taxonomy',
                        'taxonomy' => 'oxy_staff_department',
                        'blank_label' => esc_html__('Select a department', 'lambda-admin-td')
                    ),
                    array(
                        'name'    => esc_html__('Number Of members', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of members to display(set to 0 to show all)', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'admin_label' => true,
                        'default' => '3',
                        'attr'    => array(
                            'max'  => 30,
                            'min'  => 0,
                            'step' => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('List Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to show staff in', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'select',
                        'admin_label' => true,
                        'options' => array(
                            2 => esc_html__('Two columns', 'lambda-admin-td'),
                            3 => esc_html__('Three columns', 'lambda-admin-td'),
                            4 => esc_html__('Four columns', 'lambda-admin-td'),
                            6 => esc_html__('Six columns', 'lambda-admin-td'),
                        ),
                        'default' => '3',
                    )
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Staff Items Options', 'lambda-admin-td'),
                'fields' =>  include OXY_THEME_DIR . 'inc/options/shortcodes/shared/staff.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => array_merge(
                    include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php',
                    array(
                        array(
                            'name'    => esc_html__('Animation Timing', 'lambda-admin-td'),
                            'desc'    => esc_html__('Will animate all staff at once or each one individually .', 'lambda-admin-td'),
                            'id'      => 'scroll_animation_timing',
                            'type'    => 'select',
                            'default' => 'staggered',
                            'options' => array(
                                'all-same'   => esc_html__('All items appear at same time', 'lambda-admin-td'),
                                'staggered'  => esc_html__('Staggered over Animation Delay', 'lambda-admin-td'),
                            ),
                        )
                    )
                )
            )
        ),
    ),
    'staff_featured' => array(
        'shortcode'     => 'staff_featured',
        'title'         => esc_html__('Single Staff', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays a section about one member of staff.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Staff Member', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Featured member', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select the staff member that will be featured', 'lambda-admin-td'),
                        'id'      => 'member',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'staff_featured',
                    )
                ),
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Staff Item Options', 'lambda-admin-td'),
                'fields' =>  include OXY_THEME_DIR . 'inc/options/shortcodes/shared/staff.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    // PORTFOLIO SHORTCODE OPTIONS
    'portfolio' => array(
        'shortcode'     => 'portfolio',
        'title'         => esc_html__('Portfolio', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays a set of portfolio items in columns.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Portfolio', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Category', 'lambda-admin-td'),
                        'desc'    => esc_html__('Categories to show (leave blank to show all)', 'lambda-admin-td'),
                        'id'      => 'categories',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'taxonomy',
                        'taxonomy' => 'oxy_portfolio_categories',
                        'admin_label' => true,
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Portfolio Filters', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select which filters to show above the portfolio.', 'lambda-admin-td'),
                        'id'      => 'filters',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => array(
                            'categories' => esc_html__('Category Filter', 'lambda-admin-td'),
                            'sort'       => esc_html__('Sort Options', 'lambda-admin-td'),
                            'order'      => esc_html__('Sort Order', 'lambda-admin-td'),
                        ),
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Portfolio items count', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of portfolio items to display ( 0 for all )', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '0',
                        'attr'    => array(
                            'max'   => 24,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Mobile Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on mobile sized displays (<768px)', 'lambda-admin-td'),
                        'id'      => 'xs_col',
                        'type'    => 'slider',
                        'default' => '1',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Tablet Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on tablet sized displays (>768px <992px)', 'lambda-admin-td'),
                        'id'      => 'sm_col',
                        'type'    => 'slider',
                        'default' => '2',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Desktop Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on regular desktop displays (>992px <1200px)', 'lambda-admin-td'),
                        'id'      => 'md_col',
                        'type'    => 'slider',
                        'default' => '3',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Large Desktop Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on large desktop displays (>1200x)', 'lambda-admin-td'),
                        'id'      => 'lg_col',
                        'type'    => 'slider',
                        'default' => '5',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Layout Mode', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a method to layout the portfolio items in the list.', 'lambda-admin-td'),
                        'id'      => 'layout_mode',
                        'type'    => 'select',
                        'default' => 'fitRows',
                        'options' => array(
                            'fitRows' => esc_html__('Align by Rows', 'lambda-admin-td'),
                            'masonry' => esc_html__('Align Vertically', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Portfolio Items Padding', 'lambda-admin-td'),
                        'desc'    => esc_html__('Space to add between portfolio items in pixels.', 'lambda-admin-td'),
                        'id'      => 'item_padding',
                        'type'    => 'slider',
                        'default' => '15',
                        'attr'    => array(
                            'max'   => 80,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Pagination', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select type of pagination to use for this portfolio list.', 'lambda-admin-td'),
                        'id'      => 'pagination',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => array(
                            'none'      => esc_html__('No Pagination', 'lambda-admin-td'),
                            'next_prev' => esc_html__('Next and Previous Buttons', 'lambda-admin-td'),
                            'pages'     => esc_html__('Page Numbers', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Portfolio Items', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Item image size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the size of images that will be loaded in the portfolio (Portfolio Size can be changed on Theme Portfolio Options Page)', 'lambda-admin-td'),
                        'id'      => 'item_size',
                        'type'    => 'select',
                        'default' => 'portfolio-thumb',
                        'options' => array(
                            'portfolio-thumb' => esc_html__('Portfolio Size', 'lambda-admin-td'),
                            'thumbnail'       => esc_html__('Thumbnail', 'lambda-admin-td'),
                            'medium'          => esc_html__('Medium', 'lambda-admin-td'),
                            'large'           => esc_html__('Large', 'lambda-admin-td'),
                            'full'            => esc_html__('Full', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Hover Overlay Type', 'lambda-admin-td'),
                        'id'        => 'item_overlay',
                        'type'      => 'select',
                        'default'   => 'icon',
                        'options' => array(
                            'icon'         => esc_html__('Show Icon', 'lambda-admin-td'),
                            'caption'      => esc_html__('Show Title & Caption', 'lambda-admin-td'),
                            'buttons'      => esc_html__('Show Title & Buttons', 'lambda-admin-td'),
                            'buttons_only' => esc_html__('Buttons Only', 'lambda-admin-td'),
                            'none'         => esc_html__('No Hover Overlay', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Choose the type of hover overlay you would like to appear.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Hover Overlay Link Type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select the link type to use for the item.', 'lambda-admin-td'),
                        'id'      => 'item_link_type',
                        'type'    => 'select',
                        'default' => 'magnific',
                        'options' => array(
                            'magnific'      => esc_html__('Magnific Single Item', 'lambda-admin-td'),
                            'magnific-all'  => esc_html__('Magnific All Items', 'lambda-admin-td'),
                            'item'     => esc_html__('Link', 'lambda-admin-td'),
                            'no-link'  => esc_html__('No Link ', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Item Show Captions Below', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select a portfolio style to use for the portfolio items.', 'lambda-admin-td'),
                        'id'      => 'item_captions_below',
                        'type'    => 'select',
                        'default' => 'hide',
                        'options' => array(
                            'hide' => esc_html__('Image Only', 'lambda-admin-td'),
                            'show' => esc_html__('Image + Captions Below', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Link Caption Title Below', 'lambda-admin-td'),
                        'desc'    => esc_html__('Makes the Captions Below Title a link.', 'lambda-admin-td'),
                        'id'      => 'captions_below_link_type',
                        'type'    => 'select',
                        'default' => 'item',
                        'options' => array(
                            'magnific'      => esc_html__('Magnific Single Item', 'lambda-admin-td'),
                            'magnific-all'  => esc_html__('Magnific All Items', 'lambda-admin-td'),
                            'item'     => esc_html__('Link', 'lambda-admin-td'),
                            'no-link'  => esc_html__('No Link ', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Item Caption Horizontal Alignment', 'lambda-admin-td'),
                        'id'        => 'item_caption_align',
                        'type'      => 'select',
                        'default'   => 'center',
                        'options' => array(
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                            'justify'  => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('The text alignment of the caption text / title.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Caption Vertical Alignment', 'lambda-admin-td'),
                        'id'        => 'item_caption_vertical',
                        'type'      => 'select',
                        'default'   => 'middle',
                        'options' => array(
                            'middle' => esc_html__('Middle', 'lambda-admin-td'),
                            'top'    => esc_html__('Top', 'lambda-admin-td'),
                            'bottom' => esc_html__('Bottom', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Vertical alignment of the caption title and text.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Magnific Popup Captions', 'lambda-admin-td'),
                        'id'        => 'magnific_caption',
                        'type'      => 'select',
                        'default'   => 'image_caption',
                        'options' => array(
                            'image_caption'         => esc_html__('Media Image Caption', 'lambda-admin-td'),
                            'post_title_caption'    => esc_html__('Post Title', 'lambda-admin-td'),
                            'off'                   => esc_html__('No Captions', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Caption shown below the magnific popup image', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Hover Animation', 'lambda-admin-td'),
                        'id'        => 'item_overlay_animation',
                        'type'        => 'select',
                        'default'     => 'fade-in',
                        'options'     => array(
                            'fade-in'     => esc_html__('Fade in', 'lambda-admin-td'),
                            'fade-in from-top'    => esc_html__('Fade From Top', 'lambda-admin-td'),
                            'fade-in from-bottom' => esc_html__('Fade From Bottom', 'lambda-admin-td'),
                            'fade-in from-left'   => esc_html__('Fade From Left', 'lambda-admin-td'),
                            'fade-in from-right'  => esc_html__('Fade From Right', 'lambda-admin-td'),
                            'fade-none'        => esc_html__('No Animation', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('What animation will be used to reveal the image hover overlay.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Image Hover Effects Filter', 'lambda-admin-td'),
                        'id'      => 'item_hover_filter',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => array(
                            'none'      => esc_html__('None', 'lambda-admin-td'),
                            'sepia'     => esc_html__('Sepia', 'lambda-admin-td'),
                            'grayscale' => esc_html__('Grayscale', 'lambda-admin-td'),
                            'blur'      => esc_html__('Blur', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Effects filter to apply to the image on hover.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Hover Effects Filter Behaviour', 'lambda-admin-td'),
                        'id'      => 'hover_filter_invert',
                        'type'    => 'select',
                        'default' => 'image-filter-onhover',
                        'options' => array(
                            'image-filter-onhover'    => esc_html__('Apply Filter On Hover', 'lambda-admin-td'),
                            'image-filter-invert'     => esc_html__('Apply Filter On Hover Out', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('When to apply the Hover Effects Filter.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Grid', 'lambda-admin-td'),
                        'desc'      => esc_html__('Grid pattern to apply over the image on hover.', 'lambda-admin-td'),
                        'id'        => 'item_overlay_grid',
                        'type'      => 'slider',
                        'default'   => '0',
                        'attr'      => array(
                            'max'       => 100,
                            'min'       => 0,
                            'step'      => 10,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Icon', 'lambda-admin-td'),
                        'desc'      => esc_html__('Icon to show on the hover overlay.', 'lambda-admin-td'),
                        'id'        => 'item_overlay_icon',
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => ''
                    ),
                    array(
                        'name'        => esc_html__('Scroll Animation', 'lambda-admin-td'),
                        'desc'        => esc_html__('Animation that will occur when the user scrolls onto the element.', 'lambda-admin-td'),
                        'id'          => 'item_scroll_animation',
                        'type'        => 'select',
                        'default'     => 'none',
                        'options'     => include OXY_THEME_DIR . 'inc/options/global-options/animations.php',
                    ),
                    array(
                        'name'    => esc_html__('Animation Delay', 'lambda-admin-td'),
                        'desc'    => esc_html__('Delay after scrolling onto the element before animation starts.', 'lambda-admin-td'),
                        'id'      => 'item_scroll_animation_delay',
                        'type'    => 'slider',
                        'default' => '0',
                        'attr'    => array(
                            'max'  => 4,
                            'min'  => 0,
                            'step' => 0.1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Animation Timing', 'lambda-admin-td'),
                        'desc'    => esc_html__('Will load all portfolio items at once or each one individually .', 'lambda-admin-td'),
                        'id'      => 'item_scroll_animation_timing',
                        'type'    => 'select',
                        'default' => 'staggered',
                        'options' => array(
                            'all-same'   => esc_html__('All items appear at same time', 'lambda-admin-td'),
                            'staggered'  => esc_html__('Staggered over Animation Delay', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/padding.php'
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            )
        )
    ),
    // PORTFOLIO SHORTCODE OPTIONS
    'portfolio_masonry' => array(
        'shortcode'     => 'portfolio_masonry',
        'title'         => esc_html__('Masonry Portfolio', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays a set of portfolio items using a masonry style.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Portfolio', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Category', 'lambda-admin-td'),
                        'desc'    => esc_html__('Categories to show (leave blank to show all)', 'lambda-admin-td'),
                        'id'      => 'categories',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'taxonomy',
                        'taxonomy' => 'oxy_portfolio_categories',
                        'admin_label' => true,
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Portfolio Filters', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select which filters to show above the portfolio.', 'lambda-admin-td'),
                        'id'      => 'filters',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => array(
                            'categories' => esc_html__('Category Filter', 'lambda-admin-td'),
                            'sort'       => esc_html__('Sort Options', 'lambda-admin-td'),
                            'order'      => esc_html__('Sort Order', 'lambda-admin-td'),
                        ),
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Portfolio items count', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of portfolio items to display ( 0 for all )', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '0',
                        'admin_label' => true,
                        'attr'    => array(
                            'max'   => 24,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Mobile Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on mobile sized displays (<768px)', 'lambda-admin-td'),
                        'id'      => 'xs_col',
                        'type'    => 'slider',
                        'default' => '1',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Tablet Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on tablet sized displays (>768px <992px)', 'lambda-admin-td'),
                        'id'      => 'sm_col',
                        'type'    => 'slider',
                        'default' => '2',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Desktop Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on regular desktop displays (>992px <1200px)', 'lambda-admin-td'),
                        'id'      => 'md_col',
                        'type'    => 'slider',
                        'default' => '4',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Large Desktop Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of columns to use on large desktop displays (>1200x)', 'lambda-admin-td'),
                        'id'      => 'lg_col',
                        'type'    => 'slider',
                        'default' => '6',
                        'attr'    => array(
                            'max'   => 12,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Pagination', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select type of pagination to use for this portfolio list.', 'lambda-admin-td'),
                        'id'      => 'pagination',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => array(
                            'none'      => esc_html__('No Pagination', 'lambda-admin-td'),
                            'next_prev' => esc_html__('Next and Previous Buttons', 'lambda-admin-td'),
                            'pages'     => esc_html__('Page Numbers', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Portfolio Items', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Item image size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the size of images that will be loaded in the portfolio (Portfolio Size can be changed on Theme Portfolio Options Page)', 'lambda-admin-td'),
                        'id'      => 'item_size',
                        'type'    => 'select',
                        'default' => 'full',
                        'options' => array(
                            'portfolio-thumb' => esc_html__('Portfolio Size', 'lambda-admin-td'),
                            'thumbnail'       => esc_html__('Thumbnail', 'lambda-admin-td'),
                            'medium'          => esc_html__('Medium', 'lambda-admin-td'),
                            'large'           => esc_html__('Large', 'lambda-admin-td'),
                            'full'            => esc_html__('Full', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Portfolio Items Padding', 'lambda-admin-td'),
                        'desc'    => esc_html__('Space to add between portfolio items in pixels.', 'lambda-admin-td'),
                        'id'      => 'item_padding',
                        'type'    => 'slider',
                        'default' => '0',
                        'attr'    => array(
                            'max'   => 80,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'      => esc_html__('Hover Overlay Type', 'lambda-admin-td'),
                        'id'        => 'item_overlay',
                        'type'      => 'select',
                        'default'   => 'icon',
                        'options' => array(
                            'icon'         => esc_html__('Show Icon', 'lambda-admin-td'),
                            'caption'      => esc_html__('Show Title & Caption', 'lambda-admin-td'),
                            'buttons'      => esc_html__('Show Title & Buttons', 'lambda-admin-td'),
                            'buttons_only' => esc_html__('Buttons Only', 'lambda-admin-td'),
                            'none'         => esc_html__('No Hover Overlay', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Choose the type of hover overlay you would like to appear.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Hover Overlay Link Type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select the link type to use for the item.', 'lambda-admin-td'),
                        'id'      => 'item_link_type',
                        'type'    => 'select',
                        'default' => 'magnific',
                        'options' => array(
                            'magnific' => esc_html__('Magnific', 'lambda-admin-td'),
                            'magnific-all'  => esc_html__('Magnific All Items', 'lambda-admin-td'),
                            'item'     => esc_html__('Link', 'lambda-admin-td'),
                            'no-link'  => esc_html__('No Link ', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Image Hover Effects Filter', 'lambda-admin-td'),
                        'id'      => 'item_hover_filter',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => array(
                            'none'      => esc_html__('None', 'lambda-admin-td'),
                            'sepia'     => esc_html__('Sepia', 'lambda-admin-td'),
                            'grayscale' => esc_html__('Grayscale', 'lambda-admin-td'),
                            'blur'      => esc_html__('Blur', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Effects filter to apply to the image on hover.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Hover Effects Filter Behaviour', 'lambda-admin-td'),
                        'id'      => 'hover_filter_invert',
                        'type'    => 'select',
                        'default' => 'image-filter-onhover',
                        'options' => array(
                            'image-filter-onhover'    => esc_html__('Apply Filter On Hover', 'lambda-admin-td'),
                            'image-filter-invert'     => esc_html__('Apply Filter On Hover Out', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('When to apply the Hover Effects Filter.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Caption Overlay Horizontal Alignment', 'lambda-admin-td'),
                        'id'        => 'item_caption_align',
                        'type'      => 'select',
                        'default'   => 'center',
                        'options' => array(
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                            'justify'  => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('The text alignment of the caption text / title.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Caption Vertical Alignment', 'lambda-admin-td'),
                        'id'        => 'item_caption_vertical',
                        'type'      => 'select',
                        'default'   => 'middle',
                        'options' => array(
                            'middle' => esc_html__('Middle', 'lambda-admin-td'),
                            'top'    => esc_html__('Top', 'lambda-admin-td'),
                            'bottom' => esc_html__('Bottom', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Vertical alignment of the caption title and text.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Hover Animation', 'lambda-admin-td'),
                        'id'        => 'item_overlay_animation',
                        'type'        => 'select',
                        'default'     => 'fade-in',
                        'options'     => array(
                            'fade-in'     => esc_html__('Fade in', 'lambda-admin-td'),
                            'fade-in from-top'    => esc_html__('Fade From Top', 'lambda-admin-td'),
                            'fade-in from-bottom' => esc_html__('Fade From Bottom', 'lambda-admin-td'),
                            'fade-in from-left'   => esc_html__('Fade From Left', 'lambda-admin-td'),
                            'fade-in from-right'  => esc_html__('Fade From Right', 'lambda-admin-td'),
                            'fade-none'        => esc_html__('No Animation', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('What animation will be used to reveal the image hover overlay.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Grid', 'lambda-admin-td'),
                        'desc'      => esc_html__('Grid pattern to apply over the image on hover.', 'lambda-admin-td'),
                        'id'        => 'item_overlay_grid',
                        'type'      => 'slider',
                        'default'   => '0',
                        'attr'      => array(
                            'max'       => 100,
                            'min'       => 0,
                            'step'      => 10,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Icon', 'lambda-admin-td'),
                        'desc'      => esc_html__('Icon to show on the hover overlay.', 'lambda-admin-td'),
                        'id'        => 'item_overlay_icon',
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => 'plus',
                    ),
                    array(
                        'name'        => esc_html__('Scroll Animation', 'lambda-admin-td'),
                        'desc'        => esc_html__('Animation that will occur when the user scrolls onto the element.', 'lambda-admin-td'),
                        'id'          => 'item_scroll_animation',
                        'type'        => 'select',
                        'default'     => 'none',
                        'options'     => include OXY_THEME_DIR . 'inc/options/global-options/animations.php',
                    ),
                    array(
                        'name'    => esc_html__('Animation Delay', 'lambda-admin-td'),
                        'desc'    => esc_html__('Delay after scrolling onto the element before animation starts.', 'lambda-admin-td'),
                        'id'      => 'item_scroll_animation_delay',
                        'type'    => 'slider',
                        'default' => '0',
                        'attr'    => array(
                            'max'  => 4,
                            'min'  => 0,
                            'step' => 0.1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Animation Timing', 'lambda-admin-td'),
                        'desc'    => esc_html__('Will load all portfolio items at once or each one individually .', 'lambda-admin-td'),
                        'id'      => 'item_scroll_animation_timing',
                        'type'    => 'select',
                        'default' => 'staggered',
                        'options' => array(
                            'all-same'   => esc_html__('All items appear at same time', 'lambda-admin-td'),
                            'staggered'  => esc_html__('Staggered over Animation Delay', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/padding.php'
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            )
        )
    ),
    'recent_posts' => array(
        'shortcode' => 'recent_posts',
        'title'     => esc_html__('Recent Posts', 'lambda-admin-td'),
        'desc'       => esc_html__('Displays a simple list of recent posts.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Recent Posts', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Post style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Style to use to render the post in the list.', 'lambda-admin-td'),
                        'id'      => 'style',
                        'type'    => 'select',
                        'default' => 'small',
                        'options' => array(
                            'small' => esc_html__('Simple post with title & excerpt below', 'lambda-admin-td'),
                            'image' => esc_html__('Featured image with title and date in the overlay.', 'lambda-admin-td'),
                            'list'  => esc_html__('List of posts with Featured image, as well as title and date on the side.', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Number of posts', 'lambda-admin-td'),
                        'desc'    => esc_html__('Total Number of posts to display.', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '3',
                        'attr'    => array(
                            'max'   => 50,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Offset', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of posts to displace or pass over.', 'lambda-admin-td'),
                        'id'      => 'offset',
                        'type'    => 'slider',
                        'default' => '0',
                        'attr'    => array(
                            'max'   => 50,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Columns Per Row', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of posts to display per row ( does not apply to list view )', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'select',
                        'options' => array(
                            1 => esc_html__('One column', 'lambda-admin-td'),
                            2 => esc_html__('Two columns', 'lambda-admin-td'),
                            3 => esc_html__('Three columns', 'lambda-admin-td'),
                            4 => esc_html__('Four columns', 'lambda-admin-td'),
                        ),
                        'default' => '3',
                    ),
                    array(
                        'name'    => esc_html__('Post category', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose posts from a specific category', 'lambda-admin-td'),
                        'id'      => 'cat',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'categories',
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Title Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of heading to use for post titles.', 'lambda-admin-td'),
                        'id'      => 'title_tag',
                        'type'    => 'select',
                        'default' => 'h3',
                        'options' => array(
                            'h1' => esc_html__('H1', 'lambda-admin-td'),
                            'h2' => esc_html__('H2', 'lambda-admin-td'),
                            'h3' => esc_html__('H3', 'lambda-admin-td'),
                            'h4' => esc_html__('H4', 'lambda-admin-td'),
                            'h5' => esc_html__('H5', 'lambda-admin-td'),
                            'h6' => esc_html__('H6', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Post Text Alignment', 'lambda-admin-td'),
                        'id'        => 'text_align',
                        'type'      => 'select',
                        'default'   => 'left',
                        'options' => array(
                            'left'      => esc_html__('Left', 'lambda-admin-td'),
                            'center'    => esc_html__('Center', 'lambda-admin-td'),
                            'right'     => esc_html__('Right', 'lambda-admin-td'),
                            'justify'   => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the post text & title.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Animation Timing', 'lambda-admin-td'),
                        'desc'    => esc_html__('Will animate all posts at once or each one individually .', 'lambda-admin-td'),
                        'id'      => 'scroll_animation_timing',
                        'type'    => 'select',
                        'default' => 'staggered',
                        'options' => array(
                            'all-same'   => esc_html__('All items appear at same time', 'lambda-admin-td'),
                            'staggered'  => esc_html__('Staggered over Animation Delay', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'timeline' => array(
        'shortcode' => 'timeline',
        'title'     => esc_html__('Vertical Timeline', 'lambda-admin-td'),
        'desc'       => esc_html__('Displays a vertical timeline of your posts.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Timeline', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Number of posts', 'lambda-admin-td'),
                        'desc'    => esc_html__('Total Number of posts to display.', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '3',
                        'attr'    => array(
                            'max'   => 50,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Post category', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose posts from a specific category', 'lambda-admin-td'),
                        'id'      => 'cat',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'categories',
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Title Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of heading to use for post titles.', 'lambda-admin-td'),
                        'id'      => 'title_tag',
                        'type'    => 'select',
                        'default' => 'h3',
                        'options' => array(
                            'h1' => esc_html__('H1', 'lambda-admin-td'),
                            'h2' => esc_html__('H2', 'lambda-admin-td'),
                            'h3' => esc_html__('H3', 'lambda-admin-td'),
                            'h4' => esc_html__('H4', 'lambda-admin-td'),
                            'h5' => esc_html__('H5', 'lambda-admin-td'),
                            'h6' => esc_html__('H6', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    // MAP SHORTCODE OPTIONS
    'map' => array(
        'shortcode'     => 'map',
        'title'         => esc_html__('Google Map', 'lambda-admin-td'),
        'desc'          => esc_html__('Adds a Google Map to the page.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Map', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Map Type', 'lambda-admin-td'),
                        'id'        => 'map_type',
                        'desc'    => esc_html__('Choose a type of map to show from Google Maps.', 'lambda-admin-td'),
                        'type'      => 'select',
                        'default'   =>  'ROADMAP',
                        'options' => array(
                            'ROADMAP'   => esc_html__('Roadmap', 'lambda-admin-td'),
                            'SATELLITE' => esc_html__('Satellite', 'lambda-admin-td'),
                            'TERRAIN'   => esc_html__('Terrain', 'lambda-admin-td'),
                            'HYBRID'    => esc_html__('Hybrid', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Map Style', 'lambda-admin-td'),
                        'id'        => 'map_style',
                        'desc'    => esc_html__('Set a drawing style for the map.', 'lambda-admin-td'),
                        'type'      => 'select',
                        'default'   =>  'regular',
                        'options' => array(
                            'blackwhite' => esc_html__('Black & White', 'lambda-admin-td'),
                            'regular'    => esc_html__('Regular', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Center Map', 'lambda-admin-td'),
                        'id'        => 'auto_center',
                        'type'      => 'select',
                        'default'   =>  'auto',
                        'desc'    => esc_html__('Sets the center the map automatically based on the markers, or manually.', 'lambda-admin-td'),
                        'options' => array(
                            'auto'   => esc_html__('Auto center markers ', 'lambda-admin-td'),
                            'manual' => esc_html__('I will tell you where to center map below', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Center Map Lat/Lng', 'lambda-admin-td'),
                        'desc'    => esc_html__('Latitude and Longitude position to center the Map (separate with lat and long with commas).', 'lambda-admin-td'),
                        'id'      => 'center_latlng',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'      => esc_html__('Map Zoom', 'lambda-admin-td'),
                        'id'        => 'map_zoom',
                        'desc'    => esc_html__('Sets the zoom level of the map.  NOTE - will be overridden by the auto center map option', 'lambda-admin-td'),
                        'type'      => 'slider',
                        'default' => '15',
                        'attr'    => array(
                            'max'   => 20,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'      => esc_html__('Map Scrollable', 'lambda-admin-td'),
                        'id'        => 'map_scrollable',
                        'desc'    => esc_html__('Toggles draggable scrolling of the map.', 'lambda-admin-td'),
                        'type'      => 'select',
                        'default'   =>  'on',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Marker', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Marker Image', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the url of a custom marker image.', 'lambda-admin-td'),
                        'id'      => 'marker_link',
                        'type'    => 'text',
                        'default' => '',
                    ),
                    array(
                        'name'      => esc_html__('Show Markers', 'lambda-admin-td'),
                        'id'        => 'marker',
                        'type'      => 'select',
                        'default'   =>  'show',
                        'desc'    => esc_html__('Toggle showing or hiding the small marker points on your map.', 'lambda-admin-td'),
                        'options' => array(
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Marker Labels', 'lambda-admin-td'),
                        'desc'    => esc_html__('Labels to show above the marker. Divide labels with pipe character |', 'lambda-admin-td'),
                        'id'      => 'label',
                        'default' =>  '',
                        'type'    => 'textarea',
                    ),
                    array(
                        'name'    => esc_html__('Marker Addresses', 'lambda-admin-td'),
                        'desc'    => esc_html__('Addresses to show markers. Divide addresses with pipe character |', 'lambda-admin-td'),
                        'id'      => 'address',
                        'default' =>  '',
                        'type'    => 'textarea',
                    ),
                    array(
                        'name'    => esc_html__('Markers Lat/Lng', 'lambda-admin-td'),
                        'desc'    => esc_html__('Latitude and Longitude of markers(separate with commas), if you dont want to use address. Divide markers with pipe character |', 'lambda-admin-td'),
                        'id'      => 'latlng',
                        'default' =>  '',
                        'type'    => 'textarea',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Section', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Map Height', 'lambda-admin-td'),
                        'id'        => 'height',
                        'desc'    => esc_html__('Map height in pixels.', 'lambda-admin-td'),
                        'type'      => 'slider',
                        'default' => '500',
                        'attr'    => array(
                            'max'   => 800,
                            'min'   => 50,
                            'step'  => 1
                        )
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    // PIECHART SHORTCODE
    'pie' => array(
        'shortcode' => 'pie',
        'title'     => esc_html__('Pie Chart', 'lambda-admin-td'),
        'desc'      => esc_html__('Creates a circular chart to show a % value.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Pie Chart', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Track Colour', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the chart track colour', 'lambda-admin-td'),
                        'id'      => 'track_colour',
                        'default' =>  '',
                        'type'    => 'colour',
                    ),
                    array(
                        'name'    => esc_html__('Bar Colour', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the chart bar colour', 'lambda-admin-td'),
                        'id'      => 'bar_colour',
                        'default' =>  '',
                        'type'    => 'colour',
                    ),
                    array(
                        'name'    => esc_html__('Icon', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a chart icon', 'lambda-admin-td'),
                        'id'      => 'icon',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                    ),
                    array(
                        'name'    => esc_html__('Icon Animation', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose an icon animation', 'lambda-admin-td'),
                        'id'      => 'icon_animation',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/animations.php'
                    ),
                    array(
                        'name'    => esc_html__('Percentage', 'lambda-admin-td'),
                        'desc'    => esc_html__('Percentage of the pie chart', 'lambda-admin-td'),
                        'id'      => 'percentage',
                        'admin_label' => true,
                        'type'    => 'slider',
                        'default' => '50',
                        'attr'    => array(
                            'max'   => 100,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the size of the chart', 'lambda-admin-td'),
                        'id'      => 'size',
                        'type'    => 'slider',
                        'default' => '200',
                        'attr'    => array(
                            'max'   => 400,
                            'min'   => 50,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Line Width', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the width of the charts line', 'lambda-admin-td'),
                        'id'      => 'line_width',
                        'type'    => 'slider',
                        'default' => '20',
                        'attr'    => array(
                            'max'   => 30,
                            'min'   => 5,
                            'step'  => 1
                        )
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
     // COUNTER SHORTCODE
    'counter' => array(
        'shortcode' => 'counter',
        'title'     => esc_html__('Counter', 'lambda-admin-td'),
        'desc'      => esc_html__('Creates a circular counter to show an integer value.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Counter', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Initial Value', 'lambda-admin-td'),
                        'desc'    => esc_html__('Starting value of the circular counter before the animation.', 'lambda-admin-td'),
                        'id'      => 'initvalue',
                        'admin_label' => true,
                        'default'     =>  '0',
                        'type'        => 'text',
                    ),
                    array(
                        'name'    => esc_html__('End Value', 'lambda-admin-td'),
                        'desc'    => esc_html__('Value of the circular counter', 'lambda-admin-td'),
                        'id'      => 'value',
                        'admin_label' => true,
                        'default'     =>  '',
                        'type'        => 'text',
                    ),
                    array(
                        'name'      => esc_html__('Number Format', 'lambda-admin-td'),
                        'id'        => 'format',
                        'type'      => 'select',
                        'default'   => '(,ddd)',
                        'options' => array(
                            '(,ddd)'    => '12,345,678',
                            '(,ddd).dd' => '12,345,678.09',
                            '(.ddd),dd' => '12.345.678,09',
                            '( ddd),dd' => '12 345 678,09',
                            'd'         => '12345678',
                        ),
                        'desc'    => esc_html__('Sets format that the number in the counter will use.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Text Alignment', 'lambda-admin-td'),
                        'id'        => 'align',
                        'type'      => 'select',
                        'default'   => 'center',
                        'options' => array(
                            'default'   => esc_html__('Default alignment', 'lambda-admin-td'),
                            'left'      => esc_html__('Left', 'lambda-admin-td'),
                            'center'    => esc_html__('Center', 'lambda-admin-td'),
                            'right'     => esc_html__('Right', 'lambda-admin-td'),
                            'justify'   => esc_html__('Justify', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the lead text.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Counter Font Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the size of the font to use in the counter', 'lambda-admin-td'),
                        'id'      => 'counter_size',
                        'type'    => 'select',
                        'options' => array(
                            'normal'      => esc_html__('Normal', 'lambda-admin-td'),
                            'super' => esc_html__('Super (60px)', 'lambda-admin-td'),
                            'hyper' => esc_html__('Hyper (96px)', 'lambda-admin-td'),
                        ),
                        'default' => 'normal',
                    ),
                    array(
                        'name'    => esc_html__('Counter Font Weight', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the weight of the font to use in the counter', 'lambda-admin-td'),
                        'id'      => 'counter_weight',
                        'type'    => 'select',
                        'options' => array(
                            'regular'  => esc_html__('Regular', 'lambda-admin-td'),
                            'black'    => esc_html__('Black', 'lambda-admin-td'),
                            'bold'     => esc_html__('Bold', 'lambda-admin-td'),
                            'light'    => esc_html__('Light', 'lambda-admin-td'),
                            'hairline' => esc_html__('Hairline', 'lambda-admin-td'),
                        ),
                        'default' => 'regular',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'pricing' => array(
        'title'       => esc_html__('Pricing Column', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a price info column.', 'lambda-admin-td'),
        'shortcode'   => 'pricing',
        'insert_with' => 'dialog',
        'has_content' => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Pricing Table', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'        => esc_html__('Heading', 'lambda-admin-td'),
                        'desc'        => esc_html__('Heading text of the column', 'lambda-admin-td'),
                        'id'          => 'heading',
                        'admin_label' => true,
                        'default'     =>  '',
                        'type'        => 'text',
                    ),
                    array(
                        'name'      => esc_html__('Featured Column', 'lambda-admin-td'),
                        'id'        => 'featured',
                        'type'      => 'select',
                        'default'   =>  'false',
                        'options' => array(
                            'false' => esc_html__('Not Featured', 'lambda-admin-td'),
                            'true'  => esc_html__('Featured', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Background Color', 'lambda-admin-td'),
                        'id'        => 'pricing_background_colour',
                        'desc'      => esc_html__('Set the background color of the Pricing Column', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '#82c9ed',
                    ),
                    array(
                        'name'      => esc_html__('Foreground Color', 'lambda-admin-td'),
                        'id'        => 'pricing_foreground_colour',
                        'desc'      => esc_html__('Set the foreground color of the Pricing Column', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '#FFFFFF',
                    ),
                    array(
                        'name'      => esc_html__('Show price', 'lambda-admin-td'),
                        'id'        => 'show_price',
                        'type'      => 'select',
                        'default'   =>  'true',
                        'options' => array(
                            'true' => esc_html__('Show', 'lambda-admin-td'),
                            'false' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Price Color', 'lambda-admin-td'),
                        'id'        => 'pricing_colour',
                        'desc'      => esc_html__('Set the color of the Price', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '#FFFFFF',
                    ),
                    array(
                        'name'      => esc_html__('Price background', 'lambda-admin-td'),
                        'id'        => 'pricing_background',
                        'desc'      => esc_html__('Set the background of the Price', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '#82c9ed',
                    ),
                    array(
                        'name'    => esc_html__('Price', 'lambda-admin-td'),
                        'desc'    => esc_html__('Price to show at top of the column.', 'lambda-admin-td'),
                        'id'      => 'price',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'    => esc_html__('Price Currency', 'lambda-admin-td'),
                        'desc'    => esc_html__('Price currency to show next to the price.', 'lambda-admin-td'),
                        'id'      => 'currency',
                        'default' =>  '&#36;',
                        'type'    => 'select',
                        'options' => array(
                            '&#36;'   => esc_html__('Dollar', 'lambda-admin-td'),
                            '&#128;'  => esc_html__('Euro', 'lambda-admin-td'),
                            '&#163;'  => esc_html__('Pound', 'lambda-admin-td'),
                            '&#165;'  => esc_html__('Yen', 'lambda-admin-td'),
                            'custom' => esc_html__('Custom', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Custom Currency', 'lambda-admin-td'),
                        'desc'    => esc_html__('If custom currency selected enter the html code here.', 'lambda-admin-td'),
                        'id'      => 'custom_currency',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'    => esc_html__('After Price Text', 'lambda-admin-td'),
                        'desc'    => esc_html__('Text to show after the price.', 'lambda-admin-td'),
                        'id'      => 'per',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'    => esc_html__('Item List', 'lambda-admin-td'),
                        'desc'    => esc_html__('List of items to put in the column under the price. Divide categories with linebreaks (Enter)', 'lambda-admin-td'),
                        'id'      => 'list',
                        'default' =>  '',
                        'type'    => 'exploded_textarea',
                    ),
                    array(
                        'name'      => esc_html__('Show button', 'lambda-admin-td'),
                        'id'        => 'show_button',
                        'type'      => 'select',
                        'default'   =>  'true',
                        'options' => array(
                            'true' => esc_html__('Show', 'lambda-admin-td'),
                            'false' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Button Text', 'lambda-admin-td'),
                        'desc'    => esc_html__('Text to inside the button at the bottom of the column.', 'lambda-admin-td'),
                        'id'      => 'button_text',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'    => esc_html__('Button Link', 'lambda-admin-td'),
                        'desc'    => esc_html__('Link that the button will point to.', 'lambda-admin-td'),
                        'id'      => 'button_link',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                    array(
                        'name'      => esc_html__('Button background Color', 'lambda-admin-td'),
                        'id'        => 'button_background_colour',
                        'desc'      => esc_html__('Set the background color of the button', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '#FFFFFF',
                    ),
                    array(
                        'name'      => esc_html__('Button text Color', 'lambda-admin-td'),
                        'id'        => 'button_foreground_colour',
                        'desc'      => esc_html__('Set the foreground color of the button', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '#82c9ed',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'pricing_list' => array(
        'shortcode'   => 'pricing_list',
        'title'       => esc_html__('Pricing List', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a list of prices.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'pricing_item' => array(
        'shortcode'   => 'pricing_item',
        'title'       => esc_html__('Pricing Item', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a pricing item.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'        => esc_html__('Title', 'lambda-admin-td'),
                        'id'          => 'title',
                        'type'        => 'text',
                        'admin_label' => true,
                        'default'     => '',
                        'desc'        => esc_html__('Choose a title for your pricing item.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'        => esc_html__('Description', 'lambda-admin-td'),
                        'id'          => 'description',
                        'type'        => 'textarea',
                        'default'     => '',
                        'desc'        => esc_html__('Choose a description for your pricing item.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Featured Item Label', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set a label for the featured item.', 'lambda-admin-td'),
                        'id'        => 'featured_label',
                        'type'      => 'text',
                        'default'   =>  '',
                    ),
                    array(
                        'name'    => esc_html__('Image', 'lambda-admin-td'),
                        'id'      => 'image',
                        'store'   => 'url',
                        'type'    => 'upload',
                        'default' => '',
                        'desc'    => esc_html__('Choose an image to use for this pricing item.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Image Shape', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose if the image will be rounded or not', 'lambda-admin-td'),
                        'id'      => 'shape',
                        'type'    => 'select',
                        'default' => 'round',
                        'options'    => array(
                            'square' => esc_html__('Square', 'lambda-admin-td'),
                            'round'  => esc_html__('Circle', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Price', 'lambda-admin-td'),
                        'desc'    => esc_html__('Price to show at top of the column.', 'lambda-admin-td'),
                        'id'      => 'price',
                        'default' =>  '',
                        'type'    => 'text',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'features_list' => array(
        'shortcode'   => 'features_list',
        'title'       => esc_html__('Features List', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a list of features.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'feature' => array(
        'shortcode'   => 'feature',
        'title'       => esc_html__('Feature', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a shape with an icon alongside some text.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Icon', 'lambda-admin-td'),
                        'id'      => 'icon',
                        'desc'    => esc_html__('Select an icon that will appear in your features shape.', 'lambda-admin-td'),
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => ''
                    ),
                    array(
                        'name'      => esc_html__('Icon Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the colour of the icon', 'lambda-admin-td'),
                        'id'        => 'icon_color',
                        'type'      => 'colour',
                        'default'   => '',
                        'format'  => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                    array(
                        'name'      => esc_html__('Background Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the colour shape background.', 'lambda-admin-td'),
                        'id'        => 'background_color',
                        'type'      => 'colour',
                        'default'   => '',
                        'format'  => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Hover Animation', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a hover animation for the feature icon.', 'lambda-admin-td'),
                        'id'      => 'animation',
                        'type'    => 'select',
                        'default' => '',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/animations.php'
                    ),
                    array(
                        'name'        => esc_html__('Title', 'lambda-admin-td'),
                        'id'          => 'title',
                        'type'        => 'text',
                        'admin_label' => true,
                        'default'     => '',
                        'desc'        => esc_html__('Choose a title for your featured item.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'        => esc_html__('Content', 'lambda-admin-td'),
                        'id'          => 'content',
                        'type'        => 'textarea',
                        'default'     => '',
                        'desc'        => esc_html__('Content to show below title.', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'slideshow' => array(
        'shortcode'     => 'slideshow',
        'title'         => esc_html__('Slideshow', 'lambda-admin-td'),
        'desc'          => esc_html__('Adds a Flexslider slideshow to the page.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Slideshow', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Choose a Flexslider', 'lambda-admin-td'),
                        'desc'    => esc_html__('Populate your slider with one of the slideshows you created', 'lambda-admin-td'),
                        'id'      => 'flexslider',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'slideshow',
                    ),
                    array(
                        'name'      =>  esc_html__('Animation style', 'lambda-admin-td'),
                        'desc'      =>  esc_html__('Select how your slider animates', 'lambda-admin-td'),
                        'id'        => 'animation',
                        'type'      => 'select',
                        'options'   =>  array(
                            'slide' => esc_html__('Slide', 'lambda-admin-td'),
                            'fade'  => esc_html__('Fade', 'lambda-admin-td'),
                        ),
                        'default'   => 'slide',
                    ),
                    array(
                        'name'      => esc_html__('Direction', 'lambda-admin-td'),
                        'desc'      =>  esc_html__('Select the direction your slider slides', 'lambda-admin-td'),
                        'id'        => 'direction',
                        'type'      => 'select',
                        'default'   =>  'horizontal',
                        'options' => array(
                            'horizontal' => esc_html__('Horizontal', 'lambda-admin-td'),
                            'vertical'   => esc_html__('Vertical', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Duration', 'lambda-admin-td'),
                        'desc'      => esc_html__('Select how long each color will stay, in milliseconds', 'lambda-admin-td'),
                        'id'        => 'duration',
                        'type'      => 'slider',
                        'default'   => '600',
                        'attr'      => array(
                            'max'       => 1500,
                            'min'       => 200,
                            'step'      => 100
                        )
                    ),
                    array(
                        'name'      => esc_html__('Speed', 'lambda-admin-td'),
                        'desc'      => esc_html__('Select how fast the colors will change, in milliseconds', 'lambda-admin-td'),
                        'id'        => 'speed',
                        'type'      => 'slider',
                        'default'   => '7000',
                        'attr'      => array(
                            'max'       => 15000,
                            'min'       => 2000,
                            'step'      => 1000
                        )
                    ),
                    array(
                        'name'      => esc_html__('Auto start', 'lambda-admin-td'),
                        'id'        => 'autostart',
                        'type'      => 'select',
                        'default'   =>  'true',
                        'desc'    => esc_html__('Start slideshow automatically', 'lambda-admin-td'),
                        'options' => array(
                            'true'  => esc_html__('On', 'lambda-admin-td'),
                            'false' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Show navigation arrows', 'lambda-admin-td'),
                        'id'        => 'directionnav',
                        'type'      => 'select',
                        'default'   =>  'hide',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                     array(
                        'name'      => esc_html__('Item width', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set width of the slider items( leave blank for full )', 'lambda-admin-td'),
                        'id'        => 'itemwidth',
                        'type'      => 'text',
                        'default'   => '',
                        'attr'      =>  array(
                            'size'    => 8,
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Show controls', 'lambda-admin-td'),
                        'id'        => 'showcontrols',
                        'type'      => 'select',
                        'default'   =>  'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Choose the place of the controls', 'lambda-admin-td'),
                        'id'        => 'controlsposition',
                        'type'      => 'select',
                        'default'   =>  'inside',
                        'options' => array(
                            'inside'    => esc_html__('Inside', 'lambda-admin-td'),
                            'outside'   => esc_html__('Outside', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      =>  esc_html__('Choose the alignment of the controls', 'lambda-admin-td'),
                        'id'        => 'controlsalign',
                        'type'      => 'select',
                        'default'   => 'center',
                        'options'   =>  array(
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Controls Vertical Position', 'lambda-admin-td'),
                        'id'        => 'controls_vertical',
                        'type'      => 'select',
                        'default'   =>  'bottom',
                        'options' => array(
                            'top'    => esc_html__('Top', 'lambda-admin-td'),
                            'bottom' => esc_html__('Bottom', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Captions', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Show Captions', 'lambda-admin-td'),
                        'id'        => 'captions',
                        'type'      => 'select',
                        'default'   =>  'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Captions Horizontal Position', 'lambda-admin-td'),
                        'desc'      => esc_html__('Choose among left, right and alternate positioning', 'lambda-admin-td'),
                        'id'        => 'captions_horizontal',
                        'type'      => 'select',
                        'default'   =>  'left',
                        'options' => array(
                            'left'      => esc_html__('Left', 'lambda-admin-td'),
                            'right'     => esc_html__('Right', 'lambda-admin-td'),
                            'alternate' => esc_html__('Alternate', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Show Tooltip', 'lambda-admin-td'),
                        'id'        => 'tooltip',
                        'type'      => 'select',
                        'default'   =>  'hide',
                        'desc'    => esc_html__('Show tooltip if Item width option is set', 'lambda-admin-td'),
                        'options' => array(
                            'show'  => esc_html__('Show', 'lambda-admin-td'),
                            'hide'  => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_single_image' => array(
        'shortcode'     => 'vc_single_image',
        'title'         => esc_html__('Image', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays an image.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Simple Image', 'lambda-admin-td'),
                'fields' => array(
            		array(
            			'type'    => 'select',
            			'name'    => esc_html__('Image source', 'lambda-admin-td'),
            			'id'      => 'source',
            			'options' => array(
            				'media_library'  => esc_html__('Media Library', 'lambda-admin-td'),
            				'featured_image' => esc_html__('Featured Image', 'lambda-admin-td'),
            			),
            			'default' => 'media_library',
            			'desc'    => esc_html__('Select image source.', 'lambda-admin-td'),
            		),
                    array(
                        'name'       => esc_html__('Image', 'lambda-admin-td'),
                        'id'         => 'image',
                        'type'       => 'upload',
                        'store'      => 'id',
                        'default'    => '',
                        'desc'       => esc_html__('Select image from media library. Works only if Image source is set to Media Library.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Image size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the size for the image', 'lambda-admin-td'),
                        'id'      => 'image_size',
                        'type'    => 'select',
                        'default' => 'full',
                        'admin_label' => true,
                        'options' => array(
                            'thumbnail' => esc_html__('Thumbnail', 'lambda-admin-td'),
                            'medium'    => esc_html__('Medium', 'lambda-admin-td'),
                            'large'     => esc_html__('Large', 'lambda-admin-td'),
                            'full'      => esc_html__('Full', 'lambda-admin-td')
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Custom Image Size', 'lambda-admin-td'),
                        'id'      => 'custom_image_size',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Enter size in pixels (Example: 400x400 (Width x Height)). Leave empty to use Image size option above by default.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Custom Image Size Crop', 'lambda-admin-td'),
                        'id'      => 'custom_image_size_crop',
                        'type'    => 'select',
                        'default' => 'false',
                        'options' => array(
                            'true'  => esc_html__('Crop', 'lambda-admin-td'),
                            'false' => esc_html__('Keep aspect ratio', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Crop image to the exact dimensions set in the Custom Image Size option or keep original aspect ratio.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Link Type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select the link type to use for the item.', 'lambda-admin-td'),
                        'id'      => 'link_type',
                        'type'    => 'select',
                        'default' => 'magnific',
                        'options' => array(
                            'magnific' => esc_html__('Magnific', 'lambda-admin-td'),
                            'item'     => esc_html__('Link', 'lambda-admin-td'),
                            'no-link'  => esc_html__('No Link ', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Hover Effect', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select an effect to add when you hover over the image.', 'lambda-admin-td'),
                        'id'      => 'hover_effect',
                        'type'    => 'select',
                        'default' => '',
                        'options' => array(
                            ''                    => esc_html__('No Effect', 'lambda-admin-td'),
                            'image-effect-zoom-in'  => esc_html__('Zoom In', 'lambda-admin-td'),
                            'image-effect-zoom-out' => esc_html__('Zoom Out', 'lambda-admin-td'),
                            'image-effect-scroll-left'  => esc_html__('Scroll Left', 'lambda-admin-td'),
                            'image-effect-scroll-right' => esc_html__('Scroll Right', 'lambda-admin-td')
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Link', 'lambda-admin-td'),
                        'id'      => 'link',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Link that the item will link leave blank to link to original image source.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Open Link In', 'lambda-admin-td'),
                        'id'      => 'link_target',
                        'type'    => 'select',
                        'default' => '_self',
                        'options' => array(
                            '_self'   => esc_html__('Same page as it was clicked ', 'lambda-admin-td'),
                            '_blank'  => esc_html__('Open in new window/tab', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Where the link will open.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Image Alt', 'lambda-admin-td'),
                        'id'      => 'alt',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Place the alt of the image here', 'lambda-admin-td'),
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'shapedimage' => array(
        'shortcode'     => 'shapedimage',
        'title'         => esc_html__('Shaped Image', 'lambda-admin-td'),
        'desc'          => esc_html__('Displays an image that is clipped to a shape.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Image', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Image Source', 'lambda-admin-td'),
                        'id'      => 'image',
                        'type'    => 'upload',
                        'store'   => 'id',
                        'default' => '',
                        'desc'    => esc_html__('Choose an image to use.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Image size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the size that the image will have', 'lambda-admin-td'),
                        'id'      => 'shape_size',
                        'type'    => 'select',
                        'default' => 'medium',
                        'admin_label' => true,
                        'options' => array(
                            'normal' => esc_html__('Normal', 'lambda-admin-td'),
                            'mini'   => esc_html__('Mini', 'lambda-admin-td'),
                            'small'  => esc_html__('Small', 'lambda-admin-td'),
                            'medium' => esc_html__('Medium', 'lambda-admin-td'),
                            'big'    => esc_html__('Big', 'lambda-admin-td'),
                            'huge'   => esc_html__('Huge', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Shape', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose if the image will be rounded or not', 'lambda-admin-td'),
                        'id'      => 'shape',
                        'type'    => 'select',
                        'default' => 'round',
                        'options'    => array(
                            'square' => esc_html__('Square', 'lambda-admin-td'),
                            'round'  => esc_html__('Circle', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Hover Animation', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a hover animation', 'lambda-admin-td'),
                        'id'      => 'animation',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/animations.php'
                    ),
                    array(
                        'name'    => esc_html__('Open In Magnific Popup', 'lambda-admin-td'),
                        'desc'    => esc_html__('Open the original image in magnific on click (overrides link option)', 'lambda-admin-td'),
                        'id'      => 'magnific',
                        'type'    => 'select',
                        'default' => 'off',
                        'options' => array(
                            'on'    => esc_html__('On', 'lambda-admin-td'),
                            'off'   => esc_html__('Off', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Image Alt', 'lambda-admin-td'),
                        'id'      => 'alt',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Place the alt of the image here', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Link', 'lambda-admin-td'),
                        'id'      => 'link',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Place a link here', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Open Links In', 'lambda-admin-td'),
                        'id'      => 'link_target',
                        'type'    => 'select',
                        'default' => '_self',
                        'options' => array(
                            '_self'   => esc_html__('Same page as it was clicked ', 'lambda-admin-td'),
                            '_blank'  => esc_html__('Open in new window/tab', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Where the link will open.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Hover Grid', 'lambda-admin-td'),
                        'desc'      => esc_html__('Adds an overlay pattern image when you hover over the image.', 'lambda-admin-td'),
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
                        'name'      => esc_html__('Background Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the colour shape background (will be seen if transparant images are used)', 'lambda-admin-td'),
                        'id'        => 'background_colour',
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        ),
                        'default'   => ''
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'featuredicon' => array(
        'shortcode'     => 'featuredicon',
        'title'         => esc_html__('Featured Icon', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates a shape with an icon in the middle.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Icon', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Icon', 'lambda-admin-td'),
                        'id'      => 'icon',
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => 'glass',
                        'admin_label' => true,
                        'desc'    => esc_html__('Choose an icon to use in your featured icon', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Featured Icon Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the size that the image will have', 'lambda-admin-td'),
                        'id'      => 'shape_size',
                        'type'    => 'select',
                        'default' => 'medium',
                        'admin_label' => true,
                        'options' => array(
                            'normal' => esc_html__('Normal', 'lambda-admin-td'),
                            'mini'   => esc_html__('Mini', 'lambda-admin-td'),
                            'small'  => esc_html__('Small', 'lambda-admin-td'),
                            'medium' => esc_html__('Medium', 'lambda-admin-td'),
                            'big'    => esc_html__('Big', 'lambda-admin-td'),
                            'huge'   => esc_html__('Huge', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'        => esc_html__('Shape', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose if the image will be roundrd or not', 'lambda-admin-td'),
                        'id'          => 'shape',
                        'type'        => 'select',
                        'default'     => 'round',
                        'admin_label' => true,
                        'options'     => array(
                            'rect'   => esc_html__('Rectangle', 'lambda-admin-td'),
                            'square' => esc_html__('Square', 'lambda-admin-td'),
                            'round'  => esc_html__('Circle', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Icon Link', 'lambda-admin-td'),
                        'desc'    => esc_html__('Make the icon link to a web url.', 'lambda-admin-td'),
                        'id'      => 'link',
                        'type'    => 'text',
                        'default' => '',
                    ),
                    array(
                        'name'    => esc_html__('Hover Animation', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose an icon animation', 'lambda-admin-td'),
                        'id'      => 'animation',
                        'type'    => 'select',
                        'default' => '',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/animations.php'
                    ),
                    array(
                        'name'      => esc_html__('Background Grid', 'lambda-admin-td'),
                        'desc'      => esc_html__('Adds an overlay pattern to the shape background.', 'lambda-admin-td'),
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
                        'name'      => esc_html__('Icon Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the colour of the icon', 'lambda-admin-td'),
                        'id'        => 'icon_color',
                        'type'      => 'colour',
                        'default'   => '',
                        'format'    => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )

                    ),
                    array(
                        'name'      => esc_html__('Background Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the colour shape background.', 'lambda-admin-td'),
                        'id'        => 'background_color',
                        'type'      => 'colour',
                        'default'   => '',
                        'format'    => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )

                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'icon' => array(
        'shortcode'   => 'icon',
        'title'       => esc_html__('Icon', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays an icon.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'General',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Font Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of font to use for icon ( set to 0 to inhertit font size from container )', 'lambda-admin-td'),
                        'id'      => 'size',
                        'type'    => 'slider',
                        'default' => '16',
                        'attr'    => array(
                            'max'  => 48,
                            'min'  => 0,
                            'step' => 1
                        )
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title'   => 'Icon',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Icon', 'lambda-admin-td'),
                        'desc'    => esc_html__('Type of button to display', 'lambda-admin-td'),
                        'id'      => 'content',
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => 'fa fa-glass',
                        'admin_label' => true
                    )
                ),
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            )
        ),
    ),
    'button' =>  array(
        'shortcode'   => 'button',
        'title'       => esc_html__('Button', 'lambda-admin-td'),
        'desc'        => esc_html__('Creates a fancy call to action button with or without an icon.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'General',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Button type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Type of button to display', 'lambda-admin-td'),
                        'id'      => 'type',
                        'type'    => 'select',
                        'default' => 'default',
                        'admin_label' => true,
                        'options' => array(
                            'default' => esc_html__('Default', 'lambda-admin-td'),
                            'primary' => esc_html__('Primary', 'lambda-admin-td'),
                            'info'    => esc_html__('Info', 'lambda-admin-td'),
                            'success' => esc_html__('Success', 'lambda-admin-td'),
                            'warning' => esc_html__('Warning', 'lambda-admin-td'),
                            'danger'  => esc_html__('Danger', 'lambda-admin-td'),
                            'link'    => esc_html__('Link', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Button size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of button to display', 'lambda-admin-td'),
                        'id'      => 'size',
                        'type'    => 'select',
                        'default' => 'normal',
                        'options' => array(
                            'normal'      => esc_html__('Default', 'lambda-admin-td'),
                            'lg' => esc_html__('Large', 'lambda-admin-td'),
                            'sm'      => esc_html__('Small', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Text', 'lambda-admin-td'),
                        'id'      => 'label',
                        'type'    => 'text',
                        'admin_label' => true,
                        'default' => esc_html__('My button', 'lambda-admin-td'),
                        'desc'    => esc_html__('Add a label to the button', 'lambda-admin-td'),
                    ),
                    array(
                        'name'        => esc_html__('Open Modal', 'lambda-admin-td'),
                        'desc'        => esc_html__('Select the modal to open on click(overrides the link option)', 'lambda-admin-td'),
                        'id'          => 'modal',
                        'type'        => 'select',
                        'default'     => '',
                        'blank'       => esc_html__('None', 'lambda-admin-td'),
                        'options'     => 'custom_post_id',
                        'post_type'   => 'oxy_modal',
                    ),
                    array(
                        'name'    => esc_html__('Link', 'lambda-admin-td'),
                        'id'      => 'link',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Where the button links to', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title'   => 'Advanced',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Open Link In', 'lambda-admin-td'),
                        'id'      => 'link_open',
                        'type'    => 'select',
                        'default' => '_self',
                        'options' => array(
                            '_self'   => esc_html__('Same page as it was clicked ', 'lambda-admin-td'),
                            '_blank'  => esc_html__('Open in new window/tab', 'lambda-admin-td'),
                            '_parent' => esc_html__('Open the linked document in the parent frameset', 'lambda-admin-td'),
                            '_top'    => esc_html__('Open the linked document in the full body of the window', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Where the button link opens to', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title'   => 'Icon',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Icon Position', 'lambda-admin-td'),
                        'desc'    => esc_html__('Which side of the button to show the icon.', 'lambda-admin-td'),
                        'id'      => 'icon_position',
                        'type'    => 'select',
                        'default' => 'left',
                        'options' => array(
                            'left'  => esc_html__('Left', 'lambda-admin-td'),
                            'right' => esc_html__('Right', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Icon Animation', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose an icon animation', 'lambda-admin-td'),
                        'id'      => 'animation',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/animations.php'
                    ),
                    array(
                        'name'    => esc_html__('Icon', 'lambda-admin-td'),
                        'desc'    => esc_html__('Icon to display', 'lambda-admin-td'),
                        'id'      => 'icon',
                        'admin_label' => true,
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => ''
                    ),
                    array(
                        'id'        => 'override_bg',
                        'name'      => esc_html__('Override Background Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Sets custom background color for the button', 'lambda-admin-td'),
                        'type'      => 'colour',
                        'default'   => '',
                        'format'    => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                ),
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Margin Left', 'lambda-admin-td'),
                        'desc'    => esc_html__('Amount of space to add to the left of this element.', 'lambda-admin-td'),
                        'id'      => 'margin_left',
                        'type' => 'slider',
                        'default'   => '0',
                        'attr'      => array(
                            'max'       => 300,
                            'min'       => 0,
                            'step'      => 10,
                        )
                    ),
                    array(
                        'name'    => esc_html__('Margin Right', 'lambda-admin-td'),
                        'desc'    => esc_html__('Amount of space to add to the right of this element.', 'lambda-admin-td'),
                        'id'      => 'margin_right',
                        'type' => 'slider',
                        'default'   => '0',
                        'attr'      => array(
                            'max'       => 300,
                            'min'       => 0,
                            'step'      => 10,
                        )
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            ),
        ),
    ),
    'vc_jumbotron' => array(
        'shortcode'   => 'vc_jumbotron',
        'title'       => esc_html__('Jumbotron', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates a Jumbotron bootstrap component.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Title', 'lambda-admin-td'),
                        'id'      => 'title',
                        'type'    => 'text',
                        'holder'  => 'h1',
                        'default' => esc_html__('', 'lambda-admin-td'),
                        'desc'    => esc_html__('The title of the jumbotron', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Main Text', 'lambda-admin-td'),
                        'id'      => 'content',
                        'type'    => 'textarea_html',
                        'default' => esc_html__('This is a simple hero unit.', 'lambda-admin-td'),
                        'desc'    => esc_html__('Main text that will appear in the jumbotron', 'lambda-admin-td'),
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'vc_message' => array(
        'shortcode'   => 'vc_message',
        'title'       => esc_html__('Alert', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates a Bootstrap Alert box.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Alert type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Type of alert to display', 'lambda-admin-td'),
                        'id'      => 'color',
                        'type'    => 'select',
                        'default' => 'alert-success',
                        'options' => array(
                            'alert-success' => esc_html__('Success', 'lambda-admin-td'),
                            'alert-info'    => esc_html__('Information', 'lambda-admin-td'),
                            'alert-warning' => esc_html__('Warning', 'lambda-admin-td'),
                            'alert-danger'  => esc_html__('Danger', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Title', 'lambda-admin-td'),
                        'id'      => 'title',
                        'type'    => 'text',
                        'holder'  => 'h2',
                        'default' => esc_html__('Watch Out!', 'lambda-admin-td'),
                        'desc'    => esc_html__('The bold text that appears first in the alert', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Main Text', 'lambda-admin-td'),
                        'id'      => 'content',
                        'type'    => 'text',
                        'holder'  => 'div',
                        'default' => esc_html__('Change a few things up and try submitting again.', 'lambda-admin-td'),
                        'desc'    => esc_html__('Main text that will appear in the alert box', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Dismissable', 'lambda-admin-td'),
                        'id'      => 'dismissable',
                        'type'    => 'select',
                        'default' => 'false',
                        'desc'    => esc_html__('Defines if the alert can be removed using an x in the corner.', 'lambda-admin-td'),
                        'options' => array(
                            'true'  => esc_html__('Closable', 'lambda-admin-td'),
                            'false' => esc_html__('Not Closable', 'lambda-admin-td'),
                        ),
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'carousel' => array(
        'shortcode'     => 'carousel',
        'title'         => esc_html__('Carousel', 'lambda-admin-td'),
        'desc'          => esc_html__('Adds a Carousel slideshow to the page.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Carousel', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Choose a slideshow', 'lambda-admin-td'),
                        'desc'    => esc_html__('Populate your slider with one of the slideshows you created', 'lambda-admin-td'),
                        'id'      => 'carousel',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'slideshow',
                    ),
                    array(
                        'name'    => esc_html__('Carousel Count', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of slides to show, set to 0 to show all', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '0',
                        'admin_label' => true,
                        'attr'    => array(
                            'max'  => 30,
                            'min'  => 0,
                            'step' => 1
                        )
                    ),
                    array(
                        'name'      => esc_html__('Show navigation arrows', 'lambda-admin-td'),
                        'id'        => 'directionnav',
                        'type'      => 'select',
                        'default'   =>  'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Show controls', 'lambda-admin-td'),
                        'id'        => 'showcontrols',
                        'type'      => 'select',
                        'default'   =>  'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Captions', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Show Captions', 'lambda-admin-td'),
                        'id'        => 'captions',
                        'type'      => 'select',
                        'default'   =>  'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'panel' => array(
        'shortcode' => 'panel',
        'title'     => esc_html__('Panel', 'lambda-admin-td'),
        'desc'      => esc_html__('Creates a Bootstrap Panel with a title and some content.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Title', 'lambda-admin-td'),
                        'id'      => 'title',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('The title of the panel.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Panel Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Style of panel to display', 'lambda-admin-td'),
                        'id'      => 'style',
                        'type'    => 'select',
                        'default' => 'panel-default',
                        'options' => array(
                            'panel-default' => esc_html__('Default', 'lambda-admin-td'),
                            'panel-primary'  => esc_html__('Primary', 'lambda-admin-td'),
                            'panel-info'     => esc_html__('Info', 'lambda-admin-td'),
                            'panel-success'  => esc_html__('Success', 'lambda-admin-td'),
                            'panel-warning'  => esc_html__('Warning', 'lambda-admin-td'),
                            'panel-danger'   => esc_html__('Danger', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'      => esc_html__('Panel Background Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the background color of panel content', 'lambda-admin-td'),
                        'id'        => 'background_colour',
                        'type'      => 'colour',
                        'format'    => 'rgba',
                        'default'   => '',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'progress' =>    array(
        'shortcode'   => 'progress',
        'title'       => esc_html__('Progress Bar', 'lambda-admin-td'),
        'desc'        => esc_html__('Creates a Bootstrap progress bar with a % value.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Percentage', 'lambda-admin-td'),
                        'desc'    => esc_html__('Percentage of the progress bar', 'lambda-admin-td'),
                        'id'      => 'percentage',
                        'type'    => 'slider',
                        'default' => '50',
                        'attr'    => array(
                            'max'  => 100,
                            'min'  => 1,
                            'step' => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Progress Bar Text', 'lambda-admin-td'),
                        'desc'    => esc_html__('Text to be displayed on the progress bar', 'lambda-admin-td'),
                        'id'      => 'progress_text',
                        'type'    => 'text',
                        'holder'  => 'h3',
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Bar Type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Type of bar to display', 'lambda-admin-td'),
                        'id'      => 'type',
                        'type'    => 'select',
                        'default' => 'progress',
                        'options' => array(
                            'progress'                        => esc_html__('Normal', 'lambda-admin-td'),
                            'progress progress-striped'       => esc_html__('Striped', 'lambda-admin-td'),
                            'progress progress-striped active'=> esc_html__('Animated', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Bar Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Style of bar to display', 'lambda-admin-td'),
                        'id'      => 'style',
                        'type'    => 'select',
                        'default' => 'progress-bar-info',
                        'options' => array(
                            'progress-bar-primary'  => esc_html__('Primary', 'lambda-admin-td'),
                            'progress-bar-info'     => esc_html__('Info', 'lambda-admin-td'),
                            'progress-bar-success'  => esc_html__('Success', 'lambda-admin-td'),
                            'progress-bar-warning'  => esc_html__('Warning', 'lambda-admin-td'),
                            'progress-bar-danger'   => esc_html__('Danger', 'lambda-admin-td'),
                        ),
                    ),
                ),
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'lead' => array(
        'shortcode'   => 'lead',
        'title'       => esc_html__('Lead Paragraph', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds a lead paragraph, with slightly larger and bolder text.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'      => esc_html__('Text Alignment', 'lambda-admin-td'),
                        'id'        => 'align',
                        'type'      => 'select',
                        'default'   => 'center',
                        'options' => array(
                            'default'   => esc_html__('Default alignment', 'lambda-admin-td'),
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                            'justify'  => esc_html__('Justify', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the lead text.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Lead Text', 'lambda-admin-td'),
                        'holder'    => 'p',
                        'id'        => 'content',
                        'type'      => 'textarea',
                        'default'   => '',
                        'desc'    => esc_html__('Text to show in the lead text paragraph.', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'magnific_popup_link' => array(
        'shortcode'     => 'magnific_popup_link',
        'title'         => esc_html__('Magnific Popup Link', 'lambda-admin-td'),
        'desc'          => esc_html__('A popup used for images and videos.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('General', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Link', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the text to use as a link', 'lambda-admin-td'),
                        'id'        => 'content',
                        'type'      => 'text',
                        'default'   =>  ''
                    ),
                    array(
                        'name'      => esc_html__('Link Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the color of the link', 'lambda-admin-td'),
                        'id'        => 'text_color',
                        'type'      => 'select',
                        'options'   => array(
                            'text-normal' => esc_html__('Normal Color', 'lambda-admin-td'),
                            'text-light'  => esc_html__('Light Color', 'lambda-admin-td'),
                        ),
                        'default'   => 'text-normal'
                    ),
                    array(
                        'name'      => esc_html__('Display style', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the style that content will be displayed', 'lambda-admin-td'),
                        'id'        => 'display_style',
                        'type'      => 'select',
                        'options'   => array(
                            'block' => esc_html__('Block', 'lambda-admin-td'),
                            'inline'  => esc_html__('Inline', 'lambda-admin-td'),
                        ),
                        'default'   => 'inline'
                    ),
                    array(
                        'name'      => esc_html__('Src URL', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the source of video(Youtube or Vimeo) or image', 'lambda-admin-td'),
                        'id'        => 'src_url',
                        'type'      => 'text',
                        'default'   =>  '',
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'blockquote' => array(
        'shortcode'   => 'blockquote',
        'title'       => esc_html__('Blockquote', 'lambda-admin-td'),
        'desc'        => esc_html__('Creates a quotation.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'      => esc_html__('Text Alignment', 'lambda-admin-td'),
                        'id'        => 'align',
                        'type'      => 'select',
                        'default'   => 'left',
                        'options' => array(
                            'default'   => esc_html__('Default alignment', 'lambda-admin-td'),
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                            'center'  => esc_html__('Center', 'lambda-admin-td'),
                            'justify'  => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Sets the text alignment of blockquote.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Quote Text', 'lambda-admin-td'),
                        'holder'    => 'p',
                        'id'        => 'content',
                        'type'      => 'textarea',
                        'default'   => '',
                        'desc'    => esc_html__('Text to show in the quote.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Who?', 'lambda-admin-td'),
                        'id'      => 'who',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Who said the quote.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Citation', 'lambda-admin-td'),
                        'id'      => 'cite',
                        'type'    => 'text',
                        'default' => '',
                        'desc'    => esc_html__('Citation of the quote (i.e the source).', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'code' => array(
        'shortcode'   => 'code',
        'title'       => esc_html__('Code', 'lambda-admin-td'),
        'desc'        => esc_html__('For use adding source code to a page.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'      => esc_html__('Source Code', 'lambda-admin-td'),
                        'holder'    => 'p',
                        'id'        => 'content',
                        'type'      => 'textarea',
                        'default'   => '',
                        'desc'    => esc_html__('Source code to display.', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'countdown' => array(
        'shortcode'   => 'countdown',
        'title'       => esc_html__('Countdown Timer', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds a countdown timer for coming soon pages.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'      => esc_html__('Countdown Date', 'lambda-admin-td'),
                        'id'        => 'date',
                        'type'      => 'text',
                        'default'   => '',
                        'admin_label' => true,
                        'desc'    => esc_html__('Date to countdown to in the format YYYY/MM/DD HH:MM.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Number Font Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose size of the font to use for the countdown numbers.', 'lambda-admin-td'),
                        'id'      => 'number_size',
                        'type'    => 'select',
                        'options' => array(
                            'normal' => esc_html__('Normal', 'lambda-admin-td'),
                            'super'  => esc_html__('Super (60px)', 'lambda-admin-td'),
                            'hyper'  => esc_html__('Hyper (96px)', 'lambda-admin-td'),
                        ),
                        'default' => 'normal',
                    ),
                    array(
                        'name'    => esc_html__('Number Font Weight', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose weight of the font of the countdown numbers.', 'lambda-admin-td'),
                        'id'      => 'number_weight',
                        'type'    => 'select',
                        'options' => array(
                            'regular'  => esc_html__('Regular', 'lambda-admin-td'),
                            'black'    => esc_html__('Black', 'lambda-admin-td'),
                            'bold'     => esc_html__('Bold', 'lambda-admin-td'),
                            'light'    => esc_html__('Light', 'lambda-admin-td'),
                            'hairline' => esc_html__('Hairline', 'lambda-admin-td'),
                        ),
                        'default' => 'regular',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_scroll' => array(
        'shortcode'   => 'vc_scroll',
        'title'       => esc_html__('Scroll to button', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates a link for scrolling to other places in your page.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Link', 'lambda-admin-td'),
                        'id'      => 'link',
                        'type'    => 'text',
                        'holder'  => 'a',
                        'default' => esc_html__('#id', 'lambda-admin-td'),
                        'desc'    => esc_html__('The link for the scroll button', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Arrow for the scroll to link', 'lambda-admin-td'),
                        'id'        => 'icon',
                        'type'      => 'select',
                        'default'   =>  '',
                        'options'   => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                    ),
                    array(
                        'name'      => esc_html__('Icon Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the color of the icon', 'lambda-admin-td'),
                        'id'        => 'icon_color',
                        'type'      => 'select',
                        'options'   => array(
                            'text-normal' => esc_html__('Normal Color', 'lambda-admin-td'),
                            'text-light'  => esc_html__('Light Color', 'lambda-admin-td'),
                        ),
                        'default'   => 'text-normal'
                    ),
                    array(
                        'name'    => esc_html__('Place to the bottom', 'lambda-admin-td'),
                        'desc'    => esc_html__('Place the button to the bottom of the section', 'lambda-admin-td'),
                        'id'      => 'place_bottom',
                        'default' => '',
                        'type' => 'select',
                        'options' => array(
                            'on'  => esc_html__('Yes', 'lambda-admin-td'),
                            '' => esc_html__('No', 'lambda-admin-td')
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'tags' => array(
        'shortcode'   => 'tags',
        'title'       => esc_html__('Tags', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds a list of tags', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Tag List', 'lambda-admin-td'),
                        'id'      => 'tags',
                        'type'    => 'text',
                        'admin_label' => true,
                        'default' => esc_html__('Web Design, Logo Design, CSS Animations', 'lambda-admin-td'),
                        'desc'    => esc_html__('Comma seperated values that will be inserted in the tag list', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose size of the tag list.', 'lambda-admin-td'),
                        'id'      => 'size',
                        'type'    => 'select',
                        'options' => array(
                            'normal' => esc_html__('Normal', 'lambda-admin-td'),
                            'lg'     => esc_html__('Large', 'lambda-admin-td'),
                            'sm'     => esc_html__('Mini', 'lambda-admin-td'),
                        ),
                        'default' => 'normal',
                    ),
                    array(
                        'name'    => esc_html__('Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the style of the tag list.', 'lambda-admin-td'),
                        'id'      => 'style',
                        'default' => 'tag-list',
                        'type' => 'select',
                        'options' => array(
                            'tag-list'        => esc_html__('Block', 'lambda-admin-td'),
                            'tag-list-inline' => esc_html__('Inline-Block', 'lambda-admin-td'),
                        ),
                    ),
                ),
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'skills' => array(
        'shortcode'   => 'skills',
        'title'       => esc_html__('Skills', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds a list of skills', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Skill List', 'lambda-admin-td'),
                        'id'      => 'skills',
                        'type'    => 'text',
                        'admin_label' => true,
                        'default' => esc_html__('Web Design, Logo Design, CSS Animations', 'lambda-admin-td'),
                        'desc'    => esc_html__('Comma seperated values that will be inserted in the skills list', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose size of the skill list.', 'lambda-admin-td'),
                        'id'      => 'size',
                        'type'    => 'select',
                        'options' => array(
                            '' => esc_html__('Normal', 'lambda-admin-td'),
                            'lead'     => esc_html__('Large', 'lambda-admin-td')
                        ),
                        'default' => 'normal',
                    ),
                ),
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        ),
    ),
    'vc_video' => array(
        'shortcode'     => 'vc_video',
        'title'         => esc_html__('Video Player', 'lambda-admin-td'),
        'desc'          => esc_html__('Adds a video player.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Video Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Video URL', 'lambda-admin-td'),
                        'id'        => 'src',
                        'type'      => 'text',
                        'default'   =>  '',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_column_text' => array(
        'shortcode'     => 'vc_column_text',
        'title'         => esc_html__('Text Block', 'lambda-admin-td'),
        'desc'          => esc_html__('A block of text with WYSIWYG editor.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Text Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Text', 'lambda-admin-td'),
                        'id'        => 'content',
                        'type'      => 'textarea_html',
                        'holder'    => 'div',
                        'default'   =>  '<p>I am text block. Click edit button to change this text.</p>',
                    ),
                    array(
                        'name'    => esc_html__('Text Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Css text columns.', 'lambda-admin-td'),
                        'id'      => 'text_columns',
                        'type'    => 'select',
                        'default' => 'col-text-1',
                        'options' => array(
                            'col-text-1' => esc_html__('1 Column', 'lambda-admin-td'),
                            'col-text-2' => esc_html__('2 Column', 'lambda-admin-td'),
                            'col-text-3' => esc_html__('3 Column', 'lambda-admin-td'),
                            'col-text-4' => esc_html__('4 Column', 'lambda-admin-td'),
                            'col-text-5' => esc_html__('5 Column', 'lambda-admin-td'),
                            'col-text-6' => esc_html__('6 Column', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_column_slab_text' => array(
        'shortcode'     => 'vc_column_slab_text',
        'title'         => esc_html__('Slab Text', 'lambda-admin-td'),
        'desc'          => esc_html__('A block of slab text with WYSIWYG editor.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Text Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Text', 'lambda-admin-td'),
                        'desc'      => esc_html__('Hit Enter for new line, only in the Visual tab.', 'lambda-admin-td'),
                        'id'        => 'content',
                        'type'      => 'textarea_html',
                        'holder'    => 'div',
                        'default'   =>  'I am text block. Click edit button to change this text.',
                    ),
                    array(
                        'name'    => esc_html__('Header Type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Type of heading to use for text.', 'lambda-admin-td'),
                        'id'      => 'slab_header',
                        'type'    => 'select',
                        'default' => 'h3',
                        'options' => array(
                            'h1' => esc_html__('H1', 'lambda-admin-td'),
                            'h2' => esc_html__('H2', 'lambda-admin-td'),
                            'h3' => esc_html__('H3', 'lambda-admin-td'),
                            'h4' => esc_html__('H4', 'lambda-admin-td'),
                            'h5' => esc_html__('H5', 'lambda-admin-td'),
                            'h6' => esc_html__('H6', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Font Weight', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose weight for the font.', 'lambda-admin-td'),
                        'id'      => 'slab_weight',
                        'type'    => 'select',
                        'options' => array(
                            'regular'  => esc_html__('Regular', 'lambda-admin-td'),
                            'black'    => esc_html__('Black', 'lambda-admin-td'),
                            'bold'     => esc_html__('Bold', 'lambda-admin-td'),
                            'light'    => esc_html__('Light', 'lambda-admin-td'),
                            'hairline' => esc_html__('Hairline', 'lambda-admin-td'),
                        ),
                        'default' => 'regular',
                    )
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'sharing' => array(
        'shortcode'   => 'sharing',
        'title'       => esc_html__('Social Sharing Icons', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds Social Sharing icons to your pages', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'      => esc_html__('Title', 'lambda-admin-td'),
                        'id'        => 'title',
                        'type'      => 'text',
                        'desc'      => esc_html__('Title that will appear above the social share icons.', 'lambda-admin-td'),
                        'default'   => '',
                    ),
                    array(
                        'name'      => esc_html__('Icons Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the color of icons', 'lambda-admin-td'),
                        'id'        => 'icons_color',
                        'type'      => 'select',
                        'options'   => array(
                            'text-normal' => esc_html__('Normal Text', 'lambda-admin-td'),
                            'text-light'  => esc_html__('Light Text', 'lambda-admin-td'),
                        ),
                        'default'   => 'text-normal'
                    ),
                    array(
                        'name'    => esc_html__('Social Networks', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select which social networks you would like to share on.', 'lambda-admin-td'),
                        'id'      => 'social_networks',
                        'default' =>  'facebook,twitter,google,pinterest,linkedin,vk',
                        'type'    => 'select',
                        'admin_label' => true,
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        ),
                        'options' => array(
                            'facebook'  => esc_html__('Facebook', 'lambda-admin-td'),
                            'twitter'   => esc_html__('Twitter', 'lambda-admin-td'),
                            'google'    => esc_html__('Google+', 'lambda-admin-td'),
                            'pinterest' => esc_html__('Pinterest', 'lambda-admin-td'),
                            'linkedin'  => esc_html__('LinkedIn', 'lambda-admin-td'),
                            'vk'        => esc_html__('VK', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Icon Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of the social icons.', 'lambda-admin-td'),
                        'id'      => 'icon_size',
                        'default' => 'sm',
                        'type' => 'select',
                        'options' => array(
                            'sm' => esc_html__('Small', 'lambda-admin-td'),
                            'lg' => esc_html__('Large', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Show Background', 'lambda-admin-td'),
                        'desc'    => esc_html__('Show a coloured background behind the social icon.', 'lambda-admin-td'),
                        'id'      => 'background_show',
                        'default' => 'background',
                        'type' => 'select',
                        'options' => array(
                            'background' => esc_html__('Show', 'lambda-admin-td'),
                            'simple'     => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('On Hover Background Color', 'lambda-admin-td'),
                        'desc'    => esc_html__('Change the background color behind the social icon on hover.', 'lambda-admin-td'),
                        'id'      => 'background_show_hover',
                        'default' => 'on',
                        'type' => 'select',
                        'options' => array(
                            'on' => esc_html__('On', 'lambda-admin-td'),
                            'off'     => esc_html__('Off', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Background Shape', 'lambda-admin-td'),
                        'desc'    => esc_html__('Shape of coloured background behind the social icon.', 'lambda-admin-td'),
                        'id'      => 'background_shape',
                        'default' => 'circle',
                        'type' => 'select',
                        'options' => array(
                            'circle' => esc_html__('Circle', 'lambda-admin-td'),
                            'rect'   => esc_html__('Square', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Background Shape Colour', 'lambda-admin-td'),
                        'desc'    => esc_html__('Colour of background behind the social icon.', 'lambda-admin-td'),
                        'id'      => 'background_colour',
                        'type' => 'colour',
                        'default' => '',
                        'format'  => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                ),
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'socialicons' => array(
        'shortcode'   => 'socialicons',
        'title'       => esc_html__('Social Icons', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds Social icons to your pages', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'      => esc_html__('Title', 'lambda-admin-td'),
                        'id'        => 'title',
                        'type'      => 'text',
                        'desc'      => esc_html__('Title that will appear above the social icons.', 'lambda-admin-td'),
                        'default'   => '',
                    ),
                    array(
                        'name'      => esc_html__('Icons Color', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the color of the icons', 'lambda-admin-td'),
                        'id'        => 'icons_color',
                        'type'      => 'select',
                        'options'   => array(
                            'text-normal' => esc_html__('Normal Text', 'lambda-admin-td'),
                            'text-light'  => esc_html__('Light Text', 'lambda-admin-td'),
                        ),
                        'default'   => 'text-normal'
                    ),
                    array(
                        'name'    => esc_html__('Icon Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of the social icons.', 'lambda-admin-td'),
                        'id'      => 'icon_size',
                        'default' => 'sm',
                        'type' => 'select',
                        'options' => array(
                            'sm' => esc_html__('Small', 'lambda-admin-td'),
                            'lg' => esc_html__('Large', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Show Background', 'lambda-admin-td'),
                        'desc'    => esc_html__('Show a coloured background behind the social icon.', 'lambda-admin-td'),
                        'id'      => 'background_show',
                        'default' => 'background',
                        'type' => 'select',
                        'options' => array(
                            'background' => esc_html__('Show', 'lambda-admin-td'),
                            'simple'     => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Background Shape', 'lambda-admin-td'),
                        'desc'    => esc_html__('Shape of coloured background behind the social icon.', 'lambda-admin-td'),
                        'id'      => 'background_shape',
                        'default' => 'circle',
                        'type' => 'select',
                        'options' => array(
                            'circle' => esc_html__('Circle', 'lambda-admin-td'),
                            'rect'   => esc_html__('Square', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Background Shape Colour', 'lambda-admin-td'),
                        'desc'    => esc_html__('Colour of background behind the social icon.', 'lambda-admin-td'),
                        'id'      => 'background_colour',
                        'default' => '#82c9ed',
                        'type' => 'colour',
                    ),
                    array(
                        'name'    => esc_html__('Open Social Links In', 'lambda-admin-td'),
                        'id'      => 'link_target',
                        'type'    => 'select',
                        'default' => '_self',
                        'options' => array(
                            '_self'   => esc_html__('Same page as it was clicked ', 'lambda-admin-td'),
                            '_blank'  => esc_html__('Open in new window/tab', 'lambda-admin-td'),
                            '_parent' => esc_html__('Open the linked document in the parent frameset', 'lambda-admin-td'),
                            '_top'    => esc_html__('Open the linked document in the full body of the window', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Where the social links open to', 'lambda-admin-td'),
                    ),
                ),
            ),
            array(
                'title'     => esc_html__('Links', 'lambda-admin-td'),
                'fields'    => oxy_create_social_options(),
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'divider' => array(
        'shortcode'   => 'divider',
        'title'       => esc_html__('Divider', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds space between elements.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Visibility', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggles if the divider is visible or not.', 'lambda-admin-td'),
                        'id'      => 'visibility',
                        'default' => 'hidden',
                        'type'    => 'select',
                        'options' => array(
                            'visible' => esc_html__('Show', 'lambda-admin-td'),
                            'hidden' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Background Colour', 'lambda-admin-td'),
                        'desc'    => esc_html__('Background colour of the divider if it is set to visible.', 'lambda-admin-td'),
                        'id'      => 'background_colour',
                        'default' => '#FFFFFF',
                        'type' => 'colour',
                    ),
                    array(
                        'name'      => esc_html__('Mobile Height ', 'lambda-admin-td'),
                        'desc'      => esc_html__('Height of divider on mobile displays (<768px).', 'lambda-admin-td'),
                        'id'        => 'xs_height',
                        'type'      => 'slider',
                        'default'   => '24',
                        'attr'      => array(
                            'max'       => 500,
                            'min'       => 0,
                            'step'      => 1,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Tablet Height ', 'lambda-admin-td'),
                        'desc'      => esc_html__('Height of divider on tablet displays (>768px <992px).', 'lambda-admin-td'),
                        'id'        => 'sm_height',
                        'type'      => 'slider',
                        'default'   => '24',
                        'attr'      => array(
                            'max'       => 500,
                            'min'       => 0,
                            'step'      => 1,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Desktop Height ', 'lambda-admin-td'),
                        'desc'      => esc_html__('Height of divider on desktop displays (>992px <1200px).', 'lambda-admin-td'),
                        'id'        => 'md_height',
                        'type'      => 'slider',
                        'default'   => '24',
                        'attr'      => array(
                            'max'       => 500,
                            'min'       => 0,
                            'step'      => 1,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Large Desktop Height ', 'lambda-admin-td'),
                        'desc'      => esc_html__('Height of divider on large desktop displays (>1200px).', 'lambda-admin-td'),
                        'id'        => 'lg_height',
                        'type'      => 'slider',
                        'default'   => '24',
                        'attr'      => array(
                            'max'       => 500,
                            'min'       => 0,
                            'step'      => 1,
                        )
                    ),
                ),
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            )
        )
    ),
    'bordered_divider' => array(
        'shortcode'   => 'bordered_divider',
        'title'       => esc_html__('Bordered Divider', 'lambda-admin-td'),
        'desc'        => esc_html__('Adds a divider between elements.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'sections'    => array(
            array(
                'title'   => esc_html__('General', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Color', 'lambda-admin-td'),
                        'desc'    => esc_html__('Color of the divider.', 'lambda-admin-td'),
                        'id'      => 'divider_color',
                        'type'    => 'colour',
                        'format'  => 'rgba',
                        'default'   => '',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                    array(
                        'name'      => esc_html__('Height', 'lambda-admin-td'),
                        'desc'      => esc_html__('Height of divider.', 'lambda-admin-td'),
                        'id'        => 'divider_height',
                        'type'      => 'slider',
                        'default'   => '4',
                        'attr'      => array(
                            'max'       => 20,
                            'min'       => 1,
                            'step'      => 1,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Width', 'lambda-admin-td'),
                        'desc'      => esc_html__('Width of divider.', 'lambda-admin-td'),
                        'id'        => 'divider_width',
                        'type'      => 'slider',
                        'default'   => '40',
                        'attr'      => array(
                            'max'       => 1000,
                            'min'       => 0,
                            'step'      => 5,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Alignment', 'lambda-admin-td'),
                        'id'        => 'divider_align',
                        'type'      => 'select',
                        'default'   => 'divider-border-center',
                        'options' => array(
                            'divider-border-default' => esc_html__('Default', 'lambda-admin-td'),
                            'divider-border-left'    => esc_html__('Left', 'lambda-admin-td'),
                            'divider-border-center'  => esc_html__('Center', 'lambda-admin-td'),
                            'divider-border-right'   => esc_html__('Right', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Sets the alignment of the divider.', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'ruler_divider' => array(
        'shortcode'     => 'ruler_divider',
        'title'         => esc_html__('Ruler Divider', 'lambda-admin-td'),
        'desc'          => esc_html__('A ruler that is used to divide content.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => true,
        'sections'      => array(
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'chart' => array(
        'shortcode'     => 'chart',
        'title'         => esc_html__('Chart', 'lambda-admin-td'),
        'desc'          => esc_html__('Add a data chart to the page.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Chart Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Chart Type', 'lambda-admin-td'),
                        'desc'      => esc_html__('Choose from pie, doughnut, radar, polararea, bar, line', 'lambda-admin-td'),
                        'id'        => 'type',
                        'type'      => 'select',
                        'options'   => array(
                            'pie'       => esc_html__('PIE Chart', 'lambda-admin-td'),
                            'doughnut'  => esc_html__('Doughnut Chart', 'lambda-admin-td'),
                            'radar'     => esc_html__('Radar Chart', 'lambda-admin-td'),
                            'polararea' => esc_html__('Polar Area Chart', 'lambda-admin-td'),
                            'bar'       => esc_html__('Bar Chart', 'lambda-admin-td'),
                            'line'      => esc_html__('Line Chart', 'lambda-admin-td'),
                        ),
                        'admin_label' => true,
                        'default'   =>  'pie',
                    ),
                    array(
                        'name'      => esc_html__('Data', 'lambda-admin-td'),
                        'desc'      => esc_html__('Used for the pie, doughnut and radar charts.', 'lambda-admin-td'),
                        'id'        => 'data',
                        'type'      => 'textarea',
                        'default'   =>  '',
                    ),
                    array(
                        'name'      => esc_html__('Datasets', 'lambda-admin-td'),
                        'desc'      => esc_html__("Used for the bar, line, and radar charts,  the data for each 'set' is put in as before, but using the 'next' keyword to seperate each of the datasets.", 'lambda-admin-td'),
                        'id'        => 'datasets',
                        'type'      => 'textarea',
                        'default'   =>  '',
                    ),
                    array(
                        'name'      => esc_html__('Colours', 'lambda-admin-td'),
                        'desc'      => esc_html__("These should be put in in there HEX value only(as above). These are the default colors, there should be the same number of colours as data points, or datasets, but if you only got a few, or too many, don't worry the plugin will handle it.  (more practically if you don't want your chart to look like a rainbow, the plugin will cycle a set a colors for your data)", 'lambda-admin-td'),
                        'id'        => 'colors',
                        'type'      => 'textarea',
                        'default'   =>  '',
                    ),
                    array(
                        'name'      => esc_html__('Labels', 'lambda-admin-td'),
                        'desc'      => esc_html__('Used for the bar, line and polararea charts.', 'lambda-admin-td'),
                        'id'        => 'labels',
                        'type'      => 'textarea',
                        'default'   =>  '',
                    ),
                    array(
                        'name'      => esc_html__('Width', 'lambda-admin-td'),
                        'desc'      => esc_html__('This sets the width of the container for the chart, and should be the only size property you need to adjust.  Setting it as a % value will make the chart fluid / responsive, you can use any valid CSS measurement of value (em, px, %).', 'lambda-admin-td'),
                        'id'        => 'width',
                        'type'      => 'text',
                        'default'   =>  '70%',
                    ),
                    array(
                        'name'      => esc_html__('Height', 'lambda-admin-td'),
                        'desc'      => esc_html__('optional - the height will automatticaly be proportionate to the width, and you should not need to adjust this .', 'lambda-admin-td'),
                        'id'        => 'height',
                        'type'      => 'text',
                        'default'   =>  'auto',
                    ),
                    array(
                        'name'      => esc_html__('Canvas Width', 'lambda-admin-td'),
                        'desc'      => esc_html__('This sets the width of the container for the chart, and should be the only size property you need to adjust.  Setting it as a % value will make the chart fluid / responsive, you can use any valid CSS measurement of value (em, px, %).', 'lambda-admin-td'),
                        'id'        => 'canvaswidth',
                        'type'      => 'text',
                        'default'   =>  '625',
                    ),
                    array(
                        'name'      => esc_html__('Canvas Height', 'lambda-admin-td'),
                        'desc'      => esc_html__('This will be converted to px, only adjust this up or down if you experience rendering issues.', 'lambda-admin-td'),
                        'id'        => 'canvasheight',
                        'type'      => 'text',
                        'default'   =>  '625',
                    ),
                    array(
                        'name'      => esc_html__('Relative Width', 'lambda-admin-td'),
                        'desc'      => esc_html__('The width to height ratio', 'lambda-admin-td'),
                        'id'        => 'relativewidth',
                        'type'      => 'text',
                        'default'   =>  '1',
                    ),
                    array(
                        'name'      => esc_html__('Margin', 'lambda-admin-td'),
                        'desc'      => esc_html__('optional - use standard css syntax for the margin, defaults to 5px for top, bottom, left and right.', 'lambda-admin-td'),
                        'id'        => 'margin',
                        'type'      => 'text',
                        'default'   =>  '20px',
                    ),
                    array(
                        'name'      => esc_html__('Align', 'lambda-admin-td'),
                        'desc'      => esc_html__('optional - use one of the standard WordPress alignment classes alignleft, alignright, aligncenter.', 'lambda-admin-td'),
                        'id'        => 'align',
                        'type'      => 'text',
                        'default'   =>  '',
                    ),
                    array(
                        'name'      => esc_html__('Class', 'lambda-admin-td'),
                        'desc'      => esc_html__('optional - apply a css class to the chart container.', 'lambda-admin-td'),
                        'id'        => 'class',
                        'type'      => 'text',
                        'default'   =>  '',
                    ),
                    array(
                        'name'      => esc_html__('Scale Font Size', 'lambda-admin-td'),
                        'desc'      => esc_html__('Adjust the font size of the scale for the charts that display it', 'lambda-admin-td'),
                        'id'        => 'scalefontsize',
                        'type'      => 'slider',
                        'default'   => '12',
                        'attr'      => array(
                            'max'       => 100,
                            'min'       => 1,
                            'step'      => 1,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Scale Font Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Change the scale font colour', 'lambda-admin-td'),
                        'id'        => 'scalefontcolor',
                        'type'      => 'colour',
                        'default'   => '#666666',
                    ),
                    array(
                        'name'      => esc_html__('Scale Override', 'lambda-admin-td'),
                        'desc'      => esc_html__('By default this is turned off, and the script attempts to output an appropriate scale, setting this to true will require the following three properties to be set as well: scaleSteps, scaleStepWidth and scaleStartValue', 'lambda-admin-td'),
                        'id'        => 'scaleoverride',
                        'type'      => 'select',
                        'options'   => array(
                            'true'  => esc_html__('On', 'lambda-admin-td'),
                            'false' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default'   =>  'false',
                    ),
                    array(
                        'name'      => esc_html__('Scale Steps', 'lambda-admin-td'),
                        'desc'      => esc_html__('Only applicable if scaleOveride is set to true - the number of steps in the scale', 'lambda-admin-td'),
                        'id'        => 'scalesteps',
                        'type'      => 'text',
                        'default'   =>  'null',
                    ),
                    array(
                        'name'      => esc_html__('Scale Step Width', 'lambda-admin-td'),
                        'desc'      => esc_html__('Only applicable if scaleOveride is set to true - the value jump used in the scale', 'lambda-admin-td'),
                        'id'        => 'scalestepwidth',
                        'type'      => 'text',
                        'default'   =>  'null',
                    ),
                    array(
                        'name'      => esc_html__('Scale Start Value', 'lambda-admin-td'),
                        'desc'      => esc_html__('Only applicable if scaleOveride is set to true - the center starting value for the scale', 'lambda-admin-td'),
                        'id'        => 'scalestartvalue',
                        'type'      => 'text',
                        'default'   =>  'null',
                    ),
                    array(
                        'name'      => esc_html__('Chart Animation', 'lambda-admin-td'),
                        'desc'      => esc_html__('Turn the load animation for the charts on or off', 'lambda-admin-td'),
                        'id'        => 'animation',
                        'type'      => 'select',
                        'options'   => array(
                            'true'  => esc_html__('On', 'lambda-admin-td'),
                            'false' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default'   =>  'true',
                    ),
                    array(
                        'name'      => esc_html__('Fill Opacity', 'lambda-admin-td'),
                        'desc'      => esc_html__('For line, bar and polararea type charts you can set an opactiy for fill of the chart.', 'lambda-admin-td'),
                        'id'        => 'fillopacity',
                        'type'      => 'slider',
                        'default'   => '0.7',
                        'attr'      => array(
                            'max'       => 1,
                            'min'       => 0,
                            'step'      => 0.1,
                        )
                    ),
                    array(
                        'name'      => esc_html__('Point Stroke Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('For line and polararea type charts you can set the point color, though usually looks pretty good with the default.', 'lambda-admin-td'),
                        'id'        => 'pointstrokecolor',
                        'type'      => 'colour',
                        'default'   => '#FFFFFF',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_tabs' => array(
        'shortcode'     => 'vc_tabs',
        'title'         => esc_html__('Tabs', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates Bootstrap Tabs with content.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Choose a menu', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Tabs Style', 'lambda-admin-td'),
                        'desc'      => esc_html__('Select a style to use for the tabs.', 'lambda-admin-td'),
                        'id'        => 'style',
                        'type'      => 'select',
                        'options'   => array(
                            'top'    => esc_html__('Top', 'lambda-admin-td'),
                            'bottom' => esc_html__('Bottom', 'lambda-admin-td'),
                        ),
                        'default'   =>  '',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_accordion' => array(
        'shortcode'     => 'vc_accordion',
        'title'         => esc_html__('Accordion', 'lambda-admin-td'),
        'desc'          => esc_html__('Creates a Bootstrap Accordion.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'sections'      => array(
            array(
                'title' => esc_html__('Accordion Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Accordion type', 'lambda-admin-td'),
                        'desc'    => esc_html__('Type of accordion to display', 'lambda-admin-td'),
                        'id'      => 'type',
                        'type'    => 'select',
                        'default' => 'primary',
                        'admin_label' => true,
                        'options' => array(
                            'default' => esc_html__('Default', 'lambda-admin-td'),
                            'primary' => esc_html__('Primary', 'lambda-admin-td'),
                            'info'    => esc_html__('Info', 'lambda-admin-td'),
                            'success' => esc_html__('Success', 'lambda-admin-td'),
                            'warning' => esc_html__('Warning', 'lambda-admin-td'),
                            'danger'  => esc_html__('Danger', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'simple_icon_list' => array(
        'shortcode'   => 'simple_icon_list',
        'title'       => esc_html__('Icons List', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a list of icons.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title' => esc_html__('Video Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Item size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose between normal or and big item size', 'lambda-admin-td'),
                        'id'      => 'size',
                        'type'    => 'radio',
                        'options' => array(
                            'normal' => esc_html__('Normal', 'lambda-admin-td'),
                            'big'    => esc_html__('Big', 'lambda-admin-td'),
                        ),
                        'default' => 'normal',
                    ),
                )
            ),
            array(
                'title' => esc_html__('Text', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/text-color.php'
            ),
            array(
                'title' => esc_html__('List Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'simple_icon' => array(
        'shortcode'   => 'simple_icon',
        'title'       => esc_html__('Simple Icon', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays an icon alongside some text.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Icon', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select an icon that will appear in your list.', 'lambda-admin-td'),
                        'id'      => 'icon',
                        'type'    => 'select',
                        'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php',
                        'default' => ''
                    ),
                    array(
                        'name'      => esc_html__('Icon Colour', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the colour of the icon', 'lambda-admin-td'),
                        'id'        => 'icon_color',
                        'type'      => 'colour',
                        'default'   => '',
                        'format'  => 'rgba',
                        'attr'      => array(
                            'class' => 'allow-empty'
                        )
                    ),
                    array(
                        'name'        => esc_html__('Title', 'lambda-admin-td'),
                        'id'          => 'title',
                        'type'        => 'text',
                        'admin_label' => true,
                        'default'     => '',
                        'desc'        => esc_html__('Choose a title for your featured item.', 'lambda-admin-td'),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Responsive', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/responsive.php'
            )
        )
    ),
    'audio' => array(
        'shortcode'   => 'audio',
        'title'       => esc_html__('Audio Player', 'lambda-admin-td'),
        'desc'        => esc_html__('Creates an audio player.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'        => esc_html__('Audio URL', 'lambda-admin-td'),
                        'id'          => 'src',
                        'type'        => 'text',
                        'admin_label' => true,
                        'default'     => '',
                        'desc'        => esc_html__('Add a link to your audio file (mp3, m4a, ogg, wav, wma).', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Loop Audio', 'lambda-admin-td'),
                        'id'      => 'loop',
                        'desc'    => esc_html__('Allows for looping of media.', 'lambda-admin-td'),
                        'type'    => 'select',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            '' => esc_html__('Off', 'lambda-admin-td')
                        ),
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Autoplay', 'lambda-admin-td'),
                        'id'      => 'autoplay',
                        'desc'    => esc_html__('Causes the media to automatically play as soon as the media file is ready.', 'lambda-admin-td'),
                        'type'    => 'select',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            '' => esc_html__('Off', 'lambda-admin-td')
                        ),
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Preload', 'lambda-admin-td'),
                        'id'      => 'preload',
                        'desc'    => esc_html__('Specifies if and how the audio should be loaded when the page loads.', 'lambda-admin-td'),
                        'type'    => 'select',
                        'options' => array(
                            ''     => esc_html__('Audio should not be loaded', 'lambda-admin-td'),
                            'auto'     => esc_html__('Audio should be loaded', 'lambda-admin-td'),
                            'metadata' => esc_html__('Metadata should be loaded', 'lambda-admin-td')
                        ),
                        'default' => ''
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'product' => array(
        'shortcode'   => 'product',
        'title'       => esc_html__('Product', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a single product', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'        => esc_html__('Product', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose a product to display.', 'lambda-admin-td'),
                        'id'          => 'id',
                        'type'        => 'select',
                        'default'     =>  '',
                        'blank'       => esc_html__('None', 'lambda-admin-td'),
                        'options'     => 'custom_post_id',
                        'post_type'   => 'product',
                        'admin_label' => true,
                    ),
                )
            ),
        )
    ),
    'product_page' => array(
        'shortcode'   => 'product_page',
        'title'       => esc_html__('Product Page', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a single product page', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'        => esc_html__('Product', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose a product to display.', 'lambda-admin-td'),
                        'id'          => 'id',
                        'type'        => 'select',
                        'default'     =>  '',
                        'blank'       => esc_html__('None', 'lambda-admin-td'),
                        'options'     => 'custom_post_id',
                        'post_type'   => 'product',
                        'admin_label' => true,
                    ),
                )
            ),
        )
    ),
    'product_category' => array(
        'shortcode'   => 'product_category',
        'title'       => esc_html__('Product Category', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays a product category', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'        => esc_html__('Product Category', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose a product category to display', 'lambda-admin-td'),
                        'id'          => 'category',
                        'type'        => 'select',
                        'default'     =>  '',
                        'blank'       => esc_html__('None', 'lambda-admin-td'),
                        'options'     => 'taxonomy',
                        'taxonomy'    => 'product_cat',
                        'admin_label' => true,
                    ),
                    array(
                        'name'    => esc_html__('Number', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of products to display.', 'lambda-admin-td'),
                        'id'      => 'per_page',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of columns to display.', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'        => esc_html__('Order by', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose the way products will be ordered.', 'lambda-admin-td'),
                        'id'          => 'orderby',
                        'type'        => 'select',
                        'default'     =>  'none',
                        'options'     => array(
                            'none'     => esc_html__('None', 'lambda-admin-td'),
                            'title' => esc_html__('Title', 'lambda-admin-td'),
                            'name' => esc_html__('Name', 'lambda-admin-td'),
                            'date' => esc_html__('Date', 'lambda-admin-td'),
                            'ID'     => esc_html__('ID', 'lambda-admin-td'),
                            'author' => esc_html__('Author', 'lambda-admin-td'),
                            'modified' => esc_html__('Last Modified', 'lambda-admin-td'),
                            'parent' => esc_html__('Parent id', 'lambda-admin-td'),
                            'rand' => esc_html__('Random', 'lambda-admin-td'),
                            'comment_count' => esc_html__('Number of comments', 'lambda-admin-td')
                        )
                    ),
                    array(
                        'name'        => esc_html__('Order', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose how products will be ordered.', 'lambda-admin-td'),
                        'id'          => 'order',
                        'type'        => 'select',
                        'default'     =>  'ASC',
                        'options'     => array(
                            'ASC'     => esc_html__('Ascending', 'lambda-admin-td'),
                            'DESC' => esc_html__('Descending', 'lambda-admin-td'),
                        )
                    ),
                )
            ),
        )
    ),
    'product_categories' => array(
        'shortcode'   => 'product_categories',
        'title'       => esc_html__('Product Categories', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays product categories', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'        => esc_html__('Product Categories', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose the product categories to display.  Enter the IDs comma separated, or leave empty for all categories.', 'lambda-admin-td'),
                        'id'          => 'ids',
                        'type'        => 'text',
                        'default'     =>  ''
                    ),
                    array(
                        'name'    => esc_html__('Number', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of categories to display.', 'lambda-admin-td'),
                        'id'      => 'number',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of columns to display.', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'        => esc_html__('Order by', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose the way categories will be ordered.', 'lambda-admin-td'),
                        'id'          => 'orderby',
                        'type'        => 'select',
                        'default'     =>  'none',
                        'options'     => array(
                            'none'     => esc_html__('None', 'lambda-admin-td'),
                            'title' => esc_html__('Title', 'lambda-admin-td'),
                            'name' => esc_html__('Name', 'lambda-admin-td'),
                            'date' => esc_html__('Date', 'lambda-admin-td'),
                            'ID'     => esc_html__('ID', 'lambda-admin-td'),
                            'author' => esc_html__('Author', 'lambda-admin-td'),
                            'modified' => esc_html__('Last Modified', 'lambda-admin-td'),
                            'parent' => esc_html__('Parent id', 'lambda-admin-td'),
                            'rand' => esc_html__('Random', 'lambda-admin-td'),
                            'comment_count' => esc_html__('Number of comments', 'lambda-admin-td')
                        )
                    ),
                    array(
                        'name'        => esc_html__('Order', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose how categories will be ordered.', 'lambda-admin-td'),
                        'id'          => 'order',
                        'type'        => 'select',
                        'default'     =>  'ASC',
                        'options'     => array(
                            'ASC'     => esc_html__('Ascending', 'lambda-admin-td'),
                            'DESC' => esc_html__('Descending', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'        => esc_html__('Hide empty categories', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose whether to show categories with no products set.', 'lambda-admin-td'),
                        'id'          => 'hide_empty',
                        'type'        => 'select',
                        'default'     =>  '0',
                        'options'     => array(
                            '1'     => esc_html__('Hide', 'lambda-admin-td'),
                            '0' => esc_html__('Show', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Parent', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the parent id of the categories to display. Set to 0 to only display top level categories', 'lambda-admin-td'),
                        'id'      => 'parent',
                        'type'    => 'text',
                        'default' => '0'
                    )
                )
            ),
        )
    ),
    'sale_products' => array(
        'shortcode'   => 'sale_products',
        'title'       => esc_html__('Sale Products', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays sale products', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Number', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of products to display.', 'lambda-admin-td'),
                        'id'      => 'per_page',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of columns to display.', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'        => esc_html__('Order by', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose the way products will be ordered.', 'lambda-admin-td'),
                        'id'          => 'orderby',
                        'type'        => 'select',
                        'default'     =>  'none',
                        'options'     => array(
                            'none'     => esc_html__('None', 'lambda-admin-td'),
                            'title' => esc_html__('Title', 'lambda-admin-td'),
                            'name' => esc_html__('Name', 'lambda-admin-td'),
                            'date' => esc_html__('Date', 'lambda-admin-td'),
                            'ID'     => esc_html__('ID', 'lambda-admin-td'),
                            'author' => esc_html__('Author', 'lambda-admin-td'),
                            'modified' => esc_html__('Last Modified', 'lambda-admin-td'),
                            'parent' => esc_html__('Parent id', 'lambda-admin-td'),
                            'rand' => esc_html__('Random', 'lambda-admin-td'),
                            'comment_count' => esc_html__('Number of comments', 'lambda-admin-td')
                        )
                    ),
                    array(
                        'name'        => esc_html__('Order', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose how products will be ordered.', 'lambda-admin-td'),
                        'id'          => 'order',
                        'type'        => 'select',
                        'default'     =>  'ASC',
                        'options'     => array(
                            'ASC'     => esc_html__('Ascending', 'lambda-admin-td'),
                            'DESC' => esc_html__('Descending', 'lambda-admin-td'),
                        )
                    )
                )
            )
        )
    ),
    'best_selling_products' => array(
        'shortcode'   => 'best_selling_products',
        'title'       => esc_html__('Best Selling Products', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays your best selling products', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Number', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of products to display.', 'lambda-admin-td'),
                        'id'      => 'per_page',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of columns to display.', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'text',
                        'default' => ''
                    ),
                )
            )
        )
    ),
    'top_rated_products' => array(
        'shortcode'   => 'top_rated_products',
        'title'       => esc_html__('Top Rated Products', 'lambda-admin-td'),
        'desc'        => esc_html__('Displays your top rated products', 'lambda-admin-td'),
        'insert_with' => 'text',
        'has_content'   => false,
        'sections'    => array(
            array(
                'title'   => 'general',
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Number', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of products to display.', 'lambda-admin-td'),
                        'id'      => 'per_page',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'    => esc_html__('Columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Set the number of columns to display.', 'lambda-admin-td'),
                        'id'      => 'columns',
                        'type'    => 'text',
                        'default' => ''
                    ),
                    array(
                        'name'        => esc_html__('Order by', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose the way products will be ordered.', 'lambda-admin-td'),
                        'id'          => 'orderby',
                        'type'        => 'select',
                        'default'     =>  'none',
                        'options'     => array(
                            'none'     => esc_html__('None', 'lambda-admin-td'),
                            'title' => esc_html__('Title', 'lambda-admin-td'),
                            'name' => esc_html__('Name', 'lambda-admin-td'),
                            'date' => esc_html__('Date', 'lambda-admin-td'),
                            'ID'     => esc_html__('ID', 'lambda-admin-td'),
                            'author' => esc_html__('Author', 'lambda-admin-td'),
                            'modified' => esc_html__('Last Modified', 'lambda-admin-td'),
                            'parent' => esc_html__('Parent id', 'lambda-admin-td'),
                            'rand' => esc_html__('Random', 'lambda-admin-td'),
                            'comment_count' => esc_html__('Number of comments', 'lambda-admin-td')
                        )
                    ),
                    array(
                        'name'        => esc_html__('Order', 'lambda-admin-td'),
                        'desc'        => esc_html__('Choose how products will be ordered.', 'lambda-admin-td'),
                        'id'          => 'order',
                        'type'        => 'select',
                        'default'     =>  'ASC',
                        'options'     => array(
                            'ASC'     => esc_html__('Ascending', 'lambda-admin-td'),
                            'DESC' => esc_html__('Descending', 'lambda-admin-td'),
                        )
                    )
                )
            )
        )
    ),
    'post_featured' => array(
        'shortcode' => 'post_featured',
        'title'     => esc_html__('Featured Post', 'lambda-admin-td'),
        'desc'       => esc_html__('Displays a section about a selected blog post.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Featured Post', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'     => esc_html__('Featured post', 'lambda-admin-td'),
                        'desc'     => esc_html__('Select the blog post that will be displayed', 'lambda-admin-td'),
                        'id'       => 'featured',
                        'default'  =>  '',
                        'type'     => 'select',
                        'options'  => 'taxonomy',
                        'taxonomy' => 'posts',
                        'blank_label' => esc_html__('Select a Post', 'lambda-admin-td'),
                    ),
                    array(
                        'name'        => esc_html__('Post category', 'lambda-admin-td'),
                        'desc'        => esc_html__('Display a category', 'lambda-admin-td'),
                        'id'          => 'cat',
                        'default'     =>  '',
                        'type'        => 'select',
                        'options'     => 'taxonomy',
                        'taxonomy'    => 'category',
                        'blank_label' => esc_html__('Don\'t display a Category', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Title Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of heading to use for post titles.', 'lambda-admin-td'),
                        'id'      => 'title_tag',
                        'type'    => 'select',
                        'default' => 'h3',
                        'options' => array(
                            'h1' => esc_html__('H1', 'lambda-admin-td'),
                            'h2' => esc_html__('H2', 'lambda-admin-td'),
                            'h3' => esc_html__('H3', 'lambda-admin-td'),
                            'h4' => esc_html__('H4', 'lambda-admin-td'),
                            'h5' => esc_html__('H5', 'lambda-admin-td'),
                            'h6' => esc_html__('H6', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Text Align', 'lambda-admin-td'),
                        'id'        => 'text_align',
                        'type'      => 'select',
                        'default'   => 'left',
                        'options' => array(
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                            'justify'  => esc_html__('Justify', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the blockquote and citation of the testimonial', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Caption Vertical Alignment', 'lambda-admin-td'),
                        'id'        => 'item_caption_vertical',
                        'type'      => 'select',
                        'default'   => 'bottom',
                        'options' => array(
                            'middle' => esc_html__('Middle', 'lambda-admin-td'),
                            'top'    => esc_html__('Top', 'lambda-admin-td'),
                            'bottom' => esc_html__('Bottom', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Vertical alignment of the caption title and category.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Post Hover Effects Filter', 'lambda-admin-td'),
                        'id'      => 'item_hover_filter',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => array(
                            'none'      => esc_html__('None', 'lambda-admin-td'),
                            'sepia'     => esc_html__('Sepia', 'lambda-admin-td'),
                            'grayscale' => esc_html__('Grayscale', 'lambda-admin-td'),
                            'blur'      => esc_html__('Blur', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Effects filter to apply to the post on hover.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Hover Effect', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select an effect to add when you hover over the post.', 'lambda-admin-td'),
                        'id'      => 'hover_effect',
                        'type'    => 'select',
                        'default' => '',
                        'options' => array(
                            ''                    => esc_html__('No Effect', 'lambda-admin-td'),
                            'image-effect-zoom-in'  => esc_html__('Zoom In', 'lambda-admin-td'),
                            'image-effect-zoom-out' => esc_html__('Zoom Out', 'lambda-admin-td'),
                            'image-effect-scroll-left'  => esc_html__('Scroll Left', 'lambda-admin-td'),
                            'image-effect-scroll-right' => esc_html__('Scroll Right', 'lambda-admin-td')
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'menu' => array(
        'shortcode'     => 'menu',
        'title'         => esc_html__('Site Menu', 'lambda-admin-td'),
        'desc'          => esc_html__('Adds a site menu to the page.', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Choose a menu', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Choose a menu', 'lambda-admin-td'),
                        'desc'      => esc_html__('Select a wordpress menu to use.', 'lambda-admin-td'),
                        'id'        => 'menu_slug',
                        'type'      => 'select',
                        'options'   => $menus,
                        'admin_label' => true,
                        'default'   =>  '',
                    ),
                    array(
                        'name'    => esc_html__('Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a layout for your headers menu & logo', 'lambda-admin-td'),
                        'id'      => 'header_style',
                        'type'    => 'select',
                        'options' => array(
                            'logo-left-menu-right'   => esc_html__('Logo Left - Menu Right', 'lambda-admin-td'),
                            'logo-right-menu-left'   => esc_html__('Logo Right - Menu Left', 'lambda-admin-td'),
                            'logo-right-menu-below'  => esc_html__('Logo Right - Menu Below', 'lambda-admin-td'),
                            'logo-left-menu-below'   => esc_html__('Logo Left - Menu Below', 'lambda-admin-td'),
                            'logo-center-menu-below' => esc_html__('Logo Center - Menu Below', 'lambda-admin-td'),
                        ),
                        'default' => 'logo-left-menu-right',
                    ),
                    array(
                        'name'    => esc_html__('Sticky', 'lambda-admin-td'),
                        'desc'    => esc_html__('Make the navigation stick to the top of the page.', 'lambda-admin-td'),
                        'id'      => 'header_sticky',
                        'type'    => 'radio',
                        'options' => array(
                            'navbar-sticky'     => esc_html__('On', 'lambda-admin-td'),
                            'navbar-not-sticky' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'navbar-sticky',
                    ),
                    array(
                        'name'    => esc_html__('Capitalization', 'lambda-admin-td'),
                        'desc' => esc_html__('Sets the case of the text inside your header.', 'lambda-admin-td'),
                        'id'      => 'header_capitalization',
                        'type'    => 'select',
                        'options' => array(
                            'text-caps'      => esc_html__('Force Uppercase', 'lambda-admin-td'),
                            'text-lowercase' => esc_html__('Force Lowercase', 'lambda-admin-td'),
                            'text-none'      => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'text-none',
                    ),
                    array(
                        'name'    => esc_html__('Menu Width', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose between normal or fullwidth menu', 'lambda-admin-td'),
                        'id'      => 'container_class',
                        'type'    => 'select',
                        'options' => array(
                            'container'           => esc_html__('Normal', 'lambda-admin-td'),
                            'container-fullwidth' => esc_html__('Full Width', 'lambda-admin-td'),
                        ),
                        'default' => 'container',
                    )
                )
            )
        )
    ),
    'posts_slideshow' => array(
        'shortcode' => 'posts_slideshow',
        'title'     => esc_html__('Posts Slideshow', 'lambda-admin-td'),
        'desc'       => esc_html__('Displays a slideshow of recent posts.', 'lambda-admin-td'),
        'insert_with' => 'dialog',
        'has_content'   => false,
        'sections'   => array(
            array(
                'title' => esc_html__('Posts Slideshow', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Number of posts', 'lambda-admin-td'),
                        'desc'    => esc_html__('Total Number of posts to display.', 'lambda-admin-td'),
                        'id'      => 'count',
                        'type'    => 'slider',
                        'default' => '3',
                        'attr'    => array(
                            'max'   => 50,
                            'min'   => 1,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Post category', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose posts from a specific category', 'lambda-admin-td'),
                        'id'      => 'cat',
                        'default' =>  '',
                        'type'    => 'select',
                        'options' => 'categories',
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:100px'
                        )
                    ),
                    array(
                        'name'    => esc_html__('Offset', 'lambda-admin-td'),
                        'desc'    => esc_html__('Number of posts to displace or pass over.', 'lambda-admin-td'),
                        'id'      => 'offset',
                        'type'    => 'slider',
                        'default' => '0',
                        'attr'    => array(
                            'max'   => 50,
                            'min'   => 0,
                            'step'  => 1
                        )
                    ),
                    array(
                        'name'      => esc_html__('Speed', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the speed of the slideshow cycling, in milliseconds', 'lambda-admin-td'),
                        'id'        => 'speed',
                        'type'      => 'slider',
                        'default'   => '7000',
                        'attr'      => array(
                            'max'       => 15000,
                            'min'       => 2000,
                            'step'      => 1000
                        )
                    ),
                    array(
                        'name'      => esc_html__('Transition type', 'lambda-admin-td'),
                        'id'        => 'animation_type',
                        'type'      => 'select',
                        'default'   => 'slide',
                        'options' => array(
                            'slide' => esc_html__('Slide', 'lambda-admin-td'),
                            'fade'  => esc_html__('Fade', 'lambda-admin-td'),
                        ),
                        'desc' => esc_html__('Sets the type of animation that occurs between posts.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Show Controls', 'lambda-admin-td'),
                        'id'        => 'show_controls',
                        'type'      => 'select',
                        'default'   => 'show',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Toggles the slideshow bullet nav controls at the bottom.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Show navigation arrows', 'lambda-admin-td'),
                        'id'        => 'directionnav',
                        'type'      => 'select',
                        'default'   =>  'hide',
                        'options' => array(
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'    => esc_html__('Title Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of heading to use for post titles.', 'lambda-admin-td'),
                        'id'      => 'title_tag',
                        'type'    => 'select',
                        'default' => 'h3',
                        'options' => array(
                            'h1' => esc_html__('H1', 'lambda-admin-td'),
                            'h2' => esc_html__('H2', 'lambda-admin-td'),
                            'h3' => esc_html__('H3', 'lambda-admin-td'),
                            'h4' => esc_html__('H4', 'lambda-admin-td'),
                            'h5' => esc_html__('H5', 'lambda-admin-td'),
                            'h6' => esc_html__('H6', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Post Text Alignment', 'lambda-admin-td'),
                        'id'        => 'text_align',
                        'type'      => 'select',
                        'default'   => 'left',
                        'options' => array(
                            'left'      => esc_html__('Left', 'lambda-admin-td'),
                            'center'    => esc_html__('Center', 'lambda-admin-td'),
                            'right'     => esc_html__('Right', 'lambda-admin-td'),
                            'justify'   => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the post text & title.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Item Overlay Caption Vertical Alignment', 'lambda-admin-td'),
                        'id'        => 'item_caption_vertical',
                        'type'      => 'select',
                        'default'   => 'bottom',
                        'options' => array(
                            'middle' => esc_html__('Middle', 'lambda-admin-td'),
                            'top'    => esc_html__('Top', 'lambda-admin-td'),
                            'bottom' => esc_html__('Bottom', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Vertical alignment of the caption title and category.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Post Hover Effects Filter', 'lambda-admin-td'),
                        'id'      => 'item_hover_filter',
                        'type'    => 'select',
                        'default' => 'none',
                        'options' => array(
                            'none'      => esc_html__('None', 'lambda-admin-td'),
                            'sepia'     => esc_html__('Sepia', 'lambda-admin-td'),
                            'grayscale' => esc_html__('Grayscale', 'lambda-admin-td'),
                            'blur'      => esc_html__('Blur', 'lambda-admin-td'),
                        ),
                        'desc'    => esc_html__('Effects filter to apply to the post on hover.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Hover Effect', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select an effect to add when you hover over the post.', 'lambda-admin-td'),
                        'id'      => 'hover_effect',
                        'type'    => 'select',
                        'default' => '',
                        'options' => array(
                            ''                    => esc_html__('No Effect', 'lambda-admin-td'),
                            'image-effect-zoom-in'  => esc_html__('Zoom In', 'lambda-admin-td'),
                            'image-effect-zoom-out' => esc_html__('Zoom Out', 'lambda-admin-td'),
                            'image-effect-scroll-left'  => esc_html__('Scroll Left', 'lambda-admin-td'),
                            'image-effect-scroll-right' => esc_html__('Scroll Right', 'lambda-admin-td')
                        ),
                    ),
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
    'vc_gallery' => array(
        'shortcode'     => 'vc_gallery',
        'title'         => esc_html__('Gallery', 'lambda-admin-td'),
        'desc'          => esc_html__('Click on the Add Media button to add a gallery', 'lambda-admin-td'),
        'insert_with'   => 'dialog',
        'has_content'   => false,
        'sections'      => array(
            array(
                'title' => esc_html__('Gallery Options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Text', 'lambda-admin-td'),
                        'id'        => 'content',
                        'type'      => 'textarea_html',
                        'holder'    => 'div',
                        'default'   =>  '<p>Click on Add Media->Create Gallery to add a gallery</p>',
                    )
                )
            ),
            array(
                'title' => esc_html__('Extra Options', 'lambda-admin-td'),
                'fields' => include OXY_THEME_DIR . 'inc/options/shortcodes/shared/global.php'
            )
        )
    ),
);
