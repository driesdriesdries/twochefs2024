<div class="blog">
  <div class="instance-group">
    <?php
    // Define the query
    $args = array(
        'posts_per_page' => 3, // Adjust the number of posts as needed
        'orderby' => 'date', // Order by date
        'order' => 'DESC' // Latest posts first
    );
    $query = new WP_Query($args);

    // Loop through the posts
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        // Get the post thumbnail URL, now using 'medium_large'
        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');

        // Use a default image if no thumbnail is set
        $background_image_url = $thumbnail_url ? $thumbnail_url : 'https://culturedvultures.com/wp-content/uploads/2022/09/Dragon-Ball-Z-803x452.jpeg';
    ?>
        <div class="post-instance" onclick="window.location='<?php the_permalink(); ?>';" style="cursor: pointer;">
            <div class="background" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo esc_url($background_image_url); ?>') center / cover no-repeat; transition: filter 0.5s ease; z-index: -1;"></div>
            <h5><?php the_title(); ?></h5>
        </div>
    <?php
    endwhile; endif;
    // Reset post data
    wp_reset_postdata();
    ?>
  </div>
</div>
