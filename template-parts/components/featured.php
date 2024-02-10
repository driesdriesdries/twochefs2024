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
        <?php if( have_rows('featured_instance') ): ?>
            <div class="logo-box">
                <?php while( have_rows('featured_instance') ): the_row(); 
                    $logo = get_sub_field('featured_logo');
                    $logo_url = $logo['sizes']['thumbnail'] ?? $logo['url']; // Fallback to full image if thumbnail size isn't available
                    $link = get_sub_field('featured_logo_link');
                ?>
                    <div class="logo" style="background: url('<?php echo esc_url($logo_url); ?>') no-repeat center; background-size: 100% auto;">
                        <a href="<?php echo esc_url($link); ?>"></a>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
