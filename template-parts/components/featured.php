<div class="featured">
    <div class="left">
        <div class="content">
            <!-- Use ACF get_field function to make the heading dynamic -->
            <h2><?php echo esc_html(get_field('featured_section_heading')); ?></h2>
            <!-- Use ACF get_field function to make the description dynamic -->
            <p><?php echo esc_html(get_field('featured_section_description')); ?></p>
        </div>
    </div>
    <div class="right">
        <?php if (have_rows('featured_instance')): ?>
            <div class="logo-box">
                <?php while (have_rows('featured_instance')) : the_row();
                    $logo = get_sub_field('featured_logo');
                    $link = get_sub_field('featured_logo_link'); // Get the link URL from the subfield
                    // Only proceed if there is a logo image available
                    if (!empty($logo)):
                        // If there is a link, wrap the image in an anchor tag
                        if (!empty($link)): ?>
                            <a href="<?php echo esc_url($link); ?>"> <!-- Echo the link URL in the href attribute -->
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt'] ?? 'Featured Logo'); ?>">
                            </a>
                        <?php else: ?>
                            <!-- If there is no link, just display the image without wrapping it in an anchor tag -->
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt'] ?? 'Featured Logo'); ?>">
                        <?php endif;
                    endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
