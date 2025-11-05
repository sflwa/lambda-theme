<?php
/**
 * Creates all theme metaboxes
 *
 * @package Lambda
 * @subpackage Admin
 * @since 0.1
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 */

// global $oxy_theme;

$heading_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/heading.php';
$section_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/section.php';
$override_header_options = array(
    array(
        'name' => esc_html__('Override Default Header', 'lambda-admin-td'),
        'desc' => esc_html__('Disregard the default settings (in Pages option page) for this page and use custom options for the header', 'lambda-admin-td'),
        'id'   => 'override_header',
        'type' => 'select',
        'default' => 'default',
        'options' => array(
            'default'  => esc_html__('Use Defaults', 'lambda-admin-td'),
            'override' => esc_html__('Override Header Options', 'lambda-admin-td'),
        ),
    )
);

/*  PAGE FOOTER SHOW / HIDE */
$oxy_theme->register_metabox(array(
    'id' => 'page_footer_show',
    'title' => esc_html__('Toggle Footer', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('page'),
    'fields' => array(
        array(
            'name'    => esc_html__('Show Footer', 'lambda-admin-td'),
            'desc'    => esc_html__('Show or hide the footer(hides footer, upper footer and sub footer).', 'lambda-admin-td'),
            'id'      => 'site_footer',
            'type' => 'select',
            'default' => 'show',
            'options' => array(
                'show' => esc_html__('Show', 'lambda-admin-td'),
                'hide' => esc_html__('Hide', 'lambda-admin-td'),
            )
        ),
    )
));

/*  PAGE HEADER OPTIONS */
$oxy_theme->register_metabox(array(
    'id' => 'override_page_header',
    'title' => esc_html__('Header Override', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('page', 'oxy_portfolio_image', 'oxy_staff', 'oxy_service'),
    'javascripts' => array(
        array(
            'handle' => 'header_options_script',
            'src'    => OXY_THEME_URI . 'inc/assets/js/metaboxes/header-options.js',
            'deps'   => array('jquery'),
            'localize' => array(
                'object_handle' => 'theme',
                'data'          => THEME_SHORT
            ),
        ),
    ),
    'fields' => $override_header_options
));

/*  PAGE HEADER SHOW / HIDE */
$oxy_theme->register_metabox(array(
    'id' => 'page_header_show',
    'title' => esc_html__('Toggle Header', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('page', 'oxy_portfolio_image', 'oxy_staff', 'oxy_service'),
    'fields' => array(
        array(
            'name' => esc_html__('Show Header', 'lambda-admin-td'),
            'desc' => esc_html__('Show or hide the header at the top of the page.', 'lambda-admin-td'),
            'id'   => 'show_header',
            'type' => 'select',
            'default' => 'show',
            'options' => array(
                'hide' => esc_html__('Hide', 'lambda-admin-td'),
                'show' => esc_html__('Show', 'lambda-admin-td'),
            )
        )
    )
));

/*  PAGE HEADER HEADING OPTIONS */
$oxy_theme->register_metabox(array(
    'id' => 'page_header_heading',
    'title' => esc_html__('Header Options', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('page', 'oxy_portfolio_image', 'oxy_staff', 'oxy_service'),
    'fields' => $heading_options
));

/*  SECTION HEADER HEADING OPTIONS */
$oxy_theme->register_metabox(array(
    'id' => 'page_header_section',
    'title' => esc_html__('Header Section Options', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('page', 'oxy_portfolio_image', 'oxy_staff', 'oxy_service'),
    'fields' => $section_options
));

/*  POST SUBHEADER OPTION */
$oxy_theme->register_metabox(array(
    'id' => 'single_post_subheader_section',
    'title' => esc_html__('Post Subheader', 'lambda-admin-td'),
    'priority' => 'high',
    'context' => 'advanced',
    'pages' => array('post'),
    'fields' => array(
        array(
            'name'    => esc_html__('Subheader', 'lambda-admin-td'),
            'id'      => 'post_subheader',
            'type'    => 'text',
            'default' => '',
            'desc'    => esc_html__('Add a subheader for the post', 'lambda-admin-td'),
        )
    )
));

$oxy_theme->register_metabox(array(
    'id'       => 'page_bullet_nav',
    'title'    => esc_html__('Extra Page Options', 'lambda-admin-td'),
    'priority' => 'default',
    'context'  => 'advanced',
    'pages'    => array('page'),
    'fields'   => array(
        array(
            'name'    => esc_html__('Bullet Navigation', 'lambda-admin-td'),
            'id'      => 'bullet_nav',
            'desc'    => esc_html__('Display a bullet-style scroll navigation.', 'lambda-admin-td'),
            'default' => 'hide',
            'type'    => 'select',
            'options' => array(
                'show'    => esc_html__('Show', 'lambda-admin-td'),
                'hide'    => esc_html__('Hide', 'lambda-admin-td'),
            )
        ),
        array(
            'name'    => esc_html__('Bullet Show Tooltips', 'lambda-admin-td'),
            'id'      => 'bullet_nav_tooltips',
            'desc'    => esc_html__('Display the section label when you hover over a bullet.', 'lambda-admin-td'),
            'default' => 'off',
            'type'    => 'select',
            'options' => array(
                'on'    => esc_html__('Show', 'lambda-admin-td'),
                'off'   => esc_html__('Hide', 'lambda-admin-td'),
            )
        ),
    )
));

$exclude_posts = array();
global $oxy_theme;
$current_stack_id = $oxy_theme->get_option('site_stack', false);
if (false !== $current_stack_id) {
    array_push($exclude_posts, $current_stack_id);
}

// fetch list of skins
$skins = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'oxy_stack',
    'orderby' => 'title',
    'post__not_in' => $exclude_posts
));
$skin_list = array();
$skin_list[0] = 'Current Skin';
foreach ($skins as $skin) {
    $skin_list[$skin->ID] = $skin->post_title;
}

/*  PAGE HEADER OPTIONS */
$oxy_theme->register_metabox(array(
    'id' => 'page_site_overrides',
    'title' => esc_html__('Site Overrides', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('page','oxy_portfolio_image', 'oxy_staff', 'oxy_service' ),
    'fields' => array(
        array(
            'name'    => esc_html__('Show Menu', 'lambda-admin-td'),
            'desc'    => esc_html__('Show or hide the sites top navigation menu (ideal for landing pages).', 'lambda-admin-td'),
            'id'      => 'site_top_nav',
            'type' => 'select',
            'default' => 'show',
            'options' => array(
                'show' => esc_html__('Show Top Nav', 'lambda-admin-td'),
                'hide' => esc_html__('Hide Top Nav', 'lambda-admin-td'),
            )
        ),
        array(
            'name'    => esc_html__('Top Navigation Transparency', 'lambda-admin-td'),
            'desc'    => esc_html__('Make the sites top navigation transparent', 'lambda-admin-td'),
            'id'      => 'site_top_nav_transparency',
            'type' => 'select',
            'default' => 'off',
            'options' => array(
                'on'    => esc_html__('On (Transparent)', 'lambda-admin-td'),
                'off'   => esc_html__('Off (Opaque)', 'lambda-admin-td'),
            )
        ),
        array(
            'name'    => esc_html__('Load Skin', 'lambda-admin-td'),
            'desc'    => esc_html__('Loads a separate skin for this page', 'lambda-admin-td'),
            'id'      => 'site_skin',
            'type'     => 'select',
            'default' => '',
            'options'  => $skin_list
        ),
    )
));

$oxy_theme->register_metabox(array(
    'id'    => 'portfolio_type_metabox',
    'title' => esc_html__('Portfolio Post Type', 'lambda-admin-td'),
    'priority' => 'high',
    'context'  => 'advanced',
    'pages'    => array('oxy_portfolio_image' ),
    'javascripts' => array(
        array(
            'handle' => 'portfolio_post_type',
            'src'    => OXY_THEME_URI . 'inc/assets/js/metaboxes/portfolio-post-type.js',
            'deps'   => array('jquery'),
            'localize' => array(
                'object_handle' => 'theme',
                'data'          => THEME_SHORT
            ),
        ),
    ),
    'fields'  => array(
        array(
            'name' => esc_html__('Post Type', 'lambda-admin-td'),
            'desc' => esc_html__('Select what type of portfolio post this will be.', 'lambda-admin-td'),
            'id'   => 'post_type',
            'type' => 'select',
            'options' => array(
                'standard' => esc_html__('Standard Post', 'lambda-admin-td'),
                'video'    => esc_html__('Video Post', 'lambda-admin-td'),
                'gallery'  => esc_html__('Gallery Post', 'lambda-admin-td'),
            ),
            'default' => 'standard',
        ),
        array(
            'name'     => esc_html__('Popup Video Link', 'lambda-admin-td'),
            'desc'     => esc_html__('Enter a youtube, vimeo or custom link to a video here.  This will appear in the items &quot;view larger&quot; popup.', 'lambda-admin-td'),
            'id'       => 'post_video_link',
            'type'     => 'text',
            'default' =>  '',
        ),
        array(
            'name'     => esc_html__('Popup Gallery', 'lambda-admin-td'),
            'desc'     => esc_html__('Create a gallery in the editor below (click add media -> create gallery).  This will appear in the items &quot;view larger&quot; popup.', 'lambda-admin-td'),
            'id'       => 'post_gallery',
            'type'     => 'editor',
            'default' =>  '',
        ),
    ),
));

$link_options = array(
    'id'    => 'link_metabox',
    'title' => esc_html__('Link', 'lambda-admin-td'),
    'priority' => 'default',
    'context'  => 'advanced',
    'pages'    => array('oxy_service', 'oxy_staff', 'oxy_portfolio_image'),
    'javascripts' => array(
        array(
            'handle' => 'slider_links_options_script',
            'src'    => OXY_THEME_URI . 'inc/assets/js/metaboxes/slider-links-options.js',
            'deps'   => array('jquery'),
            'localize' => array(
                'object_handle' => 'theme',
                'data'          => THEME_SHORT
            ),
        ),
    ),
    'fields'  => array(
        array(
            'name' => esc_html__('Link Type', 'lambda-admin-td'),
            'desc' => esc_html__('Make this post link to something.  Default link will link to the single item page.', 'lambda-admin-td'),
            'id'   => 'link_type',
            'type' => 'select',
            'options' => array(
                'default'   => esc_html__('Default Link', 'lambda-admin-td'),
                'page'      => esc_html__('Page', 'lambda-admin-td'),
                'post'      => esc_html__('Post', 'lambda-admin-td'),
                'portfolio' => esc_html__('Portfolio', 'lambda-admin-td'),
                'category'  => esc_html__('Category', 'lambda-admin-td'),
                'url'       => esc_html__('URL', 'lambda-admin-td'),
                'no-link'   => esc_html__('No Link', 'lambda-admin-td')
            ),
            'default' => 'default',
        ),
        array(
            'name'     => esc_html__('Page Link', 'lambda-admin-td'),
            'desc'     => esc_html__('Choose a page to link this item to', 'lambda-admin-td'),
            'id'       => 'page_link',
            'type'     => 'select',
            'options'  => 'taxonomy',
            'taxonomy' => 'pages',
            'default' =>  '',
        ),
        array(
            'name'     => esc_html__('Post Link', 'lambda-admin-td'),
            'desc'     => esc_html__('Choose a post to link this item to', 'lambda-admin-td'),
            'id'       => 'post_link',
            'type'     => 'select',
            'options'  => 'taxonomy',
            'taxonomy' => 'posts',
            'default' =>  '',
        ),
        array(
            'name'     => esc_html__('Portfolio Link', 'lambda-admin-td'),
            'desc'     => esc_html__('Choose a portfolio item to link this item to', 'lambda-admin-td'),
            'id'       => 'portfolio_link',
            'type'     => 'select',
            'options'  => 'taxonomy',
            'taxonomy' => 'oxy_portfolio_image',
            'default' =>  '',
        ),
        array(
            'name'     => esc_html__('Category Link', 'lambda-admin-td'),
            'desc'     => esc_html__('Choose a category list to link this item to', 'lambda-admin-td'),
            'id'       => 'category_link',
            'type'     => 'select',
            'options'  => 'categories',
            'default' =>  '',
        ),
        array(
            'name'    => esc_html__('URL Link', 'lambda-admin-td'),
            'desc'     => esc_html__('Choose a URL to link this item to', 'lambda-admin-td'),
            'id'      => 'url_link',
            'type'    => 'text',
            'default' =>  '',
        ),
        array(
            'name'    => esc_html__('Open Link In', 'lambda-admin-td'),
            'id'      => 'target',
            'type'    => 'select',
            'default' => '_self',
            'options' => array(
                '_self'   => esc_html__('Same page as it was clicked ', 'lambda-admin-td'),
                '_blank'  => esc_html__('Open in new window/tab', 'lambda-admin-td'),
                '_parent' => esc_html__('Open the linked document in the parent frameset', 'lambda-admin-td'),
                '_top'    => esc_html__('Open the linked document in the full body of the window', 'lambda-admin-td')
            ),
            'desc'    => esc_html__('Where the link will open.', 'lambda-admin-td'),
        ),
    ),
);

$oxy_theme->register_metabox($link_options);

// modify link options metabox for slideshow image before registering
$link_options['fields'][0]['default'] = 'no-link';
$link_options['pages'] = array('oxy_slideshow_image');
$link_options['id'] = 'slide_link_metabox';
$link_options['fields'][6]['options']['magnific'] = esc_html__('Open in magnific popup', 'lambda-admin-td');

$oxy_theme->register_metabox($link_options);


$oxy_theme->register_metabox(array(
    'id' => 'Citation',
    'title' => esc_html__('Citation', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('oxy_testimonial'),
    'fields' => array(
        array(
            'name'    => esc_html__('Citation', 'lambda-admin-td'),
            'desc'    => esc_html__('Reference to the source of the quote', 'lambda-admin-td'),
            'id'      => 'citation',
            'type'    => 'text',
            'default' => '',
        ),
    )
));

$oxy_theme->register_metabox(array(
    'id' => 'services_icon_metabox',
    'title' => esc_html__('Service Icon', 'lambda-admin-td'),
    'priority' => 'core',
    'context' => 'advanced',
    'pages' => array('oxy_service'),
    'fields' => array(
        array(
            'name'    => esc_html__('Icon', 'lambda-admin-td'),
            'desc'    => esc_html__('Select an icon that will appear in your service shape.', 'lambda-admin-td'),
            'id'      => 'icon',
            'type'    => 'select',
            'default' => '',
            'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php'
        )
    )
));

$oxy_theme->register_metabox(array(
    'id' => 'staff_info',
    'title' => esc_html__('Personal Details', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('oxy_staff'),
    'fields' => array(
        array(
            'name'    => esc_html__('Job Title', 'lambda-admin-td'),
            'desc'    => esc_html__('Sub header that is shown below the staff members name.', 'lambda-admin-td'),
            'id'      => 'position',
            'type'    => 'text',
            'default' => '',
        ),
    )
));

$staff_social = array();
for ($i = 0; $i < 5; $i++) {
    $staff_social[] =
        array(
            'name' => esc_html__('Social Icon', 'lambda-admin-td') . ' ' . ($i+1),
            'desc' => esc_html__('Social Network Icon to show for this Staff Member', 'lambda-admin-td'),
            'id'   => 'icon' . $i,
            'type' => 'select',
            'default' => '',
            'options' => include OXY_THEME_DIR . 'inc/options/global-options/icons.php'
        );
    $staff_social[] =
        array(
            'name'  => esc_html__('Social Link', 'lambda-admin-td'). ' ' . ($i+1),
            'desc' => esc_html__('Add the url to the staff members social network here.', 'lambda-admin-td'),
            'id'    => 'link' . $i,
            'type'  => 'text',
            'default' => '',
            'std'   => '',
        );
}

$oxy_theme->register_metabox(array(
    'id' => 'staff_social',
    'title' => esc_html__('Social', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('oxy_staff'),
    'fields' => $staff_social,
));

$oxy_theme->register_metabox(array(
    'id' => 'portfolio_masonry_metabox',
    'title' => esc_html__('Portfolio Masonry Options', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('oxy_portfolio_image'),
    'fields' => array(
        array(
            'name'    => esc_html__('Masonry Image Width ', 'lambda-admin-td'),
            'desc'    => esc_html__('Select the width that the masonry portfolio shortcode will use for this item (normal 1 column wide 2 columns)', 'lambda-admin-td'),
            'id'      => 'masonry_width',
            'type'    => 'select',
            'options' => array(
                'normal'    => esc_html__('Normal', 'lambda-admin-td'),
                'wide'   => esc_html__('Wide', 'lambda-admin-td'),
            ),
            'default' => 'normal',
        ),
    )
));

$oxy_theme->register_metabox(array(
    'id'       => 'service_template_metabox',
    'title'    => esc_html__('Service Template', 'lambda-admin-td'),
    'priority' => 'default',
    'context'  => 'advanced',
    'pages'    => array('oxy_service'),
    'fields'   => array(
        array(
            'name'    => esc_html__('Service Page Template', 'lambda-admin-td'),
            'id'      => 'template',
            'desc'    => esc_html__('Select a page template to use for this service', 'lambda-admin-td'),
            'type'    => 'select',
            'options' => array(
                'page.php'                  => esc_html__('Full Width', 'lambda-admin-td'),
                'template-leftsidebar.php'  => esc_html__('Left Sidebar', 'lambda-admin-td'),
                'template-rightsidebar.php' => esc_html__('Right Sidebar', 'lambda-admin-td'),
            ),
            'default' => 'page.php',
        ),
    )
));

$oxy_theme->register_metabox(array(
    'id'       => 'post_masonry_options',
    'title'    => esc_html__('Post Masonry', 'lambda-admin-td'),
    'priority' => 'default',
    'context'  => 'advanced',
    'pages'    => array('post'),
    'fields'   => array(
        array(
            'name'    => esc_html__('Masonry Image', 'lambda-admin-td'),
            'id'      => 'masonry_image',
            'desc'    => esc_html__('An image that will be used for this post in the masonry list view.', 'lambda-admin-td'),
            'store'   => 'url',
            'type'    => 'upload',
            'default' => '',
        ),
        array(
            'name'    => esc_html__('Masonry Image Width ', 'lambda-admin-td'),
            'desc'    => esc_html__('Select the width that the masonry portfolio shortcode will use for this item (normal 1 column wide 2 columns)', 'lambda-admin-td'),
            'id'      => 'masonry_width',
            'type'    => 'radio',
            'options' => array(
                'normal' => esc_html__('Normal', 'lambda-admin-td'),
                'wide'   => esc_html__('Wide', 'lambda-admin-td'),
            ),
            'default' => 'normal',
        ),
    )
));

$oxy_theme->register_metabox(array(
    'id' => 'category_header',
    'title' => esc_html__('Category Header Type', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'taxonomies' => array('product_cat'),
    'fields' => array_merge($override_header_options, $heading_options, $section_options)
));

$oxy_theme->register_metabox(array(
    'id' => 'tag_header',
    'title' => esc_html__('Product Tag Header Type', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'taxonomies' => array('product_tag'),
    'fields' => array_merge($override_header_options, $heading_options, $section_options)
));

$oxy_theme->register_metabox(array(
    'id' => 'post_modal_options',
    'title' => esc_html__('Modal Options', 'lambda-admin-td'),
    'priority' => 'default',
    'context' => 'advanced',
    'pages' => array('oxy_modal'),
    'fields' => array(
        array(
            'name' => esc_html__('Fade Modal', 'lambda-admin-td'),
            'desc' => esc_html__('Apply a CSS fade transition to the modal.', 'lambda-admin-td'),
            'id'   => 'fade_modal',
            'type' => 'select',
            'default' => 'fade',
            'options' => array(
                'fade'    => esc_html__('On', 'lambda-admin-td'),
                'no-fade' => esc_html__('Off', 'lambda-admin-td'),
            )
        ),
        array(
            'name' => esc_html__('Modal Size', 'lambda-admin-td'),
            'desc' => esc_html__('Modal size can be large, normal or small.', 'lambda-admin-td'),
            'id'   => 'modal_size',
            'type' => 'select',
            'options' => array(
                'modal-lg' => esc_html__('Large Modal', 'lambda-admin-td'),
                'modal-nm' => esc_html__('Normal Modal', 'lambda-admin-td'),
                'modal-sm' => esc_html__('Small Modal', 'lambda-admin-td'),
            ),
            'default' => 'modal-nm',
        ),
    )
));
