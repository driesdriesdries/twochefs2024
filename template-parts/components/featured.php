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
                    $link = get_sub_field('featured_logo_link');
                    if ($logo): // Check if there is a logo
                        // Get the medium size URL from the sizes array
                        $logo_url = esc_url($logo['sizes']['medium'] ?? $logo['url']); // Fallback to the full size if medium is not set
                        $logo_alt = esc_attr($logo['alt']); // Get the alternative text
                        // Access the 'url' key of the $link array
                        $link_url = !empty($link) ? esc_url($link['url']) : ''; // Get the link URL or empty string if it's not set
                ?>
                        <a href="<?php echo $link_url; ?>" target="<?php echo esc_attr($link['target']); ?>">
                            <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>">
                        </a>
                <?php 
                    endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
