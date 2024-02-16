<div id="services" class="services">
    <?php
    $categories = get_categories();
    foreach($categories as $category) {
        // Check if the category has a description to only display those
        if(!empty($category->description)) {
            // Split the description into an array of words
            $words = explode(' ', $category->description);
            // Select the first 15 words
            $first15Words = array_slice($words, 0, 15);
            // Combine the words back into a string
            $trimmedDescription = implode(' ', $first15Words);
            // Get the category link
            $categoryLink = get_category_link($category->term_id);
            // Get the ACF image field for the category
            $categoryImage = get_field('category_image', 'category_' . $category->term_id);
            // Use the medium size of the image
            $categoryImageURL = $categoryImage['sizes']['medium'];
    ?>
    <div class="services-card" onclick="window.location.href='<?php echo esc_url($categoryLink); ?>';" style="cursor: pointer;">
        <div class="services-card-image" style="background-image: url('<?php echo esc_url($categoryImageURL); ?>');"></div>
        <div class="services-card-details">
            <h5><?php echo esc_html($category->name); ?></h5>
            <p><?php echo esc_html($trimmedDescription); ?>...</p>
        </div>
    </div>
    <?php
        }
    }
    ?>
</div>
