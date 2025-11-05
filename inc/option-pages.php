<?php
/**
 * Registers all theme option pages
 *
 * @package Lambda
 * @subpackage Admin
 * @since 0.1
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 */


// change defaults
global $oxy_theme;
if (isset($oxy_theme)) {
    $oxy_theme->register_option_page(array(
        'page_title'      => esc_html__('General', 'lambda-admin-td'),
        'menu_title'      => esc_html__('General', 'lambda-admin-td'),
        'slug'            => THEME_SHORT . '-general',
        'main_menu'       => true,
        'main_menu_title' => THEME_NAME,
        'main_menu_icon'  => 'dashicons-marker',
        'icon'            => 'tools',
        'sections'        => array(
            'loading-options' => array(
                'title'   => esc_html__('Page Loader', 'lambda-admin-td'),
                'header'  => esc_html__('Toggle an animation when each page loads.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Loading Animation', 'lambda-admin-td'),
                        'id'        => 'site_loader',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('Enable', 'lambda-admin-td'),
                            'off' => esc_html__('Disable', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Page Loader Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a style of page loader to show at the start of loading a page', 'lambda-admin-td'),
                        'id'      => 'site_loader_style',
                        'type'    => 'radio',
                        'options' => array(
                            'dot'     => esc_html__('Dot', 'lambda-admin-td'),
                            'minimal' => esc_html__('Minimal', 'lambda-admin-td'),
                            'counter' => esc_html__('Counter', 'lambda-admin-td'),
                            'logo'    =>    esc_html__('Logo', 'lambda-admin-td'),
                            'logo-3d' =>    esc_html__('Logo 3d', 'lambda-admin-td')
                        ),
                        'default' => 'minimal',
                    ),
                    array(
                        'name'    => esc_html__('Logo Loader Image', 'lambda-admin-td'),
                        'id'      => 'logo_loader_image',
                        'store'   => 'url',
                        'type'    => 'upload',
                        'default' => '',
                        'desc'    => esc_html__('Choose an image to show as page loader(only when Page Loader Style above is set to Logo).', 'lambda-admin-td'),
                    ),
                )
            ),
            'padding-options' => array(
                'title'   => esc_html__('Template Margins', 'lambda-admin-td'),
                'header'  => esc_html__('Set the top and bottom margins for set page / blog templates.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Template Top & Bottom Margin', 'lambda-admin-td'),
                        'id'        => 'template_margin',
                        'desc'    => esc_html__('Sets the top and bottom margins for left / right sidebar templates and blog pages.', 'lambda-admin-td'),
                        'type'      => 'slider',
                        'default'   => 50,
                        'attr'      => array(
                            'max'       => 200,
                            'min'       => 0,
                            'step'      => 10
                        )
                    ),
                )
            ),
            'comments-options' => array(
                'title'   => esc_html__('Comments Options', 'lambda-admin-td'),
                'header'  => esc_html__('This section will allow you to setup the comments for your site.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Show Comments On', 'lambda-admin-td'),
                        'desc'    => esc_html__('Where to allow comments. All (show all), Pages (only on pages), Posts (only on posts), Portfolio Items (only on portfolio items), Off (all comments are off)', 'lambda-admin-td'),
                        'id'      => 'site_comments',
                        'type'    => 'radio',
                        'options' => array(
                            'all'       => esc_html__('All', 'lambda-admin-td'),
                            'pages'     => esc_html__('Pages', 'lambda-admin-td'),
                            'posts'     => esc_html__('Posts', 'lambda-admin-td'),
                            'portfolio' => esc_html__('Portfolio Items', 'lambda-admin-td'),
                            'Off'       => esc_html__('Off', 'lambda-admin-td')
                        ),
                        'default' => 'posts',
                    )
                )
            ),
            '404-section' => array(
                'title'   => esc_html__('404 Page', 'lambda-admin-td'),
                'header'  => esc_html__('Pick the page that you want to be used as the 404 page.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'     => esc_html__('404 Page', 'lambda-admin-td'),
                        'desc'     => esc_html__('Choose a page to link this item to', 'lambda-admin-td'),
                        'id'       => '404_page',
                        'type'     => 'select',
                        'options'  => 'taxonomy',
                        'taxonomy' => 'pages',
                        'default' =>  '',
                    ),
                )
            ),
            'google-map-section' => array(
                'title'   => esc_html__('Google Maps API key', 'lambda-admin-td'),
                'header'  => esc_html__('Activates the Google Maps JavaScript API.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'     => esc_html__('Google Maps API key', 'lambda-admin-td'),
                        'desc'     => esc_html__('Necessary for the Google Map shortcode.', 'lambda-admin-td'),
                        'id'       => 'api_key',
                        'type'     => 'text',
                        'default' =>  '',
                    ),
                )
            ),
        )
    ));

    $blog_header_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/heading.php';
    $blog_header_section_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/section.php';
    $blog_masonry_section_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/section.php';

    // set defaults for blog heading and section
    // set default heading to my blog

    $blog_header_options[0]['default'] = esc_html__('My Blog', 'lambda-admin-td');
    $blog_header_options[1]['default'] = 'text-light';
    $blog_header_options[3]['default'] = 'normal';
    $blog_header_options[4]['default'] = 'light';
    $blog_header_options[8]['default'] = '20';
    $blog_header_options[9]['default'] = '20';

    $blog_header_section_options[6]['default'] = '#303c40';
    $blog_header_section_options[7]['default'] = '1';

    $oxy_theme->register_option_page(array(
        'page_title' => esc_html__('Blog', 'lambda-admin-td'),
        'menu_title' => esc_html__('Blog', 'lambda-admin-td'),
        'slug'       => THEME_SHORT . '-blog',
        'main_menu'  => false,
        'icon'       => 'tools',
        'sections'   => array(
            'blog-section' => array(
                'title'   => esc_html__('Blog Style', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can choose a style to use for your blog pages.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Blog Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select a layout style to use for your blog pages.', 'lambda-admin-td'),
                        'id'      => 'blog_style',
                        'type'    => 'imgradio',
                        'columns' => '3',
                        'options' => array(
                            'right-sidebar' => array(
                                'name' => esc_html__('Right Sidebar', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-rightsidebar.png',
                            ),
                            'left-sidebar' => array(
                                'name' => esc_html__('Left Sidebar', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-leftsidebar.png',
                            ),
                            'no-sidebar-wide' => array(
                                'name' => esc_html__('No Sidebar - Wide', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-wide.png',
                            ),
                            'no-sidebar-regular' => array(
                                'name' => esc_html__('No Sidebar - Regular', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-regular.png',
                            ),
                            'no-sidebar-narrow' => array(
                                'name' => esc_html__('No Sidebar - Narrow', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-narrow.png',
                            )
                        ),
                        'default' => 'right-sidebar',
                    ),
                )
            ),
            'blog-list-section' => array(
                'title'   => esc_html__('Blog List Options', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can setup the blog options that are used on all the main blog list pages', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Post Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select a style to use for your blog posts.', 'lambda-admin-td'),
                        'id'      => 'blog_post_style',
                        'type'    => 'imgradio',
                        'columns' => '3',
                        'options' => array(
                            'blog-list-layout-normal' => array(
                                'name' => esc_html__('Regular', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-list-layout-normal.png',
                            ),
                            'blog-list-layout-left' => array(
                                'name' => esc_html__('Image Left', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-list-layout-left.png',
                            ),
                            'blog-list-layout-right' => array(
                                'name' => esc_html__('Image Right', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-list-layout-right.png',
                            ),
                        ),
                        'default' => 'blog-list-layout-normal',
                    ),
                    array(
                        'name'    => esc_html__('Show Read More', 'lambda-admin-td'),
                        'desc'    => esc_html__('Show or hide the readmore link in list view', 'lambda-admin-td'),
                        'id'      => 'blog_show_readmore',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name' => esc_html__('Blog read more link', 'lambda-admin-td'),
                        'desc' => esc_html__('The text that will be used for your read more links', 'lambda-admin-td'),
                        'id' => 'blog_readmore',
                        'type' => 'text',
                        'default' => 'read more',
                    ),
                    array(
                        'name'    => esc_html__('Read more style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Display the readmore as button or simple link', 'lambda-admin-td'),
                        'id'      => 'blog_readmore_style',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('Button', 'lambda-admin-td'),
                            'off'  => esc_html__('Simple Link', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Strip teaser', 'lambda-admin-td'),
                        'desc'    => esc_html__('Strip the content before the <--more--> tag in single post view', 'lambda-admin-td'),
                        'id'      => 'blog_stripteaser',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'off',
                    ),
                    array(
                        'name'    => esc_html__('Pagination Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('How your pagination will be shown', 'lambda-admin-td'),
                        'id'      => 'blog_pagination',
                        'type'    => 'radio',
                        'options' => array(
                            'pages'     => esc_html__('Pages', 'lambda-admin-td'),
                            'next_prev' => esc_html__('Next & Previous', 'lambda-admin-td'),
                        ),
                        'default' => 'pages',
                    ),
                    array(
                        'name'    => esc_html__('Featured Image Linkable', 'lambda-admin-td'),
                        'desc'    => esc_html__('Make the featured image of the post a link to the single post page', 'lambda-admin-td'),
                        'id'      => 'blog_image_linkable',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    )
                )
            ),
            'blog-post-style' => array(
                'title'   => esc_html__('Post Style', 'lambda-admin-td'),
                'header'  => esc_html__('How posts look in both list and single post pages.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Post Header Style', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose a post header style to show subtitles or post details', 'lambda-admin-td'),
                        'id'      => 'blog_post_header',
                        'type'    => 'select',
                        'options' => array(
                            'details'   => esc_html__('Post Details', 'lambda-admin-td'),
                            'subtitle'  => esc_html__('Subtitle', 'lambda-admin-td'),
                        ),
                        'default' => 'details',
                    ),
                    array(
                        'name'    => esc_html__('Regular Post Media Position', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose to show post image/video/audio media above or below post title when using regular post style.', 'lambda-admin-td'),
                        'id'      => 'blog_post_media_position',
                        'type'    => 'select',
                        'options' => array(
                            'above' => esc_html__('Above', 'lambda-admin-td'),
                            'below' => esc_html__('Below', 'lambda-admin-td'),
                        ),
                        'default' => 'above',
                    ),
                    array(
                        'name'    => esc_html__('Display categories', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggle categories on/off in post', 'lambda-admin-td'),
                        'id'      => 'blog_categories',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Display date', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggle date on/off in post', 'lambda-admin-td'),
                        'id'      => 'blog_date',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Display author', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggle author on/off in post', 'lambda-admin-td'),
                        'id'      => 'blog_author',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Display tags', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggle tags on/off in post', 'lambda-admin-td'),
                        'id'      => 'blog_tags',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Display comment count', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggle comment count on/off in post', 'lambda-admin-td'),
                        'id'      => 'blog_comment_count',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                )
            ),
            'blog-single-section' => array(
                'title'   => esc_html__('Blog Single Page', 'lambda-admin-td'),
                'header'  => esc_html__('This section allows you to set up how your single post will look.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Author bio', 'lambda-admin-td'),
                        'desc'    => esc_html__('Display/hide the authors bio after the post', 'lambda-admin-td'),
                        'id'      => 'author_bio',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'off',
                    ),
                    array(
                        'name'    => esc_html__('Display avatar in Author bio', 'lambda-admin-td'),
                        'desc'    => esc_html__('Toggle avatars on/off in Author Bio Section', 'lambda-admin-td'),
                        'id'      => 'author_bio_avatar',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Social Networks', 'lambda-admin-td'),
                        'desc'    => esc_html__('Select which social networks you would like to share posts on. If you need more than one, hold down Ctrl button and select as many as you like. ', 'lambda-admin-td'),
                        'id'      => 'blog_social_networks',
                        'default' =>  array('facebook', 'twitter', 'google', 'pinterest', 'linkedin', 'vk'),
                        'type'    => 'select',
                        'attr' => array(
                            'multiple' => '',
                            'style' => 'height:110px'
                        ),
                        'options' => array(
                            'facebook'  => esc_html__('Facebook', 'lambda-admin-td'),
                            'twitter'   => esc_html__('Twitter', 'lambda-admin-td'),
                            'google'    => esc_html__('Google+', 'lambda-admin-td'),
                            'pinterest' => esc_html__('Pinterest', 'lambda-admin-td'),
                            'linkedin'  => esc_html__('LinkedIn', 'lambda-admin-td'),
                            'vk'        => esc_html__('VK', 'lambda-admin-td'),
                            'none' => esc_html__('None', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Show related posts', 'lambda-admin-td'),
                        'desc'    => esc_html__('Show Related Posts after the post content', 'lambda-admin-td'),
                        'id'      => 'related_posts',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name' => esc_html__('Related Post Style', 'lambda-admin-td'),
                        'desc' => esc_html__('Select the style of your related posts.', 'lambda-admin-td'),
                        'id'   => 'related_posts_style',
                        'type' => 'select',
                        'default' => 'image',
                        'options' => array(
                            'small' => esc_html__('Post', 'lambda-admin-td'),
                            'image' => esc_html__('Image with Overlay', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Related Post Title Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of heading to use for related post titles.', 'lambda-admin-td'),
                        'id'      => 'related_posts_title_tag',
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
                        'name'      => esc_html__('Related Post Text Alignment', 'lambda-admin-td'),
                        'id'        => 'related_posts_text_align',
                        'type'      => 'select',
                        'default'   => 'left',
                        'options' => array(
                            'left'      => esc_html__('Left', 'lambda-admin-td'),
                            'center'    => esc_html__('Center', 'lambda-admin-td'),
                            'right'     => esc_html__('Right', 'lambda-admin-td'),
                            'justify'   => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the related post text & title.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Number of related posts', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose how many related posts are displayed in the related posts section after the post content', 'lambda-admin-td'),
                        'id'      => 'related_posts_count',
                        'type'      => 'slider',
                        'default'   => 3,
                        'attr'      => array(
                            'max'       => 20,
                            'min'       => 2,
                            'step'      => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Number of related posts columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose how many columns are displayed in the related posts section after the post content', 'lambda-admin-td'),
                        'id'      => 'related_posts_columns',
                        'type'      => 'slider',
                        'default'   => 3,
                        'attr'      => array(
                            'max'       => 4,
                            'min'       => 2,
                            'step'      => 1
                        )
                    ),
                )
            ),
            'masonry-blog-section' => array(
                'title'   => esc_html__('Masonry Blog Page', 'lambda-admin-td'),
                'header'  => esc_html__('This section allows you to set up how your masonry blog page will look.', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name'    => esc_html__('Use Masonry On Posts Page', 'lambda-admin-td'),
                        'desc'    => esc_html__('Blog list pages will use a masonry style.', 'lambda-admin-td'),
                        'id'      => 'blog_masonry',
                        'type'    => 'imgradio',
                        'columns' => '5',
                        'options' => array(
                            'no-masonry' => array(
                                'name' => esc_html__('No Masonry', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-rightsidebar.png',
                            ),
                            'masonry' => array(
                                'name' => esc_html__('Masonry', 'lambda-admin-td'),
                                'image' => OXY_THEME_URI . 'inc/assets/images/blog-masonry.png',
                            ),
                        ),
                        'default' => 'no-masonry',
                    ),
                    array(
                        'name'      => esc_html__('Masonry Items Padding', 'lambda-admin-td'),
                        'desc'      => esc_html__('Space to add between blog items in pixels.', 'lambda-admin-td'),
                        'id'        => 'blog_masonry_item_padding',
                        'type'      => 'slider',
                        'default'   => 8,
                        'attr'      => array(
                            'max'       => 100,
                            'min'       => 0,
                            'step'      => 1
                        )
                    ),
                    array(
                        'name' => esc_html__('Masonry Item Style', 'lambda-admin-td'),
                        'desc' => esc_html__('Select the style of your masonry posts.', 'lambda-admin-td'),
                        'id'   => 'blog_masonry_style',
                        'type' => 'select',
                        'default' => 'image-overlay',
                        'options' => array(
                            'small' => esc_html__('Post', 'lambda-admin-td'),
                            'image' => esc_html__('Image with Overlay', 'lambda-admin-td'),
                        )
                    ),
                    array(
                        'name'    => esc_html__('Masonry Post Title Size', 'lambda-admin-td'),
                        'desc'    => esc_html__('Size of heading to use for masonry post titles.', 'lambda-admin-td'),
                        'id'      => 'blog_masonry_title_tag',
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
                        'name'      => esc_html__('Masonry Post Text Alignment', 'lambda-admin-td'),
                        'id'        => 'blog_masonry_text_align',
                        'type'      => 'select',
                        'default'   => 'left',
                        'options' => array(
                            'left'      => esc_html__('Left', 'lambda-admin-td'),
                            'center'    => esc_html__('Center', 'lambda-admin-td'),
                            'right'     => esc_html__('Right', 'lambda-admin-td'),
                            'justify'   => esc_html__('Justify', 'lambda-admin-td')
                        ),
                        'desc'    => esc_html__('Sets the text alignment of the masonry post text & title.', 'lambda-admin-td'),
                    ),
                ),
            ),
            'masonry-section' => array(
                'title'   => esc_html__('Masonry Section', 'lambda-admin-td'),
                'header'  => esc_html__('Change the appearance section that your masonry posts will appear in.', 'lambda-admin-td'),
                'fields'  => oxy_prefix_options_id('masonry_section', $blog_masonry_section_options)
            ),
            'blog-header-options' => array(
                'title'   => esc_html__('Blog Header Options', 'lambda-admin-td'),
                'header'  => esc_html__('Change how your blog header looks.', 'lambda-admin-td'),
                'fields'  => array_merge(
                    array(
                        array(
                            'name' => esc_html__('Override Default Page Header Settings', 'lambda-admin-td'),
                            'desc' => esc_html__('Disregard the default settings (in Pages option page) for the blog page headers and use custom options below', 'lambda-admin-td'),
                            'id'   => 'blog_override_header',
                            'type' => 'select',
                            'default' => 'default',
                            'options' => array(
                                'default'  => esc_html__('Use Defaults', 'lambda-admin-td'),
                                'override' => esc_html__('Override Header Options', 'lambda-admin-td'),
                            ),
                        ),
                        array(
                            'name' => esc_html__('Show Header', 'lambda-admin-td'),
                            'desc' => esc_html__('Show or hide the header at the top of the page.', 'lambda-admin-td'),
                            'id'   => 'blog_header_show_header',
                            'type' => 'select',
                            'default' => 'show',
                            'options' => array(
                                'hide' => esc_html__('Hide', 'lambda-admin-td'),
                                'show' => esc_html__('Show', 'lambda-admin-td'),
                            ),
                        )
                    ),
                    array(
                        array(
                            'name' => esc_html__('Show Breadcrumbs', 'lambda-admin-td'),
                            'desc' => esc_html__('Show or hide the breadcrumbs in the header', 'lambda-admin-td'),
                            'id'   => 'blog_header_show_breadcrumbs',
                            'type' => 'select',
                            'default' => 'show',
                            'options' => array(
                                'hide' => esc_html__('Hide', 'lambda-admin-td'),
                                'show' => esc_html__('Show', 'lambda-admin-td'),
                            ),
                        ),
                        array(
                            'name' => esc_html__('Breadcrumb Text Capitalisation', 'lambda-admin-td'),
                            'desc' => esc_html__('Decides the case of the breadcrumbs.', 'lambda-admin-td'),
                            'id'   => 'blog_header_breadcrumbs_case',
                            'type' => 'select',
                            'options' => array(
                                'text-caps'      => esc_html__('Force Uppercase', 'lambda-admin-td'),
                                'text-lowercase' => esc_html__('Force Lowercase', 'lambda-admin-td'),
                                'text-capitalize' => esc_html__('Force Capitalize', 'lambda-admin-td'),
                                'text-none' => esc_html__('Off', 'lambda-admin-td'),
                            ),
                            'default' => 'text-lowercase',
                        )
                    )
                )
            ),
            'blog-header-heading' => array(
                'title'   => esc_html__('Blog Header Heading', 'lambda-admin-td'),
                'header'  => esc_html__('Change the text of your blog heading here.', 'lambda-admin-td'),
                'fields'  => oxy_prefix_options_id('blog_header', $blog_header_options),
            ),
            'blog-header-section' => array(
                'title'   => esc_html__('Blog Header Section', 'lambda-admin-td'),
                'header'  => esc_html__('Change the appearance of your blog header section.', 'lambda-admin-td'),
                'fields'  => oxy_prefix_options_id('blog_header', $blog_header_section_options)
            ),
        )
    ));

    $page_header_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/heading.php';
    $page_header_section_options = include OXY_THEME_DIR . 'inc/options/shortcodes/shared/section.php';

    // remove text from default page options
    unset($page_header_options[0]);

    $oxy_theme->register_option_page(array(
        'page_title' => esc_html__('Pages', 'lambda-admin-td'),
        'menu_title' => esc_html__('Pages', 'lambda-admin-td'),
        'slug'       => THEME_SHORT . '-pages',
        'main_menu'  => false,
        'icon'       => 'tools',
        'sections'   => array(
            'page-header-options' => array(
                'title'   => esc_html__('Default Page Header', 'lambda-admin-td'),
                'header'  => esc_html__('Change if the page header will appear by default.', 'lambda-admin-td'),
                'fields'  => array(
                    array(
                        'name' => esc_html__('Show Header', 'lambda-admin-td'),
                        'desc' => esc_html__('Show or hide the header at the top of the page.', 'lambda-admin-td'),
                        'id'   => 'page_header_show_header',
                        'type' => 'select',
                        'default' => 'show',
                        'options' => array(
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name' => esc_html__('Show Breadcrumbs', 'lambda-admin-td'),
                        'desc' => esc_html__('Show or hide the breadcrumbs in the header', 'lambda-admin-td'),
                        'id'   => 'page_header_show_breadcrumbs',
                        'type' => 'select',
                        'default' => 'hide',
                        'options' => array(
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name' => esc_html__('Breadcrumb Text Capitalisation', 'lambda-admin-td'),
                        'desc' => esc_html__('Decides the case of the breadcrumbs.', 'lambda-admin-td'),
                        'id'   => 'page_header_breadcrumbs_case',
                        'type' => 'select',
                        'options' => array(
                            'text-caps'      => esc_html__('Force Uppercase', 'lambda-admin-td'),
                            'text-lowercase' => esc_html__('Force Lowercase', 'lambda-admin-td'),
                            'text-none' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'text-lowercase',
                    )
                )
            ),
            'default-page-header-heading' => array(
                'title'   => esc_html__('Default Page Header Heading', 'lambda-admin-td'),
                'header'  => esc_html__('Change the text of your blog heading here.', 'lambda-admin-td'),
                'fields'  => oxy_prefix_options_id('page_header', $page_header_options),
            ),
            'default-page-header-section' => array(
                'title'   => esc_html__('Default Page Header Section', 'lambda-admin-td'),
                'header'  => esc_html__('Change the appearance of your page header section.', 'lambda-admin-td'),
                'fields'  => oxy_prefix_options_id('page_header', $page_header_section_options)
            ),
        )
    ));
    $oxy_theme->register_option_page(array(
        'page_title' => esc_html__('Flexslider Options', 'lambda-admin-td'),
        'menu_title' => esc_html__('Flexslider', 'lambda-admin-td'),
        'slug'       => THEME_SHORT . '-flexslider',
        'header'  => esc_html__('Global options for flexsliders used in the site (gallery posts, gallery portfolio items).', 'lambda-admin-td'),
        'main_menu'  => false,
        'icon'       => 'tools',
        'sections'   => array(
            'slider-section' => array(
                'title' => esc_html__('Slideshow', 'lambda-admin-td'),
                'header'  => esc_html__('Setup your global default flexslider options.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      =>  esc_html__('Animation style', 'lambda-admin-td'),
                        'desc'      =>  esc_html__('Select how your slider animates', 'lambda-admin-td'),
                        'id'        => 'animation',
                        'type'      => 'select',
                        'options'   =>  array(
                            'slide' => esc_html__('Slide', 'lambda-admin-td'),
                            'fade'  => esc_html__('Fade', 'lambda-admin-td'),
                        ),
                        'attr'      =>  array(
                            'class'    => 'widefat',
                        ),
                        'default'   => 'slide',
                    ),
                    array(
                        'name'      => esc_html__('Speed', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the speed of the slideshow cycling, in milliseconds', 'lambda-admin-td'),
                        'id'        => 'speed',
                        'type'      => 'slider',
                        'default'   => 7000,
                        'attr'      => array(
                            'max'       => 15000,
                            'min'       => 2000,
                            'step'      => 1000
                        )
                    ),
                    array(
                        'name'      => esc_html__('Duration', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the speed of animations', 'lambda-admin-td'),
                        'id'        => 'duration',
                        'type'      => 'slider',
                        'default'   => 600,
                        'attr'      => array(
                            'max'       => 1500,
                            'min'       => 200,
                            'step'      => 100
                        )
                    ),
                    array(
                        'name'      => esc_html__('Auto start', 'lambda-admin-td'),
                        'id'        => 'autostart',
                        'type'      => 'radio',
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
                        'type'      => 'radio',
                        'desc'    => esc_html__('Shows the navigation arrows at the sides of the flexslider.', 'lambda-admin-td'),
                        'default'   =>  'hide',
                        'options' => array(
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Show controls', 'lambda-admin-td'),
                        'id'        => 'showcontrols',
                        'type'      => 'radio',
                        'default'   =>  'show',
                        'desc'    => esc_html__('If you choose hide the option below will be ignored', 'lambda-admin-td'),
                        'options' => array(
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                            'show' => esc_html__('Show', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      => esc_html__('Choose the place of the controls', 'lambda-admin-td'),
                        'id'        => 'controlsposition',
                        'type'      => 'radio',
                        'default'   =>  'inside',
                        'desc'    => esc_html__('Choose the position of the navigation controls', 'lambda-admin-td'),
                        'options' => array(
                            'inside'    => esc_html__('Inside', 'lambda-admin-td'),
                            'outside'   => esc_html__('Outside', 'lambda-admin-td'),
                        ),
                    ),
                    array(
                        'name'      =>  esc_html__('Choose the alignment of the controls', 'lambda-admin-td'),
                        'id'        => 'controlsalign',
                        'type'      => 'radio',
                        'desc'    => esc_html__('Choose the alignment of the navigation controls', 'lambda-admin-td'),
                        'options'   =>  array(
                            'center' => esc_html__('Center', 'lambda-admin-td'),
                            'left'   => esc_html__('Left', 'lambda-admin-td'),
                            'right'  => esc_html__('Right', 'lambda-admin-td'),
                        ),
                        'attr'      =>  array(
                            'class'    => 'widefat',
                        ),
                        'default'   => 'center',
                    )
                )
            ),
            'captions-section' => array(
                'title' => esc_html__('Captions', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Show Captions', 'lambda-admin-td'),
                        'id'        => 'captions',
                        'type'      => 'radio',
                        'default'   =>  'hide',
                        'desc'    => esc_html__('If you choose hide the options below will be ignored', 'lambda-admin-td'),
                        'options' => array(
                            'hide' => esc_html__('Hide', 'lambda-admin-td'),
                            'show' => esc_html__('Show', 'lambda-admin-td'),
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
        )
    ));
    $oxy_theme->register_option_page(array(
        'page_title' => esc_html__('Portfolio Options', 'lambda-admin-td'),
        'menu_title' => esc_html__('Portfolio', 'lambda-admin-td'),
        'slug'       => THEME_SHORT . '-portfolio',
        'main_menu'  => false,
        'sections'   => array(
            'portfolio-options-section' => array(
                'title'   => esc_html__('Portfolio List Options', 'lambda-admin-td'),
                'header'  => esc_html__('Customise your portfolio list.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Zoom Button Text', 'lambda-admin-td'),
                        'id'      => 'portfolio_button_text_zoom',
                        'type'    => 'text',
                        'default' => esc_html__('View Larger', 'lambda-admin-td'),
                        'desc'    => esc_html__('This text will be shown in the portfolio item zoom button.', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Link Button Text', 'lambda-admin-td'),
                        'id'      => 'portfolio_button_text_details',
                        'type'    => 'text',
                        'default' => esc_html__('More Details', 'lambda-admin-td'),
                        'desc'    => esc_html__('This text will be shown below the portfolio item link button.', 'lambda-admin-td'),
                    ),
                )
            ),
            'portfolio-single-section' => array(
                'title'   => esc_html__('Portfolio Single Page', 'lambda-admin-td'),
                'header'  => esc_html__('Customise your portfolio single page here.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Portfolio Page', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the page that the icon at the top of the single page will link to.', 'lambda-admin-td'),
                        'id'        => 'portfolio_page',
                        'type'      => 'select',
                        'options'  => 'taxonomy',
                        'taxonomy' => 'pages',
                        'default' =>  '',
                        'blank' => esc_html__('None', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Show related items', 'lambda-admin-td'),
                        'desc'    => esc_html__('Show related portfolio items after the post content', 'lambda-admin-td'),
                        'id'      => 'related_portfolio_items',
                        'type'    => 'radio',
                        'options' => array(
                            'on'   => esc_html__('On', 'lambda-admin-td'),
                            'off'  => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Related Section Title Text', 'lambda-admin-td'),
                        'desc'    => esc_html__('The text that will be shown above the related portfolio items.', 'lambda-admin-td'),
                        'id'      => 'related_portfolio_text',
                        'type'    => 'text',
                        'default' => esc_html__('Other related items', 'lambda-admin-td'),
                    ),
                    array(
                        'name'    => esc_html__('Number of related items', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose how many related posts are displayed in the related posts section after the post content', 'lambda-admin-td'),
                        'id'      => 'related_portfolio_count',
                        'type'      => 'slider',
                        'default'   => 3,
                        'attr'      => array(
                            'max'       => 8,
                            'min'       => 3,
                            'step'      => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Number of related item columns', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose how many columns are displayed in the related items section after the portfolio content', 'lambda-admin-td'),
                        'id'      => 'related_portfolio_columns',
                        'type'    => 'radio',
                        'options' => array(
                            '3'   => esc_html__('3', 'lambda-admin-td'),
                            '4'   => esc_html__('4', 'lambda-admin-td')
                        ),
                        'default' => '3',
                    ),
                )
            ),
            'portfolio-size-section' => array(
                'title'   => esc_html__('Portfolio Image Sizes', 'lambda-admin-td'),
                'header'  => esc_html__('When your portfolio images are uploaded they will be automatially saved using these dimensions.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Image Width', 'lambda-admin-td'),
                        'desc'    => esc_html__('Width of each portfolio item', 'lambda-admin-td'),
                        'id'      => 'portfolio_item_width',
                        'type'    => 'slider',
                        'default'   => 800,
                        'attr'      => array(
                            'max'       => 1200,
                            'min'       => 50,
                            'step'      => 1
                        )
                    ),
                    array(
                        'name'    => esc_html__('Image Height', 'lambda-admin-td'),
                        'desc'    => esc_html__('Height of each portfolio item', 'lambda-admin-td'),
                        'id'      => 'portfolio_item_height',
                        'type'    => 'slider',
                        'default'   => 600,
                        'attr'      => array(
                            'max'       => 800,
                            'min'       => 50,
                            'step'      => 1
                        )
                    ),
                    array(
                        'name'      => esc_html__('Image Cropping', 'lambda-admin-td'),
                        'id'        => 'portfolio_item_crop',
                        'type'      => 'radio',
                        'default'   =>  'on',
                        'desc'    => esc_html__('Crop images to the exact proportions', 'lambda-admin-td'),
                        'options' => array(
                            'on' => esc_html__('Crop Images', 'lambda-admin-td'),
                            'off' => esc_html__('Do not crop', 'lambda-admin-td'),
                        ),
                    ),
                )
            ),
        )
    ));
    $oxy_theme->register_option_page(array(
        'page_title' => esc_html__('Post Types', 'lambda-admin-td'),
        'menu_title' => esc_html__('Post Types', 'lambda-admin-td'),
        'slug'       => THEME_SHORT . '-post-types',
        'main_menu'  => false,
        'sections'   => array(
            'permalinks-section' => array(
                'title'   => esc_html__('Configure your permalinks here', 'lambda-admin-td'),
                'header'  => esc_html__('Some of the custom single pages (Portfolios, Services, Staff ) can be configured to use their own special url.  This helps with SEO.  Set your permalinks here, save and then navigate to one of the items and you will see the url in the format below.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'prefix'  => '<code>' . get_site_url() . '/</code>',
                        'postfix' => '<code>/my-portfolio-item</code>',
                        'name'    => esc_html__('Portfolio URL slug', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the url you would like your portfolios to be shown on', 'lambda-admin-td'),
                        'id'      => 'portfolio_slug',
                        'type'    => 'text',
                        'default' => 'portfolio',
                    ),
                    array(
                        'prefix'  => '<code>' . get_site_url() . '/</code>',
                        'postfix' => '<code>/my-service</code>',
                        'name'    => esc_html__('Service URL slug', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the url you would like your services to use', 'lambda-admin-td'),
                        'id'      => 'services_slug',
                        'type'    => 'text',
                        'default' => 'our-services',
                    ),
                    array(
                        'prefix'  => '<code>' . get_site_url() . '/</code>',
                        'postfix' => '<code>/our-team</code>',
                        'name'    => esc_html__('Staff URL slug', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose the url you would like your staff pages to use', 'lambda-admin-td'),
                        'id'      => 'staff_slug',
                        'type'    => 'text',
                        'default' => 'our-team',
                    ),
                )
            ),
            'posttypes-archives-section' => array(
                'title'   => esc_html__('Post Types Archive Pages', 'lambda-admin-td'),
                'header'  => esc_html__('Set your post types archives pages here', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'      => esc_html__('Portfolio Archive Page', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the archive page for the portfolio post type', 'lambda-admin-td'),
                        'id'        => 'portfolio_archive_page',
                        'type'      => 'select',
                        'options'  => 'taxonomy',
                        'taxonomy' => 'pages',
                        'default' =>  '',
                        'blank' => esc_html__('None', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Services Archive Page', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the archive page for the services post type', 'lambda-admin-td'),
                        'id'        => 'services_archive_page',
                        'type'      => 'select',
                        'options'  => 'taxonomy',
                        'taxonomy' => 'pages',
                        'default' =>  '',
                        'blank' => esc_html__('None', 'lambda-admin-td'),
                    ),
                    array(
                        'name'      => esc_html__('Staff Archive Page', 'lambda-admin-td'),
                        'desc'      => esc_html__('Set the archive page for the staff post type', 'lambda-admin-td'),
                        'id'        => 'staff_archive_page',
                        'type'      => 'select',
                        'options'  => 'taxonomy',
                        'taxonomy' => 'pages',
                        'default' =>  '',
                        'blank' => esc_html__('None', 'lambda-admin-td'),
                    ),
                )
            ),
        )
    ));
    $oxy_theme->register_option_page(array(
        'page_title' => esc_html__('Advanced Theme Options', 'lambda-admin-td'),
        'menu_title' => esc_html__('Advanced', 'lambda-admin-td'),
        'slug'       => THEME_SHORT . '-advanced',
        'main_menu'  => false,
        'javascripts' => array(
            array(
                'handle' => 'vc_default',
                'src'    => OXY_THEME_URI . 'inc/options/javascripts/pages/advanced-options.js',
                'deps'   => array('jquery' ),
                'localize' => array(
                    'object_handle' => 'localData',
                    'data' => array(
                        'ajaxurl' => admin_url('admin-ajax.php'),
                        'installDefaultsNonce'  => wp_create_nonce('install-default-vc')
                    )
                ),
            ),
        ),
        'sections'   => array(
            'css-section' => array(
                'title'   => esc_html__('CSS', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can modify the themes advanced CSS options. Please ensure that the CSS added here is valid.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Extra CSS (loaded last in the header)', 'lambda-admin-td'),
                        'desc'    => esc_html__('Add extra CSS rules to be included in all pages that will be loaded in the header.  This will allow you to override some of the default styling of the theme.', 'lambda-admin-td'),
                        'id'      => 'extra_css',
                        'type'    => 'textarea',
                        'attr'    => array('rows' => '10', 'style' => 'width:100%' ),
                        'default' => '',
                    )
                )
            ),
            'js-section' => array(
                'title'   => esc_html__('Javascript', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can modify the theme advanced JS options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Extra Javascript (loaded last in the header)', 'lambda-admin-td'),
                        'desc'    => esc_html__('Add extra Javascript rules to be included in all pages that will be loaded in the header.  Code will be wrapped in script tags by default.', 'lambda-admin-td'),
                        'id'      => 'extra_js',
                        'type'    => 'textarea',
                        'attr'    => array( 'rows' => '10', 'style' => 'width:100%' ),
                        'default' => '',
                    ),
                )
            ),
            'assets-section' => array(
                'title'   => esc_html__('Assets', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can choose the type of asset files enqueued by the theme.', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Load Minified CSS and JS Assets', 'lambda-admin-td'),
                        'desc'    => esc_html__('Choose between minified and not minified theme CSS and Javascript files. Minified files are smaller and faster to load, while non-minified are easier to edit and mofify because they are more readable. Minified assets are enqueued by default.', 'lambda-admin-td'),
                        'id'      => 'minified_assets',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                )
            ),
            'atom-section' => array(
                'title'   => esc_html__('Enable Atom Meta', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can enable atom meta for posts author, title and date (used by search engines).', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Author', 'lambda-admin-td'),
                        'desc'    => esc_html__('Enable atom meta for posts author', 'lambda-admin-td'),
                        'id'      => 'atom_author',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Title', 'lambda-admin-td'),
                        'desc'    => esc_html__('Enable atom meta for posts title', 'lambda-admin-td'),
                        'id'      => 'atom_title',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    ),
                    array(
                        'name'    => esc_html__('Date', 'lambda-admin-td'),
                        'desc'    => esc_html__('Enable atom meta for posts date', 'lambda-admin-td'),
                        'id'      => 'atom_date',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    )
                )
            ),
            'mobile-section' => array(
                'title'   => esc_html__('Mobile', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can configure settings targeted at mobile devices', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Background Videos', 'lambda-admin-td'),
                        'desc'    => esc_html__('Here you can enable section background videos for mobile. By default it is set to off in order to save bandwidth. Section background image will be displayed as a fallback', 'lambda-admin-td'),
                        'id'      => 'mobile_videos',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'off',
                    ),
                )
            ),
            'svg-section' => array(
                'title'   => esc_html__('SVG Icons', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can enable SVG uploads', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Enable SVG uploads', 'lambda-admin-td'),
                        'desc'    => esc_html__('Here you can enable SVG uploads. By default it is set to off to avoid security hazards.', 'lambda-admin-td'),
                        'id'      => 'enable_svg',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'off',
                    ),
                )
            ),
            'google-anal-section' => array(
                'title'   => esc_html__('Google Analytics', 'lambda-admin-td'),
                'header'  => esc_html__('Set your Google Analytics Tracker and keep track of visitors to your site.', 'lambda-admin-td'),
                'fields' => array(
                    'google_anal' => array(
                        'name' => esc_html__('Google Analytics', 'lambda-admin-td'),
                        'desc' => esc_html__('Paste your google analytics script here', 'lambda-admin-td'),
                        'id' => 'google_anal',
                        'type'    => 'textarea',
                        'attr'    => array('rows' => '10', 'style' => 'width:100%' ),
                        'default' => '',
                    )
                )
            ),
            'advanced-menu-section' => array(
                'title'   => esc_html__('Menus', 'lambda-admin-td'),
                'header'  => esc_html__('Set up advanced menu options.', 'lambda-admin-td'),
                'fields' => array(
                    'ajax_menu_save' => array(
                        'name' => esc_html__('Save Menus Using Ajax (allows saving menus with > 90 menu items )', 'lambda-admin-td'),
                        'desc' => esc_html__('This feature will make WordPress menus save using ajax instead of the default PHP save.  This gets around a bug in WordPress that stops large menus from saving (see https://core.trac.wordpress.org/ticket/14134).', 'lambda-admin-td'),
                        'id' => 'ajax_menu_save',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    )
                )
            ),
            'advanced-menu-section' => array(
                'title'   => esc_html__('Menus', 'lambda-admin-td'),
                'header'  => esc_html__('Set up advanced menu options.', 'lambda-admin-td'),
                'fields' => array(
                    'ajax_menu_save' => array(
                        'name' => esc_html__('Save Menus Using Ajax (allows saving menus with > 90 menu items )', 'lambda-admin-td'),
                        'desc' => esc_html__('This feature will make WordPress menus save using ajax instead of the default PHP save.  This gets around a bug in WordPress that stops large menus from saving (see https://core.trac.wordpress.org/ticket/14134).', 'lambda-admin-td'),
                        'id' => 'ajax_menu_save',
                        'type'    => 'radio',
                        'options' => array(
                            'on'  => esc_html__('On', 'lambda-admin-td'),
                            'off' => esc_html__('Off', 'lambda-admin-td'),
                        ),
                        'default' => 'on',
                    )
                )
            ),
            'demo-content-advanced-section' => array(
                'title'   => esc_html__('One Click Installer', 'lambda-admin-td'),
                'header'  => esc_html__('Modify how the one click installer works.', 'lambda-admin-td'),
                'fields' => array(
                    'one_click_throttle' => array(
                        'name' => esc_html__('Pause between items', 'lambda-admin-td'),
                        'desc' => esc_html__('Amount of time in seconds the installer will wait (usefull if installing on slower servers that cant cope with many requests)', 'lambda-admin-td'),
                        'id' => 'one_click_throttle',
                        'type'    => 'slider',
                        'default' => 2,
                        'attr'    => array(
                            'max'  => 10,
                            'min'  => 0,
                            'step' => 1
                        )
                    )
                )
            ),
            'import-export' => array(
                'title'   => esc_html__('Import / Export', 'lambda-admin-td'),
                'header'  => esc_html__('Here you can import/export the theme options', 'lambda-admin-td'),
                'fields' => array(
                    array(
                        'name'    => esc_html__('Export Data', 'lambda-admin-td'),
                        'id'      => 'data_export',
                        'type'    => 'export',
                        'attr'    => array( 'rows' => '10', 'style' => 'width:100%' ),
                        'default' => '',
                    ),
                    array(
                        'name'    => esc_html__('Import Data', 'lambda-admin-td'),
                        'id'      => 'data_import',
                        'type'    => 'import',
                        'attr'    => array( 'rows' => '10', 'style' => 'width:100%' ),
                        'default' => '',
                    )
                )
            )
        )
    ));
}
$oxy_theme->register_option_page(array(
    'page_title' => esc_html__('WooCommerce', 'lambda-admin-td'),
    'menu_title' => esc_html__('WooCommerce', 'lambda-admin-td'),
    'slug'       => THEME_SHORT . '-woocommerce',
    'main_menu'  => false,
    'icon'       => 'tools',
    'sections'   => array(
        'woo-shop-section' => array(
            'title'   => esc_html__('Shop Page', 'lambda-admin-td'),
            'header'  => esc_html__('Setup the layout of your Shop.', 'lambda-admin-td'),
            'fields' => array(
                array(
                    'name'    => esc_html__('Shop Layout', 'lambda-admin-td'),
                    'desc'    => esc_html__('Layout of your shop page. Choose among right sidebar, left sidebar, fullwidth layout', 'lambda-admin-td'),
                    'id'      => 'shop_layout',
                    'type'    => 'radio',
                    'options' => array(
                        'sidebar-right' => esc_html__('Right Sidebar', 'lambda-admin-td'),
                        'full-width'    => esc_html__('Full Width', 'lambda-admin-td'),
                        'sidebar-left'  => esc_html__('Left Sidebar', 'lambda-admin-td'),
                    ),
                    'default' => 'full-width',
                ),
            )
        ),
        'woo-single-product-page' => array(
            'title'  => esc_html__('Product Details', 'lambda-admin-td'),
            'header' => esc_html__('Setup your products page details', 'lambda-admin-td'),
            'fields' => array(
                array(
                    'name'    => esc_html__('Social Networks', 'lambda-admin-td'),
                    'desc'    => esc_html__('Select which social networks you would like to share products on.', 'lambda-admin-td'),
                    'id'      => 'woo_social_networks',
                    'default' =>  array('facebook', 'twitter', 'google', 'pinterest' ),
                    'type'    => 'select',
                    'attr' => array(
                        'multiple' => '',
                        'style' => 'height:100px'
                    ),
                    'options' => array(
                        'facebook'  => esc_html__('Facebook', 'lambda-admin-td'),
                        'twitter'   => esc_html__('Twitter', 'lambda-admin-td'),
                        'google'    => esc_html__('Google+', 'lambda-admin-td'),
                        'pinterest' => esc_html__('Pinterest', 'lambda-admin-td'),
                        'none' => esc_html__('None', 'lambda-admin-td')
                    )
                ),
            )
        )
    )
));

$oxy_theme->register_option_page(array(
    'page_title' => esc_html__('Fonts', 'lambda-admin-td'),
    'menu_title' => esc_html__('Fonts', 'lambda-admin-td'),
    'slug'       => THEME_SHORT . '-fonts',
    'main_menu'  => false,
    'icon'       => 'tools',
    'sections'   => array(
        'google-fonts-section' => array(
            'title'   => esc_html__('Google Fonts', 'lambda-admin-td'),
            // 'header'  => esc_html__('Setup Your Google Fonts Here.', 'lambda-admin-td'),
            'fields' => array(
                array(
                    'name'        => esc_html__('Fetch Google Fonts', 'lambda-admin-td'),
                    'button-text' => esc_html__('Update Fonts', 'lambda-admin-td'),
                    'id'          => 'google_update_fonts_button',
                    'type'        => 'button',
                    'desc'        => esc_html__('Click this button to fetch the latest fonts from Google and update your Google Fonts list.', 'lambda-admin-td'),
                    'attr'        => array(
                        'id'    => 'google-update-fonts-button',
                        'class' => 'button button-primary'
                    ),
                    'javascripts' => array(
                        array(
                            'handle' => 'google-font-updater',
                            'src'    => OXY_THEME_URI . 'vendor/oxygenna/oxygenna-typography/assets/javascripts/options/google-font-updater.js',
                            'deps'   => array('jquery'),
                            'localize' => array(
                                'object_handle' => 'googleUpdate',
                                'data' => array(
                                    'ajaxurl'   => admin_url('admin-ajax.php'),
                                    // generate a nonce with a unique ID "myajax-post-comment-nonce"
                                    // so that you can check it later when an AJAX request is sent
                                    'nonce'     => wp_create_nonce('google-fetch-fonts-nonce'),
                                )
                            )
                        ),
                    ),
                )
            )
        ),
        'typekit-provider-options' => array(
            'title'   => esc_html__('TypeKit Fonts', 'lambda-admin-td'),
            'header'  => esc_html__('If you have a TypeKit account and would like to use it in your site.  Enter your TypeKit API key below and then click the Update your kits button.', 'lambda-admin-td'),
            'fields' => array(
                array(
                    'name' => esc_html__('Typekit API Token', 'lambda-admin-td'),
                    'desc' => esc_html__('Add your typekit api token here', 'lambda-admin-td'),
                    'id'   => 'typekit_api_token',
                    'type' => 'text',
                    'attr'        => array(
                        'id'    => 'typekit-api-key',
                    )
                ),
                array(
                    'name'        => esc_html__('TypeKit Kits', 'lambda-admin-td'),
                    'button-text' => esc_html__('Update your kits', 'lambda-admin-td'),
                    'desc' => esc_html__('Click this button to update your typography list with the kits available from your TypeKit account.', 'lambda-admin-td'),
                    'id'          => 'typekit_kits_button',
                    'type'        => 'button',
                    'attr'        => array(
                        'id'    => 'typekit-kits-button',
                        'class' => 'button button-primary'
                    ),
                    'javascripts' => array(
                        array(
                            'handle' => 'typekit-kit-updater',
                            'src'    => OXY_THEME_URI . 'vendor/oxygenna/oxygenna-typography/assets/javascripts/options/typekit-updater.js',
                            'deps'   => array('jquery' ),
                            'localize' => array(
                                'object_handle' => 'typekitUpdate',
                                'data' => array(
                                    'ajaxurl'   => admin_url('admin-ajax.php'),
                                    'nonce'     => wp_create_nonce('typekit-kits-nonce'),
                                )
                            )
                        ),
                    ),
                )
            )
        )
    )
));
