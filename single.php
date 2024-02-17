<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package twochefs2024
 */

get_header(); 

// Get the categories of the post
$categories = get_the_category();
$category_link = !empty($categories) ? get_category_link($categories[0]->term_id) : '';
$category_name = !empty($categories) ? $categories[0]->name : '';

// Get the featured image URL with 'large' size
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');

?>

<main id="primary" class="site-main single-article content-container">
    <div class="single-banner" style="background-image: url('<?php echo esc_url($featured_img_url); ?>');">

    </div>
    <div class="breadcrumbs">
        <span><a href="<?php echo site_url(); ?>">Home</a> > <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a> > <span class="title"><?php the_title(); ?></span></span>
    </div>
    <div class="article-content">
        <?php the_content(); ?>
    </div>
	<?php get_template_part( 'template-parts/components/callout' ); ?>
</main><!-- #main -->

<?php
get_footer();
?>
