<div id="team" class="team">
    <div class="left">
        <div class="content">
            <!-- Fetch and display the ACF field for the team section heading -->
            <h2><?php echo esc_html(get_field('team_section_heading')); ?></h2>
            <p><?php echo esc_html(get_field('team_section_description')); ?></p>
        </div>
    </div>
    <div class="right">
        <?php 
        $image = get_field('team_section_image');
        if( !empty($image) ): ?>
            <div class="image" style="background: url('<?php echo esc_url($image['url']); ?>') center / cover no-repeat;"></div>
        <?php else: ?>
            <!-- Optional: Default image or placeholder if no image is set -->
            <div class="image" style="background: url('https://culturedvultures.com/wp-content/uploads/2022/09/Dragon-Ball-Z-803x452.jpeg') center / cover no-repeat;"></div>
        <?php endif; ?>
    </div>
</div>
