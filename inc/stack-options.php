<?php
/**
 * All the variables that can be modified in the stack
 *
 * @package Lambda
 * @subpackage Admin
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license **LICENSE**
 * @version 1.59.23
 * @author Oxygenna.com
 */

return array(
    array(
        'id' => 'typography-box',
        'title' => esc_html__('Typography', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Body Font Family', 'lambda-admin-td'),
                'id'      => 'font-family',
                'desc'    => esc_html__('The standard font family to use for body text.', 'lambda-admin-td'),
                'type'    => 'font',
                'default' => 'eyJ2YWx1ZSI6Imdvb2dsZV9mb250c3xSb2JvdG8iLCJmYW1pbHkiOiJSb2JvdG8iLCJwcm92aWRlciI6Imdvb2dsZV9mb250cyIsInZhcmlhbnRzIjpbIjMwMCIsIjMwMGl0YWxpYyIsIjcwMCJdLCJzdWJzZXRzIjpbImxhdGluIl0sIndlaWdodHMiOltdfQ==',
                'filter'  => 'var_filter_font_family'
            ),
            array(
                'name'    => esc_html__('Body Font Size', 'lambda-admin-td'),
                'id'      => 'font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use the body text.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 14,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Body Font Weight', 'lambda-admin-td'),
                'id'      => 'font-weight',
                'desc'    => esc_html__('The font weight to use for the body font.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 400,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Headings Font Family', 'lambda-admin-td'),
                'id'      => 'heading-font-family',
                'desc'    => esc_html__('The font family to use for headings.', 'lambda-admin-td'),
                'type'    => 'font',
                'default' => 'eyJ2YWx1ZSI6Imdvb2dsZV9mb250c3xSb2JvdG8gU2xhYiIsImZhbWlseSI6IlJvYm90byBTbGFiIiwicHJvdmlkZXIiOiJnb29nbGVfZm9udHMiLCJ2YXJpYW50cyI6WyIxMDAiLCIzMDAiLCJyZWd1bGFyIiwiNzAwIl0sInN1YnNldHMiOlsibGF0aW4iXSwid2VpZ2h0cyI6W119',
                'filter'  => 'var_filter_font_family'
            ),
            array(
                'name'    => esc_html__('Headings Font Weight', 'lambda-admin-td'),
                'id'      => 'heading-font-weight',
                'desc'    => esc_html__('The font weight to use for headings.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Headings Font Case', 'lambda-admin-td'),
                'id'      => 'heading-text-transform',
                'desc'    => esc_html__('Controls the capitalization of the headings.', 'lambda-admin-td'),
                'type'    => 'select',
                'options' => array(
                    'lowercase'  => esc_html__('Lowercase', 'lambda-admin-td'),
                    'uppercase'  => esc_html__('Uppercase', 'lambda-admin-td'),
                    'capitalize' => esc_html__('Capitalize', 'lambda-admin-td'),
                    'none'       => esc_html__('None', 'lambda-admin-td'),
                ),
                'default' => 'none',
            ),
            array(
                'name'    => esc_html__('Logo Font Family', 'lambda-admin-td'),
                'id'      => 'brand-font-family',
                'desc'    => esc_html__('The font family to use for the logo of the site if using text logo.', 'lambda-admin-td'),
                'type'    => 'font',
                'default' => 'eyJ2YWx1ZSI6Imdvb2dsZV9mb250c3xSb2JvdG8gU2xhYiIsImZhbWlseSI6IlJvYm90byBTbGFiIiwicHJvdmlkZXIiOiJnb29nbGVfZm9udHMiLCJ2YXJpYW50cyI6WyIxMDAiLCIzMDAiLCJyZWd1bGFyIiwiNzAwIl0sInN1YnNldHMiOlsibGF0aW4iXSwid2VpZ2h0cyI6W119',
                'filter'  => 'var_filter_font_family'
            ),
            array(
                'name'    => esc_html__('Logo Font Size', 'lambda-admin-td'),
                'id'      => 'brand-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for the logo of the site if using text logo.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 24,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Logo Font Weight', 'lambda-admin-td'),
                'id'      => 'brand-font-weight',
                'desc'    => esc_html__('The font weight to use for the logo of the site if using text logo.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Menu Font Family', 'lambda-admin-td'),
                'id'      => 'navbar-font-family',
                'desc'    => esc_html__('The font family to use for the menu of the top nav.', 'lambda-admin-td'),
                'type'    => 'font',
                'default' => 'eyJ2YWx1ZSI6Imdvb2dsZV9mb250c3xSb2JvdG8gU2xhYiIsImZhbWlseSI6IlJvYm90byBTbGFiIiwicHJvdmlkZXIiOiJnb29nbGVfZm9udHMiLCJ2YXJpYW50cyI6WyIxMDAiLCIzMDAiLCJyZWd1bGFyIiwiNzAwIl0sInN1YnNldHMiOlsibGF0aW4iXSwid2VpZ2h0cyI6W119',
                'filter'  => 'var_filter_font_family'
            ),
            array(
                'name'    => esc_html__('Menu Font Size', 'lambda-admin-td'),
                'id'      => 'navbar-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for the menu of the top nav.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 16,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Menu Font Weight', 'lambda-admin-td'),
                'id'      => 'navbar-font-weight',
                'desc'    => esc_html__('The font weight to use for the menu of the top nav.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 400,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown Font Size', 'lambda-admin-td'),
                'id'      => 'navbar-dropdown-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for dropdown text in the the menu of the top nav.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 14,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
        )
    ),
    array(
        'id' => 'heading-weights-box',
        'title' => esc_html__('Heading Font Weights', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Hairline Weight', 'lambda-admin-td'),
                'id'      => 'font-weight-hairline',
                'desc'    => esc_html__('The font weight to use for .hairline class.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 100,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Light Weight', 'lambda-admin-td'),
                'id'      => 'font-weight-light',
                'desc'    => esc_html__('The font weight to use for .light class.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Regular Weight', 'lambda-admin-td'),
                'id'      => 'font-weight-regular',
                'desc'    => esc_html__('The font weight to use for .regular class.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 400,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Bold Weight', 'lambda-admin-td'),
                'id'      => 'font-weight-bold',
                'desc'    => esc_html__('The font weight to use for .bold class.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 700,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Black Weight', 'lambda-admin-td'),
                'id'      => 'font-weight-black',
                'desc'    => esc_html__('The font weight to use for .black class.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 900,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
        )
    ),
    array(
        'id' => 'blog-box',
        'title' => esc_html__('Blog Options', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Blog Post Title Font Size', 'lambda-admin-td'),
                'id'      => 'blog-post-title-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for the blog post titles.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 40,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Blog Post Title Font Weight', 'lambda-admin-td'),
                'id'      => 'blog-post-title-font-weight',
                'desc'    => esc_html__('The font weight to use for the blog post titles.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
            array(
                'name'    => esc_html__('Blog Post Font Size', 'lambda-admin-td'),
                'id'      => 'blog-post-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for the post content.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 18,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Blog Post Font Weight', 'lambda-admin-td'),
                'id'      => 'blog-post-font-weight',
                'desc'    => esc_html__('The font weight to use for the post content.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
        )
    ),
    array(
        'id' => 'blockquote-box',
        'title' => esc_html__('Blockquote Font', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Blockquote Font Family', 'lambda-admin-td'),
                'id'      => 'blockquote-font-family',
                'desc'    => esc_html__('The font family to use for blockquotes.', 'lambda-admin-td'),
                'type'    => 'font',
                'default' => 'eyJ2YWx1ZSI6Imdvb2dsZV9mb250c3xSb2JvdG8gU2xhYiIsImZhbWlseSI6IlJvYm90byBTbGFiIiwicHJvdmlkZXIiOiJnb29nbGVfZm9udHMiLCJ2YXJpYW50cyI6WyIxMDAiLCIzMDAiLCJyZWd1bGFyIiwiNzAwIl0sInN1YnNldHMiOlsibGF0aW4iXSwid2VpZ2h0cyI6W119',
                'filter'  => 'var_filter_font_family'
            ),
            array(
                'name'    => esc_html__('Blockquote Font Size', 'lambda-admin-td'),
                'id'      => 'blockquote-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for blockquotes.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 24,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Blockquote Font Style', 'lambda-admin-td'),
                'id'      => 'blockquote-font-style',
                'desc'    => esc_html__('The font style to use for blockquotes.', 'lambda-admin-td'),
                'type'    => 'select',
                'options' => array(
                    'normal'  => esc_html__('Normal', 'lambda-admin-td'),
                    'italic'  => esc_html__('Italic', 'lambda-admin-td')
                ),
                'default' => 'normal',
            ),
            array(
                'name'    => esc_html__('Blockquote Font Weight', 'lambda-admin-td'),
                'id'      => 'blockquote-font-weight',
                'desc'    => esc_html__('The font weight to use for blockquotes.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
        )
    ),
    array(
        'id' => 'lead-box',
        'title' => esc_html__('Lead Font', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Lead Paragraph Font Size', 'lambda-admin-td'),
                'id'      => 'lead-font-size',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The font size to use for lead paragraphs.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 21,
                'attr'      => array(
                    'max'       => 96,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Lead Paragraph Font Weight', 'lambda-admin-td'),
                'id'      => 'lead-font-weight',
                'desc'    => esc_html__('The font weight to use for lead paragraphs.', 'lambda-admin-td'),
                'type'    => 'select',
                'default' => 300,
                'options' => include OXY_STACKS_DIR . 'inc/font-weight-options.php'
            ),
        )
    ),
    array(
        'id' => 'navigation-box',
        'title' => esc_html__('Navigation', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Navbar Height', 'lambda-admin-td'),
                'id'      => 'navbar-height',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The default navbar height.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 100,
                'attr'      => array(
                    'max'       => 300,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Navbar Height After Scroll', 'lambda-admin-td'),
                'id'      => 'navbar-scrolled',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The navbar height after the page has scrolled.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 90,
                'attr'      => array(
                    'max'       => 300,
                    'min'       => 10,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Menu Drop Down Width', 'lambda-admin-td'),
                'id'      => 'submenu-width',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The width of the dropdown menus of the navigation.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 220,
                'attr'      => array(
                    'max'       => 360,
                    'min'       => 200,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Navbar top border height', 'lambda-admin-td'),
                'id'      => 'navbar-border-height',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The height of the links top border.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 0,
                'attr'      => array(
                    'max'       => 10,
                    'min'       => 0,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Side Menu Width', 'lambda-admin-td'),
                'id'      => 'sidemenu-width',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The width of the side menu slide out menu.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 270,
                'attr'      => array(
                    'max'       => 360,
                    'min'       => 200,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Side Menu Navigation Max Height', 'lambda-admin-td'),
                'id'      => 'sidemenu-nav-max-height',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The the maximum height that the navigation menu in a side menu can be.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 600,
                'attr'      => array(
                    'max'       => 800,
                    'min'       => 300,
                    'step'      => 1
                )
            ),
        )
    ),
    array(
        'id' => 'body-text-colors',
        'title' => esc_html__('Body Text Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Text Color', 'lambda-admin-td'),
                'id'      => 'text-color',
                'desc'    => esc_html__('Text color for body.', 'lambda-admin-td'),
                'default' => '#303c40',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Heading Color', 'lambda-admin-td'),
                'id'      => 'heading-color',
                'desc'    => esc_html__('Text color for all headings.', 'lambda-admin-td'),
                'default' => '#1b1f20',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Link Color', 'lambda-admin-td'),
                'id'      => 'link-color',
                'desc'    => esc_html__('Text link color. Also sets color for star rating for products, skills shortcode icons, datepicker text, scroll-to buttons icons, shop breadcrumbs, BBPress panels, Link buttons', 'lambda-admin-td'),
                'default' => '#6BA4B6',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Link Hover Color', 'lambda-admin-td'),
                'id'      => 'link-color-hover',
                'desc'    => esc_html__('Text link hover color.', 'lambda-admin-td'),
                'default' => '#569AA7',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Icon Color', 'lambda-admin-td'),
                'id'      => 'icon-color',
                'desc'    => esc_html__('Icon color.', 'lambda-admin-td'),
                'default' => '#3b83a8',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Small Color', 'lambda-admin-td'),
                'id'      => 'small-color',
                'desc'    => esc_html__('Small text color (text used in a small tag). Also sets the color for the post details text, post extras, blockquote footer text, single post social icons', 'lambda-admin-td'),
                'default' => '#959494',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Light Text Color', 'lambda-admin-td'),
                'id'      => 'text-color-alt',
                'desc'    => esc_html__('Alternate light text color for body.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Light Heading Color', 'lambda-admin-td'),
                'id'      => 'heading-color-alt',
                'desc'    => esc_html__('Alternate light text color for all headings.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Light Link Color', 'lambda-admin-td'),
                'id'      => 'link-color-alt',
                'desc'    => esc_html__('Alternate light text link color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Light Link Hover Color', 'lambda-admin-td'),
                'id'      => 'link-color-hover-alt',
                'desc'    => esc_html__('Alternate light text link hover color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Light Icon Color', 'lambda-admin-td'),
                'id'      => 'icon-color-alt',
                'desc'    => esc_html__('Alternate light text icon color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Light Small Color', 'lambda-admin-td'),
                'id'      => 'small-color-alt',
                'desc'    => esc_html__('Global small text color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'background-colors',
        'title' => esc_html__('Background Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Background Color', 'lambda-admin-td'),
                'id'      => 'background-color',
                'desc'    => esc_html__('Background color of the main content. Also sets the color for map marker label background, infinite scroll loading text, datepicker background, pricing tables background, calendar widget text, tooltip text, badges text.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Background Inverse Color', 'lambda-admin-td'),
                'id'      => 'background-invert',
                'desc'    => esc_html__('Background color that contrasts nicely with the main body background color.', 'lambda-admin-td'),
                'default' => '#6BA4B6',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Background Complimentary Color', 'lambda-admin-td'),
                'id'      => 'background-complementary',
                'desc'    => esc_html__('A variation on the background color to be used for borders / panels etc. Also sets the color for the jumbotron, panels, wells and tables background. Sets the color of features list background, authors page info section background, calendar widget head and footer background, shop order details table background.', 'lambda-admin-td'),
                'default' => 'rgba(0,0,0,.1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'menu-box',
        'title' => esc_html__('Navbar & Side Menu Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Background Color', 'lambda-admin-td'),
                'id'      => 'nav-background',
                'desc'    => esc_html__('Background color for top nav bar and side menu.', 'lambda-admin-td'),
                'default' => '#303C40',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Link Color', 'lambda-admin-td'),
                'id'      => 'nav-link',
                'desc'    => esc_html__('Menu link color.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, .8)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Link Hover Color', 'lambda-admin-td'),
                'id'      => 'nav-link-hover',
                'desc'    => esc_html__('Menu link hover color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Link Active Color', 'lambda-admin-td'),
                'id'      => 'nav-link-active',
                'desc'    => esc_html__('Menu link active color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Logo Text Color', 'lambda-admin-td'),
                'id'      => 'nav-brand',
                'desc'    => esc_html__('Text colour of text logo in the navbar and side menu.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Text Color', 'lambda-admin-td'),
                'id'      => 'nav-text',
                'desc'    => esc_html__('Text colour of regular text in the navbar and side menu.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Border Color', 'lambda-admin-td'),
                'id'      => 'nav-borders',
                'desc'    => esc_html__('Color used for Menu borders', 'lambda-admin-td'),
                'default' => 'rgba(13, 14, 15, .5)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown Background Color', 'lambda-admin-td'),
                'id'      => 'nav-dropdown-background',
                'desc'    => esc_html__('Background color of menu dropdown.', 'lambda-admin-td'),
                'default' => 'rgba(68,113,122,.9)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown Link Color', 'lambda-admin-td'),
                'id'      => 'nav-dropdown-link',
                'desc'    => esc_html__('Link color of menu dropdown.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown Link Hover Color', 'lambda-admin-td'),
                'id'      => 'nav-dropdown-link-hover',
                'desc'    => esc_html__('Link hover color of menu dropdown.', 'lambda-admin-td'),
                'default' => 'rgba(255,255,255,.75)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown Text Color', 'lambda-admin-td'),
                'id'      => 'nav-dropdown-text',
                'desc'    => esc_html__('Text color of menu dropdown.', 'lambda-admin-td'),
                'default' => 'rgba(255,255,255,.75)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown top border Color', 'lambda-admin-td'),
                'id'      => 'nav-dropdown-border',
                'desc'    => esc_html__('Color used for top border on dropdowns.', 'lambda-admin-td'),
                'default' => 'rgba(0,0,0,.055)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Menu Dropdown separator Colors', 'lambda-admin-td'),
                'id'      => 'nav-dropdown-separators',
                'desc'    => esc_html__('Color used for divider and mega menu column dividers.', 'lambda-admin-td'),
                'default' => 'rgba(0,0,0,.055)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Transparent Menu Link Color', 'lambda-admin-td'),
                'id'      => 'nav-transparent-link',
                'desc'    => esc_html__('Link color of navbar when set to transparent.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Transparent Menu Link Hover Color', 'lambda-admin-td'),
                'id'      => 'nav-transparent-link-hover',
                'desc'    => esc_html__('Link hover color of navbar when set to transparent.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Transparent Logo Text Color', 'lambda-admin-td'),
                'id'      => 'nav-transparent-brand',
                'desc'    => esc_html__('Logo text color of navbar when set to transparent.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Transparent Text Color', 'lambda-admin-td'),
                'id'      => 'nav-transparent-text',
                'desc'    => esc_html__('Text color of navbar when set to transparent.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Transparent Borders Color', 'lambda-admin-td'),
                'id'      => 'nav-transparent-borders',
                'desc'    => esc_html__('Color used for borders in transparent menu.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, 0.1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Logo bar Background Color', 'lambda-admin-td'),
                'id'      => 'logo-background',
                'desc'    => esc_html__('Background color of the logo bar - used in Menu below header options / navigation with sidebar options.', 'lambda-admin-td'),
                'default' => '#303C40',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Logo bar Text Color', 'lambda-admin-td'),
                'id'      => 'logo-brand',
                'desc'    => esc_html__('Brand text color on the logo bar - used in Menu below header options / navigation with sidebar options.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'top-bar-box',
        'title' => esc_html__('Top Bar Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Background Color', 'lambda-admin-td'),
                'id'      => 'top-bar-background',
                'desc'    => esc_html__('Background color for top bar.', 'lambda-admin-td'),
                'default' => '#272e31',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Top Bar Link Color', 'lambda-admin-td'),
                'id'      => 'top-bar-link',
                'desc'    => esc_html__('Top Bar link color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Top Bar Link Hover Color', 'lambda-admin-td'),
                'id'      => 'top-bar-link-hover',
                'desc'    => esc_html__('Top Bar link hover color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Top Bar Text Color', 'lambda-admin-td'),
                'id'      => 'top-bar-text',
                'desc'    => esc_html__('Regular text colour text in the top bar.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Top Bar Border Color', 'lambda-admin-td'),
                'id'      => 'top-bar-borders',
                'desc'    => esc_html__('Color of borders between widgets in the top bar.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, .1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'footer-box',
        'title' => esc_html__('Footer Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Background Color', 'lambda-admin-td'),
                'id'      => 'footer-background',
                'desc'    => esc_html__('Background color for footer. Also sets the color of calendar widget body text.', 'lambda-admin-td'),
                'default' => '#272e31',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Footer Text Color', 'lambda-admin-td'),
                'id'      => 'footer-text',
                'desc'    => esc_html__('Regular text color in the footer.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, .6)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Footer Highlight Color', 'lambda-admin-td'),
                'id'      => 'footer-link',
                'desc'    => esc_html__('Sets the color for all links, headers, social icons etc. in the footer.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Footer Link Hover Color', 'lambda-admin-td'),
                'id'      => 'footer-link-hover',
                'desc'    => esc_html__('Footer link hover color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Footer Border Color', 'lambda-admin-td'),
                'id'      => 'footer-borders',
                'desc'    => esc_html__('Color of borders between widgets in the footer.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, .1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'sub-footer-box',
        'title' => esc_html__('Sub Footer Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Background Color', 'lambda-admin-td'),
                'id'      => 'sub-footer-background',
                'desc'    => esc_html__('Background color for sub footer below the main footer.', 'lambda-admin-td'),
                'default' => '#000',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Sub Footer Text Color', 'lambda-admin-td'),
                'id'      => 'sub-footer-text',
                'desc'    => esc_html__('Regular text color in the sub footer.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, .6)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Sub Footer Highlight Color', 'lambda-admin-td'),
                'id'      => 'sub-footer-link',
                'desc'    => esc_html__('Sets the color for all links, headers, social icons etc. in the sub footer.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Sub Footer Link Hover Color', 'lambda-admin-td'),
                'id'      => 'sub-footer-link-hover',
                'desc'    => esc_html__('Hover color of links in sub footer below main footer.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Sub Footer Border Color', 'lambda-admin-td'),
                'id'      => 'sub-footer-borders',
                'desc'    => esc_html__('Color of borders between widgets in the sub footer.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, .1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'forms-box',
        'title' => esc_html__('Form Colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Text Color', 'lambda-admin-td'),
                'id'      => 'form-color',
                'desc'    => esc_html__('Text color used in form elements.', 'lambda-admin-td'),
                'default' => '#3c3c3c',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Background Color', 'lambda-admin-td'),
                'id'      => 'form-background',
                'desc'    => esc_html__('Form elements background color.', 'lambda-admin-td'),
                'default' => 'rgba(0,0,0,.02)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Form Border Color', 'lambda-admin-td'),
                'id'      => 'form-borders',
                'desc'    => esc_html__('Color of borders between elements in the form.', 'lambda-admin-td'),
                'default' => 'rgba(0,0,0,.1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Form Placeholder Color', 'lambda-admin-td'),
                'id'      => 'form-placeholder-color',
                'desc'    => esc_html__('Form placeholder text color.', 'lambda-admin-td'),
                'default' => '#9c9c9c',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Form Active Color', 'lambda-admin-td'),
                'id'      => 'form-active',
                'desc'    => esc_html__('Form active input color.', 'lambda-admin-td'),
                'default' => '#6BA4B6',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'context-box',
        'title' => esc_html__('Contextual colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Primary Text', 'lambda-admin-td'),
                'id'      => 'primary-text',
                'desc'    => esc_html__('Text color for buttons, labels, progress bars, etc. Elements that use the primary style will use this color. Also sets the color for portfolio filters text, pagination text, onsale badge text, mini-cart badge text, featured post\'s category caption.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Primary Background', 'lambda-admin-td'),
                'id'      => 'primary-bg',
                'desc'    => esc_html__('Background color for Buttons, labels, progress bars, etc. Elements that use the primary style will use this color. Also sets the background color for portfolio filters, pagination, onsale badge, mini-cart badge, featured post\'s category caption.', 'lambda-admin-td'),
                'default' => '#6BA4B6',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Default Text', 'lambda-admin-td'),
                'id'      => 'default-text',
                'desc'    => esc_html__('Text color for Buttons, labels, progress bars, etc elements that use the default style will use this color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Default Background', 'lambda-admin-td'),
                'id'      => 'default-bg',
                'desc'    => esc_html__('Background color for Buttons, labels, progress bars, etc elements that use the default style will use this color.', 'lambda-admin-td'),
                'default' => '#4D4A51',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Warning Text', 'lambda-admin-td'),
                'id'      => 'warning-text',
                'desc'    => esc_html__('Text color for Buttons, labels, progress bars, etc elements that use the warning style will use this color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Warning Background', 'lambda-admin-td'),
                'id'      => 'warning-bg',
                'desc'    => esc_html__('Background color for Buttons, labels, progress bars, etc elements that use the warning style will use this color.', 'lambda-admin-td'),
                'default' => '#CD6727',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Danger Text', 'lambda-admin-td'),
                'id'      => 'danger-text',
                'desc'    => esc_html__('Text color for Buttons, labels, progress bars, etc elements that use the danger style will use this color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Danger Background', 'lambda-admin-td'),
                'id'      => 'danger-bg',
                'desc'    => esc_html__('Background color for Buttons, labels, progress bars, etc elements that use the danger style will use this color.', 'lambda-admin-td'),
                'default' => '#E85543',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Success Text', 'lambda-admin-td'),
                'id'      => 'success-text',
                'desc'    => esc_html__('Text color for Buttons, labels, progress bars, etc elements that use the success style will use this color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Success Background', 'lambda-admin-td'),
                'id'      => 'success-bg',
                'desc'    => esc_html__('Background color for Buttons, labels, progress bars, etc elements that use the success style will use this color.', 'lambda-admin-td'),
                'default' => '#008D7D',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Info Text', 'lambda-admin-td'),
                'id'      => 'info-text',
                'desc'    => esc_html__('Text color for Buttons, labels, progress bars, etc elements that use the info style will use this color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Info Background', 'lambda-admin-td'),
                'id'      => 'info-bg',
                'desc'    => esc_html__('Background color for Buttons, labels, progress bars, etc elements that use the info style will use this color.', 'lambda-admin-td'),
                'default' => '#78A2BB',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    ),
    array(
        'id' => 'components-box',
        'title' => esc_html__('Components', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Border Radius Base', 'lambda-admin-td'),
                'id'      => 'border-radius-base',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The base radius to use for the rounded edges of components.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 18,
                'attr'      => array(
                    'max'       => 120,
                    'min'       => 0,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Border Radius Large', 'lambda-admin-td'),
                'id'      => 'border-radius-large',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The radius to use for the rounded edges of large components.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 24,
                'attr'      => array(
                    'max'       => 120,
                    'min'       => 0,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Border Radius Small', 'lambda-admin-td'),
                'id'      => 'border-radius-small',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The radius to use for the rounded edges of small components.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 15,
                'attr'      => array(
                    'max'       => 120,
                    'min'       => 0,
                    'step'      => 1
                )
            ),
            array(
                'name'    => esc_html__('Border Radius Forms', 'lambda-admin-td'),
                'id'      => 'border-radius-forms',
                'filter'  => 'var_filter_add_px',
                'desc'    => esc_html__('The radius to use for the rounded edges of form components.', 'lambda-admin-td'),
                'postfix' => 'px',
                'type'    => 'slider',
                'default'   => 18,
                'attr'      => array(
                    'max'       => 120,
                    'min'       => 0,
                    'step'      => 1
                )
            ),
        )
    ),
    array(
        'id' => 'misc-box',
        'title' => esc_html__('Miscellaneous colors', 'lambda-admin-td'),
        'fields' => array(
            array(
                'name'    => esc_html__('Overlay Text', 'lambda-admin-td'),
                'id'      => 'overlay-text',
                'desc'    => esc_html__('Text color used in image overlays used in portfolios, staff, product images etc.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Overlay Background', 'lambda-admin-td'),
                'id'      => 'overlay-bg',
                'desc'    => esc_html__('Background color color used in image overlays used in portfolios, staff, product images etc.', 'lambda-admin-td'),
                'default' => 'rgba(95, 181, 198, 0.8)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Magnific Overlay Background', 'lambda-admin-td'),
                'id'      => 'magnific-overlay-bg',
                'desc'    => esc_html__('Background color for magnific popup overlay', 'lambda-admin-td'),
                'default' => 'rgba(48, 40, 64, .9)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Magnific Close Icon Color', 'lambda-admin-td'),
                'id'      => 'magnific-close-icon',
                'desc'    => esc_html__('Magnific close button icon color.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Magnific Close Background Color', 'lambda-admin-td'),
                'id'      => 'magnific-close-bg',
                'desc'    => esc_html__('Background color of magnific close button', 'lambda-admin-td'),
                'default' => 'rgba(48, 40, 64, .9)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Back To Top Button Icon Color', 'lambda-admin-td'),
                'id'      => 'top-icon-color',
                'desc'    => esc_html__('Icon color of the back to top icon.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Back To Top Button Background Color', 'lambda-admin-td'),
                'id'      => 'top-icon-bg',
                'desc'    => esc_html__('Background color of the back to top button', 'lambda-admin-td'),
                'default' => '#202628',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Slideshow Icon Color', 'lambda-admin-td'),
                'id'      => 'slideshow-color',
                'desc'    => esc_html__('Icon colour used in slideshow navigation.', 'lambda-admin-td'),
                'default' => '#ffffff',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Slideshow Icon Shadow Color', 'lambda-admin-td'),
                'id'      => 'slideshow-shadow',
                'desc'    => esc_html__('Icon shadow colour used in slideshow navigation', 'lambda-admin-td'),
                'default' => 'rgba(0, 0, 0, 0.2)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Loader Color', 'lambda-admin-td'),
                'id'      => 'loader-color',
                'desc'    => esc_html__('Color of the loader', 'lambda-admin-td'),
                'default' => 'rgba(48, 60, 64, 0.6)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
            array(
                'name'    => esc_html__('Loader background', 'lambda-admin-td'),
                'id'      => 'loader-bg',
                'desc'    => esc_html__('Background color of the loader.', 'lambda-admin-td'),
                'default' => 'rgba(255, 255, 255, 1)',
                'type'    => 'colour',
                'format'  => 'rgba'
            ),
        )
    )
);
