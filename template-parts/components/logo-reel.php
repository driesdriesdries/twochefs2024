<div class="logo-reel">
    <div class="logo-container">
        <?php
        // First, let's count the number of logos
        $total_logos = count(get_field('add_logo'));
        // Calculate the flex-basis percentage
        $flex_basis = $total_logos > 0 ? 100 / $total_logos : 100;
        ?>

        <?php if( have_rows('add_logo') ): ?>
            <?php while( have_rows('add_logo') ): the_row(); ?>
                <?php 
                $logo_image = get_sub_field('logo_to_be_added');
                if( !empty($logo_image) ): 
                    $logo_url = $logo_image['url'];
                ?>
                    <div class="logo" style="background-image: url('<?php echo esc_url($logo_url); ?>'); flex: 0 0 <?php echo esc_attr($flex_basis); ?>%;"></div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- Repeat the loop if you want to duplicate the set of logos -->
        <?php if( have_rows('add_logo') ): ?>
            <?php while( have_rows('add_logo') ): the_row(); ?>
                <?php 
                $logo_image = get_sub_field('logo_to_be_added');
                if( !empty($logo_image) ): 
                    $logo_url = $logo_image['url'];
                ?>
                    <div class="logo" style="background-image: url('<?php echo esc_url($logo_url); ?>'); flex: 0 0 <?php echo esc_attr($flex_basis); ?>%;"></div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
