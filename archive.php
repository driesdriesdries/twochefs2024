<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twochefs2024
 */

get_header();
?>

<div class="content-container archive">
    <div class="archive-banner">
        <h1>
            <?php if (is_category()) : ?>
                <?php single_cat_title(); ?>
            <?php elseif (is_tag()) : ?>
                Tag Archive for: "<?php single_tag_title(); ?>"
            <?php elseif (is_day()) : ?>
                Daily Archive for: "<?php echo get_the_date(); ?>"
            <?php elseif (is_month()) : ?>
                Monthly Archive for: "<?php echo get_the_date('F Y'); ?>"
            <?php elseif (is_year()) : ?>
                Yearly Archive for: "<?php echo get_the_date('Y'); ?>"
            <?php else : ?>
                Corporate Events
            <?php endif; ?>
        </h1>
    </div>
	<div class="archive-main">
		<div class="top">
			<div class="category-description">
                <?php echo category_description(); ?>
            </div>
		</div>
		<div class="bottom">
			<div class="bottom-left">Bottom left</div>
			<div class="bottom-right">Bottom Right</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
