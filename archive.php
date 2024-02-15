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
			<div class="bottom-left">
				<?php
                $featured_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'tag' => 'featured',
                    'category_name' => single_cat_title("", false),
                ));
                if ($featured_posts->have_posts()) : while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
					<div class="featured-item">
						<div class="featured-item-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
						<div class="featured-item-meta">
							<h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
							<p class="post-intro"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="bottom-right">
				<div class="category-roll">
					<?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => single_cat_title("", false),
                        'post__not_in' => array(get_the_ID()),
                    );
                    $latest_posts = new WP_Query($args);
                    if ($latest_posts->have_posts()) : while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
						<div class="category-roll-item">
							<div class="left" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
							<div class="right">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<p><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
							</div>
						</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
