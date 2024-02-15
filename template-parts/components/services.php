<div id="services" class="services">
    <div class="services-heading-block">
        <h2>Services</h2>
        <p>Explore our comprehensive range of tailored solutions designed to meet your unique needs.</p>
    </div>
    <div class="services-card-group">
        <?php
        $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ));
        foreach ($categories as $category) {
            // Get the link to the category archive page
            $category_link = get_category_link($category->term_id);

            // Get the ACF image field for the current category
            $category_image = get_field('category_image', 'category_' . $category->term_id); // Make sure to prepend 'category_' to the term ID
            
            // Use a default image if no ACF image is set
            $image_url = $category_image ? $category_image['url'] : 'https://i.ytimg.com/vi/AZ9NlOaS_3U/maxresdefault.jpg';
            // Trim the category description to 14 words
            $trimmed_description = wp_trim_words($category->description, 14, '...');
            ?>
            <div class="card" onclick="location.href='<?php echo esc_url($category_link); ?>';" style="cursor: pointer;">
                <div class="card-top" style="background: url('<?php echo esc_url($image_url); ?>') center / cover no-repeat;">
                </div>
                <div class="card-bottom">
                    <h5><?php echo esc_html($category->name); ?></h5>
                    <p><?php echo esc_html($trimmed_description); ?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
