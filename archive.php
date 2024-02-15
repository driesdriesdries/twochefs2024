<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twochefs2024
 */

get_header(); ?>

<div class="content-container archive">
	<div class="archive-banner" style="
		<?php
		// Determine the term ID based on the type of archive
		$term_id = 0;
		if (is_category()) {
			$term_id = get_queried_object_id();
		} elseif (is_tag()) {
			$term_id = get_queried_object_id();
		}
		// Additional conditions for other taxonomies if necessary

		// Get the ACF image field for the current term
		if ($term_id) {
			$category_image = get_field('category_image', 'category_' . $term_id);
		} else {
			// Default image logic goes here
			$category_image = null; // Example placeholder, adjust as necessary
		}

		if ($category_image) {
			echo "background-image: url('{$category_image['url']}');";
		} else {
			// Fallback or default background image
			echo "background-image: url('default-image-url.jpg');";
		}
		echo "background-size: cover; background-position: center;";
		?>">
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
            <?php
            $featured_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'tag' => 'featured',
                'category_name' => single_cat_title("", false),
            ));
            if ($featured_posts->have_posts()) : ?>
            <div class="bottom-left">
                <?php while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
                    <div class="featured-item" onclick="location.href='<?php the_permalink(); ?>';" style="cursor:pointer;">
                        <div class="featured-item-image" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); background-size: cover; background-position:center;"></div>
                        <div class="featured-item-meta">
                            <h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p class="post-intro"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => single_cat_title("", false),
                'post__not_in' => array(get_the_ID()),
            );
            $latest_posts = new WP_Query($args);
            if ($latest_posts->have_posts()) : ?>
            <div class="bottom-right">
                <div class="category-roll">
                    <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <div class="category-roll-item" onclick="location.href='<?php the_permalink(); ?>';" style="cursor:pointer;">
                            <div class="left" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); background-size: cover; background-position:center;"></div>
                            <div class="right">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
