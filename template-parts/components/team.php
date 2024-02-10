<div id="team" class="team">
    <div class="left">
        <div class="content">
            <h2><?php echo esc_html(get_field('team_section_heading')); ?></h2>
            <p><?php echo esc_html(get_field('team_section_description')); ?></p>
        </div>
    </div>
    <div class="right">
        <?php 
        $image = get_field('team_section_image');
        if( !empty($image) ):
            // Change 'large' to 'full' if you need the original size
            $image_url = $image['sizes']['large'] ?? $image['url']; // Fallback to full image if 'large' size isn't available
        ?>
            <div class="image" style="background: url('<?php echo esc_url($image_url); ?>') center / cover no-repeat;"></div>
        <?php else: ?>
            <div class="image" style="background: url('default-placeholder-image-url.jpg') center / cover no-repeat;"></div>
        <?php endif; ?>
    </div>
</div>
