<div class="testimonial">
    <div class="testimonial-inner">
        <div class="section-heading-box">
            <?php
            // Fetch the 'testimonial_section_heading' field value
            $testimonial_section_heading = get_field('testimonial_section_heading');
            // Output the heading if it exists, otherwise output a default heading
            echo '<h2>' . esc_html($testimonial_section_heading ?: 'Our Clients Thought') . '</h2>';
            
            // Fetch the 'testimonial_section_description' field value
            $testimonial_section_description = get_field('testimonial_section_description');
            // Output the description if it exists, otherwise output a default description
            echo '<p>' . esc_html($testimonial_section_description ?: 'Real Stories from Satisfied Diners: Our Customers Share Their TwoChefs Experience') . '</p>';
            ?>
        </div>
        <div class="testimonial-box">
            <?php
            // Check if the repeater field has rows of data
            if (have_rows('testimonial_entries')) :
                // Loop through the rows of data
                while (have_rows('testimonial_entries')) : the_row();
                    $portrait = get_sub_field('testimonial_portrait');
                    $name = get_sub_field('testimonial_name');
                    $title = get_sub_field('testimonial_title');
                    $content = get_sub_field('testimonial_content');
                    ?>
                    <div class="testimonial-instance">
                        <div class="heading-block">
                            <?php if ($portrait) : ?>
                                <div class="portrait" style="background-image: url('<?php echo esc_url($portrait['sizes']['thumbnail']); ?>'); background-size: contain;"></div>
                            <?php endif; ?>
                            <div class="description">
                                <h5><?php echo esc_html($name); ?></h5>
                                <p><?php echo esc_html($title); ?></p>
                            </div>
                        </div>
                        <div class="content-block">
                            <p>“<?php echo esc_html($content); ?>”</p>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                // No rows found
                echo '<p>No testimonials available.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
