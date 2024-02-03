<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twochefs2024
 */

get_header();
?>
	<div class="content-container">
		<?php get_template_part( 'template-parts/components/hero' ); ?>
		<?php get_template_part( 'template-parts/components/logo-reel' ); ?>
		<?php get_template_part( 'template-parts/components/services' ); ?>
		<?php get_template_part( 'template-parts/components/featured' ); ?>
		<?php get_template_part( 'template-parts/components/blog' ); ?>
		<?php get_template_part( 'template-parts/components/team' ); ?>
		<?php get_template_part( 'template-parts/components/testimonial' ); ?>
		<?php get_template_part( 'template-parts/components/faq' ); ?>
		<?php get_template_part( 'template-parts/components/callout' ); ?>
	</div>

<?php
get_footer();
