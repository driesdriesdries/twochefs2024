<div class="faq">
    <?php
    // Check if there are any FAQ instances
    if (have_rows('faq_instance')) :
        // Loop through all FAQ instances
        while (have_rows('faq_instance')) : the_row();
            // Get the sub field values for this row
            $faq_question = get_sub_field('faq_question');
            $faq_answer = get_sub_field('faq_answer');
    ?>
        <div class="accordion-item">
            <div class="heading"><h3><?php echo esc_html($faq_question); ?></h3></div>
            <div class="body"><p><?php echo esc_html($faq_answer); ?></p></div>
        </div>
    <?php
        endwhile;
    else :
        // No FAQ instances found
        echo '<p>No FAQs available.</p>';
    endif;
    ?>
</div>
