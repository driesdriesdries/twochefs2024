<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twochefs2024
 */

get_header();

// Determine the term ID based on the type of archive
$term_id = get_queried_object_id();
$category_image = $term_id ? get_field('category_image', 'category_' . $term_id) : null;
$background_image = $category_image ? wp_get_attachment_image_src($category_image['ID'], 'archive-banner')[0] : 'default-image-url.jpg';
?>

<div class="content-container archive">
    <div class="archive-banner" style="background-image: url('<?php echo esc_url($background_image); ?>'); background-size: cover; background-position: center;">
        <h1>
            <?php 
            if (is_category()) {
                single_cat_title();
            }
            ?>
        </h1>
    </div>

    <div class="archive-main">
        <div class="top">
            <div class="category-description">
                <?php echo category_description(); ?>
            </div>
        </div>
        <div class="bottom">
            <div class="left">
                <?php
                // Query for featured post in the current category
                $featured_args = [
                    'category__in' => [$term_id],
                    'tag' => 'featured',
                    'posts_per_page' => 1,
                ];
                $featured_post_query = new WP_Query($featured_args);
                $featured_post_id = 0; // Default to no featured post

                if ($featured_post_query->have_posts()) {
                    while ($featured_post_query->have_posts()) : $featured_post_query->the_post();
                        $featured_post_id = get_the_ID(); // Capture the ID to exclude later
                        $featured_image_url = get_the_post_thumbnail_url($featured_post_id, 'full');
                        ?>

                        <div class="card-featured" onclick="location.href='<?php echo esc_url(get_permalink()); ?>';" style="cursor: pointer;">
                            <div class="card-featured-image" style="background: url('<?php echo esc_url($featured_image_url); ?>') center / cover no-repeat;"></div>
                            <div class="card-featured-meta">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                            </div>
                        </div>

                        <?php
                    endwhile;
                } else {
                    // Fallback: Query for any post in the current category if no featured post is found
                    $fallback_args = [
                        'category__in' => [$term_id],
                        'posts_per_page' => 1,
                    ];
                    $fallback_query = new WP_Query($fallback_args);
                    if ($fallback_query->have_posts()) {
                        while ($fallback_query->have_posts()) : $fallback_query->the_post();
                            $featured_post_id = get_the_ID(); // This will now be the ID of the fallback post
                            $featured_image_url = get_the_post_thumbnail_url($featured_post_id, 'full');
                            ?>

                            <div class="card-featured" onclick="location.href='<?php echo esc_url(get_permalink()); ?>';" style="cursor: pointer;">
                                <div class="card-featured-image" style="background: url('<?php echo esc_url($featured_image_url); ?>') center / cover no-repeat;"></div>
                                <div class="card-featured-meta">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                </div>
                            </div>

                            <?php
                        endwhile;
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="right">
                <?php
                // Query for posts in the current category, excluding the featured post
                $args = [
                    'category__in' => [$term_id],
                    'posts_per_page' => 3,
                    'post__not_in' => [$featured_post_id], // Exclude the featured post
                ];
                $posts_in_category = new WP_Query($args);

                if ($posts_in_category->have_posts()) : 
                    while ($posts_in_category->have_posts()) : $posts_in_category->the_post();
                        $post_url = get_permalink();
                        ?>

                        <div class="card" onclick="location.href='<?php echo esc_url($post_url); ?>';" style="cursor: pointer;">
                            <div class="card-left" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"></div>
                            <div class="card-right">
                                <h5><?php the_title(); ?></h5>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                            </div>
                        </div>

                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/components/callout'); ?>
    
</div>

<?php get_footer(); ?>
