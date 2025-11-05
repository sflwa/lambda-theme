<?php
/**
 * Oxygenna.com
 *
 * :: *(TEMPLATE_NAME)*
 * :: *(COPYRIGHT)*
 * :: *(LICENCE)*
 */

function oxy_fetch_custom_columns($column)
{
    global $post,$oxy_theme;
    switch($column) {
        case 'menu_order':
            echo esc_html($post->menu_order);
            echo '<input id="qe_slide_order_"' . esc_attr($post->ID) . '" type="hidden" value="' . esc_attr($post->menu_order) . '" />';
            break;

        case 'activate':
            $site_stack_id = $oxy_theme->get_option('site_stack');
            if ($site_stack_id == $post->ID)
                echo '<span class="oxy_activated"></span>';
            else
                echo '';
            break;

        case 'featured-image':
            $editlink = get_edit_post_link($post->ID);
            echo '<a href="' . esc_url($editlink) . '">' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</a>';
            break;

        case 'slideshows-category':
            echo get_the_term_list($post->ID, 'oxy_slideshow_categories', '', ', ');
            break;

        case 'service-category':
            echo get_the_term_list($post->ID, 'oxy_service_category', '', ', ');
            break;

        case 'departments-category':
            echo get_the_term_list($post->ID, 'oxy_staff_department', '', ', ');
            break;

        case 'job-title':
            echo get_post_meta($post->ID, THEME_SHORT . '_position', true);
            break;

        case 'portfolio-category':
            echo get_the_term_list($post->ID, 'oxy_portfolio_categories', '', ', ');
            break;

        case 'testimonial-group':
            echo get_the_term_list($post->ID, 'oxy_testimonial_group', '', ', ');
            break;
        case 'testimonial-citation':
            echo get_post_meta($post->ID, THEME_SHORT . '_citation', true);
            break;

        default:
            // do nothing
            break;
    }
}
add_action('manage_posts_custom_column', 'oxy_fetch_custom_columns');

/**
 * Slideshow Custom Post
 */

$labels = array(
    'name'               => esc_html__('Slideshow Images', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Slideshow Image', 'lambda-admin-td'),
    'add_new'            => esc_html__('Add New', 'lambda-admin-td'),
    'add_new_item'       => esc_html__('Add New Image', 'lambda-admin-td'),
    'edit_item'          => esc_html__('Edit Image', 'lambda-admin-td'),
    'new_item'           => esc_html__('New Image', 'lambda-admin-td'),
    'view_item'          => esc_html__('View Image', 'lambda-admin-td'),
    'search_items'       => esc_html__('Search Images', 'lambda-admin-td'),
    'not_found'          => esc_html__('No images found', 'lambda-admin-td'),
    'not_found_in_trash' => esc_html__('No images found in Trash', 'lambda-admin-td'),
    'menu_name'          => esc_html__('Slider Images', 'lambda-admin-td')
);

$args = array(
    'labels'    => $labels,
    'public'    => false,
    'show_ui'   => true,
    'query_var' => false,
    'rewrite'   => false,
    'menu_icon' => 'dashicons-slides',
    'supports'  => array('title', 'editor', 'thumbnail', 'page-attributes')
);

// create custom post
register_post_type('oxy_slideshow_image', $args);

// move featured image box on slideshow
function oxy_move_slideshow_meta_box()
{
    remove_meta_box('postimagediv', 'oxy_slideshow_image', 'side');
    add_meta_box('postimagediv', esc_html__('Slideshow Image', 'lambda-admin-td'), 'post_thumbnail_meta_box', 'oxy_slideshow_image', 'advanced', 'low');
}
add_action('do_meta_boxes', 'oxy_move_slideshow_meta_box');

function oxy_edit_columns_slideshow($columns)
{
    $columns = array(
        'cb'                  => '<input type="checkbox" />',
        'title'               => esc_html__('Image Title', 'lambda-admin-td'),
        'featured-image'      => esc_html__('Image', 'lambda-admin-td'),
        'menu_order'          => esc_html__('Order', 'lambda-admin-td'),
        'slideshows-category' => esc_html__('Slideshows', 'lambda-admin-td'),
    );
    return $columns;
}
add_filter('manage_edit-oxy_slideshow_image_columns', 'oxy_edit_columns_slideshow');


/* --------------------- SERVICES ------------------------*/

$labels = array(
    'name'               => esc_html__('Services', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Service', 'lambda-admin-td'),
    'add_new'            => esc_html__('Add New', 'lambda-admin-td'),
    'add_new_item'       => esc_html__('Add New Service', 'lambda-admin-td'),
    'edit_item'          => esc_html__('Edit Service', 'lambda-admin-td'),
    'new_item'           => esc_html__('New Service', 'lambda-admin-td'),
    'all_items'          => esc_html__('All Services', 'lambda-admin-td'),
    'view_item'          => esc_html__('View Service', 'lambda-admin-td'),
    'search_items'       => esc_html__('Search Services', 'lambda-admin-td'),
    'not_found'          => esc_html__('No Service found', 'lambda-admin-td'),
    'not_found_in_trash' => esc_html__('No Service found in Trash', 'lambda-admin-td'),
    'menu_name'          => esc_html__('Services', 'lambda-admin-td')
);

// fetch service slug
$service_slug = trim(_x(oxy_get_option('services_slug'), 'URL slug', 'lambda-admin-td'));
if (empty($service_slug)) {
    $service_slug = _x('our-services', 'URL slug', 'lambda-admin-td');
}

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-flag',
    'supports'           => array('title', 'excerpt', 'editor', 'thumbnail', 'page-attributes', 'revisions'),
    'rewrite'            => array('slug' => $service_slug, 'with_front' => false, 'pages' => true, 'feeds'=>false),
);
register_post_type('oxy_service', $args);

function oxy_edit_columns_services($columns)
{
   // $columns['featured_image']= 'Featured Image';
    $columns = array(
        'cb'             => '<input type="checkbox" />',
        'title'          => esc_html__('Service', 'lambda-admin-td'),
        'featured-image' => esc_html__('Image', 'lambda-admin-td'),
        'service-category'     => esc_html__('Category', 'lambda-admin-td')
    );
    return $columns;
}
add_filter('manage_edit-oxy_service_columns', 'oxy_edit_columns_services');

/* ------------------ TESTIMONIALS -----------------------*/

$labels = array(
    'name'               => esc_html__('Testimonial', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Testimonial', 'lambda-admin-td'),
    'add_new'            => esc_html__('Add New', 'lambda-admin-td'),
    'add_new_item'       => esc_html__('Add New Testimonial', 'lambda-admin-td'),
    'edit_item'          => esc_html__('Edit Testimonial', 'lambda-admin-td'),
    'new_item'           => esc_html__('New Testimonial', 'lambda-admin-td'),
    'all_items'          => esc_html__('All Testimonial', 'lambda-admin-td'),
    'view_item'          => esc_html__('View Testimonial', 'lambda-admin-td'),
    'search_items'       => esc_html__('Search Testimonial', 'lambda-admin-td'),
    'not_found'          => esc_html__('No Testimonial found', 'lambda-admin-td'),
    'not_found_in_trash' => esc_html__('No Testimonial found in Trash', 'lambda-admin-td'),
    'menu_name'          => esc_html__('Testimonials', 'lambda-admin-td')
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-format-quote',
    'exclude_from_search' => 'true',
    'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes', 'revisions')
);
register_post_type('oxy_testimonial', $args);

$labels = array(
    'name'          => esc_html__('Groups', 'lambda-admin-td'),
    'singular_name' => esc_html__('Group', 'lambda-admin-td'),
    'search_items'  => esc_html__('Search Groups', 'lambda-admin-td'),
    'all_items'     => esc_html__('All Groups', 'lambda-admin-td'),
    'edit_item'     => esc_html__('Edit Group', 'lambda-admin-td'),
    'update_item'   => esc_html__('Update Group', 'lambda-admin-td'),
    'add_new_item'  => esc_html__('Add New Group', 'lambda-admin-td'),
    'new_item_name' => esc_html__('New Group Name', 'lambda-admin-td')
);

register_taxonomy(
    'oxy_testimonial_group',
    'oxy_testimonial',
    array(
        'hierarchical' => true,
        'labels'       => $labels,
        'show_ui'      => true,
        'query_var'    => true,
   )
);

function oxy_edit_columns_testimonial($columns)
{
   // $columns['featured_image']= 'Featured Image';
    $columns = array(
        'cb'                   => '<input type="checkbox" />',
        'title'                => esc_html__('Author', 'lambda-admin-td'),
        'featured-image'       => esc_html__('Image', 'lambda-admin-td'),
        'testimonial-citation' => esc_html__('Citation', 'lambda-admin-td'),
        'testimonial-group'    => esc_html__('Group', 'lambda-admin-td')
    );
    return $columns;
}
add_filter('manage_edit-oxy_testimonial_columns', 'oxy_edit_columns_testimonial');


/* --------------------- STAFF ------------------------*/

$labels = array(
    'name'               => esc_html__('Staff', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Staff', 'lambda-admin-td'),
    'add_new'            => esc_html__('Add New', 'lambda-admin-td'),
    'add_new_item'       => esc_html__('Add New Staff', 'lambda-admin-td'),
    'edit_item'          => esc_html__('Edit Staff', 'lambda-admin-td'),
    'new_item'           => esc_html__('New Staff', 'lambda-admin-td'),
    'all_items'          => esc_html__('All Staff', 'lambda-admin-td'),
    'view_item'          => esc_html__('View Staff', 'lambda-admin-td'),
    'search_items'       => esc_html__('Search Staff', 'lambda-admin-td'),
    'not_found'          => esc_html__('No Staff found', 'lambda-admin-td'),
    'not_found_in_trash' => esc_html__('No Staff found in Trash', 'lambda-admin-td'),
    'menu_name'          => esc_html__('Staff', 'lambda-admin-td')
);

// fetch staff slug
$staff_slug = trim(_x(oxy_get_option('staff_slug'), 'URL slug', 'lambda-admin-td'));
if (empty($staff_slug)) {
    $staff_slug = _x('staff', 'URL slug', 'lambda-admin-td');
}

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-businessman',
    'supports'           => array('title', 'excerpt', 'editor', 'thumbnail', 'page-attributes', 'revisions'),
    'rewrite' => array('slug' => $staff_slug, 'with_front' => false, 'pages' => true, 'feeds'=>false),
);
register_post_type('oxy_staff', $args);

$labels = array(
    'name'          => esc_html__('Departments', 'lambda-admin-td'),
    'singular_name' => esc_html__('Department', 'lambda-admin-td'),
    'search_items'  =>  esc_html__('Search Departments', 'lambda-admin-td'),
    'all_items'     => esc_html__('All Departments', 'lambda-admin-td'),
    'edit_item'     => esc_html__('Edit Department', 'lambda-admin-td'),
    'update_item'   => esc_html__('Update Department', 'lambda-admin-td'),
    'add_new_item'  => esc_html__('Add New Department', 'lambda-admin-td'),
    'new_item_name' => esc_html__('New Department Name', 'lambda-admin-td')
);

register_taxonomy(
    'oxy_staff_department',
    'oxy_staff',
    array(
        'hierarchical' => true,
        'labels'       => $labels,
        'show_ui'      => true,
   )
);

function oxy_edit_columns_staff($columns)
{
   // $columns['featured_image']= 'Featured Image';
    $columns = array(
        'cb'                   => '<input type="checkbox" />',
        'title'                => esc_html__('Name', 'lambda-admin-td'),
        'featured-image'       => esc_html__('Image', 'lambda-admin-td'),
        'job-title'            => esc_html__('Job Title', 'lambda-admin-td'),
        'departments-category' => esc_html__('Department', 'lambda-admin-td')
    );
    return $columns;
}
add_filter('manage_edit-oxy_staff_columns', 'oxy_edit_columns_staff');


/***************** PORTFOLIO *******************/

$labels = array(
    'name'               => esc_html__('Portfolio Items', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Portfolio Item', 'lambda-admin-td'),
    'add_new'            => esc_html__('Add New', 'lambda-admin-td'),
    'add_new_item'       => esc_html__('Add New Portfolio Item', 'lambda-admin-td'),
    'edit_item'          => esc_html__('Edit Portfolio Item', 'lambda-admin-td'),
    'new_item'           => esc_html__('New Portfolio Item', 'lambda-admin-td'),
    'view_item'          => esc_html__('View Portfolio Item', 'lambda-admin-td'),
    'search_items'       => esc_html__('Search Portfolio Items', 'lambda-admin-td'),
    'not_found'          =>  esc_html__('No images found', 'lambda-admin-td'),
    'not_found_in_trash' => esc_html__('No images found in Trash', 'lambda-admin-td'),
    'parent_item_colon'  => '',
    'menu_name'          => esc_html__('Portfolio Items', 'lambda-admin-td')
);

// fetch portfolio slug
$permalink_slug = trim(_x(oxy_get_option('portfolio_slug'), 'URL slug', 'lambda-admin-td'));
if (empty($permalink_slug)) {
    $permalink_slug = _x('portfolio', 'URL slug', 'lambda-admin-td');
}

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'has_archive'        => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-portfolio',
    'supports'           => array('title', 'excerpt', 'editor', 'thumbnail', 'page-attributes', 'revisions', 'comments'),
    'rewrite' => array('slug' => $permalink_slug, 'with_front' => false, 'pages' => true, 'feeds'=>false),
);

// create custom post
register_post_type('oxy_portfolio_image', $args);

// Register portfolio taxonomy
$labels = array(
    'name'          => esc_html__('Categories', 'lambda-admin-td'),
    'singular_name' => esc_html__('Category', 'lambda-admin-td'),
    'search_items'  =>  esc_html__('Search Categories', 'lambda-admin-td'),
    'all_items'     => esc_html__('All Categories', 'lambda-admin-td'),
    'edit_item'     => esc_html__('Edit Category', 'lambda-admin-td'),
    'update_item'   => esc_html__('Update Category', 'lambda-admin-td'),
    'add_new_item'  => esc_html__('Add New Category', 'lambda-admin-td'),
    'new_item_name' => esc_html__('New Category Name', 'lambda-admin-td')
);

register_taxonomy(
    'oxy_portfolio_categories',
    'oxy_portfolio_image',
    array(
        'hierarchical' => true,
        'labels'       => $labels,
        'show_ui'      => true,
        'query_var'    => true,
   )
);

function oxy_edit_columns_portfolio($columns)
{
   // $columns['featured_image']= 'Featured Image';
    $columns = array(
        'cb'                 => '<input type="checkbox" />',
        'title'              => esc_html__('Item', 'lambda-admin-td'),
        'featured-image'     => esc_html__('Image', 'lambda-admin-td'),
        'menu_order'         => esc_html__('Order', 'lambda-admin-td'),
        'portfolio-category' => esc_html__('Categories', 'lambda-admin-td')
    );
    return $columns;
}
add_filter('manage_edit-oxy_portfolio_image_columns', 'oxy_edit_columns_portfolio');

$labels = array(
    'name'               => esc_html__('Mega Menu', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Mega Menu', 'lambda-admin-td'),
);

$args = array(
    'labels'             => $labels,
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => false,
    'show_in_menu'       => true,
    'query_var'          => false,
    'show_in_nav_menus'  => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
);
register_post_type('oxy_mega_menu', $args);

$labels = array(
    'name'               => esc_html__('Mega Menu Columns', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Mega Menu Columns', 'lambda-admin-td'),
);

$args = array(
    'labels'             => $labels,
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => false,
    'show_in_menu'       => false,
    'query_var'          => false,
    'show_in_nav_menus'  => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
);
register_post_type('oxy_mega_columns', $args);

function oxy_register_taxonomies()
{
    // Register slideshow taxonomy
    $labels = array(
        'name'          => esc_html__('Slideshows', 'lambda-admin-td'),
        'singular_name' => esc_html__('Slideshow', 'lambda-admin-td'),
        'search_items'  => esc_html__('Search Slideshows', 'lambda-admin-td'),
        'all_items'     => esc_html__('All Slideshows', 'lambda-admin-td'),
        'edit_item'     => esc_html__('Edit Slideshow', 'lambda-admin-td'),
        'update_item'   => esc_html__('Update Slideshow', 'lambda-admin-td'),
        'add_new_item'  => esc_html__('Add New Slideshow', 'lambda-admin-td'),
        'new_item_name' => esc_html__('New Slideshow Name', 'lambda-admin-td')
    );

    register_taxonomy(
        'oxy_slideshow_categories',
        'oxy_slideshow_image',
        array(
            'hierarchical' => true,
            'labels'       => $labels,
            'show_ui'      => true,
            'query_var'    => false,
            'rewrite'      => false
       )
    );

    $labels = array(
        'name'          => esc_html__('Categories', 'lambda-admin-td'),
        'singular_name' => esc_html__('Category', 'lambda-admin-td'),
        'search_items'  => esc_html__('Search Categories', 'lambda-admin-td'),
        'all_items'     => esc_html__('All Categories', 'lambda-admin-td'),
        'edit_item'     => esc_html__('Edit Category', 'lambda-admin-td'),
        'update_item'   => esc_html__('Update Category', 'lambda-admin-td'),
        'add_new_item'  => esc_html__('Add New Category', 'lambda-admin-td'),
        'new_item_name' => esc_html__('New Category Name', 'lambda-admin-td')
    );

    register_taxonomy(
        'oxy_service_category',
        'oxy_service',
        array(
            'hierarchical' => true,
            'labels'       => $labels,
            'show_ui'      => true,
       )
    );
}


/* --------------------- MODALS -----------------------*/

$labels = array(
    'name'               => esc_html__('Modal', 'lambda-admin-td'),
    'singular_name'      => esc_html__('Modal', 'lambda-admin-td'),
    'add_new'            => esc_html__('Add New', 'lambda-admin-td'),
    'add_new_item'       => esc_html__('Add New Modal', 'lambda-admin-td'),
    'edit_item'          => esc_html__('Edit Modal', 'lambda-admin-td'),
    'new_item'           => esc_html__('New Modal', 'lambda-admin-td'),
    'all_items'          => esc_html__('All Modals', 'lambda-admin-td'),
    'view_item'          => esc_html__('View Modal', 'lambda-admin-td'),
    'search_items'       => esc_html__('Search Modal', 'lambda-admin-td'),
    'not_found'          => esc_html__('No Modals found', 'lambda-admin-td'),
    'not_found_in_trash' => esc_html__('No Modals found in Trash', 'lambda-admin-td'),
    'menu_name'          => esc_html__('Modals', 'lambda-admin-td')
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-lightbulb',
    'exclude_from_search' => 'true',
    'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes', 'revisions')
);
register_post_type('oxy_modal', $args);


add_action('init', 'oxy_register_taxonomies');
