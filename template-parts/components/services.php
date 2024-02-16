<div id="services" class="services">
    <!-- Introductory Content Above the Cards -->
    <div class="services-intro" style="text-align: center; margin-bottom: 2rem;">
        <h1><?php echo esc_html(get_field('services_heading')); ?></h1>
        <p><?php echo esc_html(get_field('services_description')); ?></p>
    </div>

    <div class="services-grid">
        <?php
        $categories = get_categories();
        foreach($categories as $category) {
            if(!empty($category->description)) {
                $words = explode(' ', $category->description);
                $first15Words = array_slice($words, 0, 15);
                $trimmedDescription = implode(' ', $first15Words);
                $categoryLink = get_category_link($category->term_id);
                $categoryImage = get_field('category_image', 'category_' . $category->term_id);
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
</div>
