<?php
/**
 * Displays the archive for oxy_portfolio_image custom post type
 *
 * @package Lambda
 * @subpackage Frontend
 * @since 0.1
 *
 * @copyright (c) 2015 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.59.23
 */

get_header();

$page_id = oxy_get_option( 'portfolio_archive_page' );
$page_id = function_exists('icl_object_id') ? icl_object_id($page_id, 'page', true) : $page_id;
if( !empty( $page_id ) ) :

	global $post;
	$post = get_post($page_id);
	setup_postdata($post);

	oxy_page_header( $post->ID );
	get_template_part('partials/content', 'page');

	wp_reset_postdata();

endif;

get_footer();