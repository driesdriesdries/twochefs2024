<?php if( have_rows('faq_instance') ): ?>
    <div class="faq">
        <?php while( have_rows('faq_instance') ): the_row(); 
            // Your sub fields go here
            $question = get_sub_field('faq_question');
            $answer = get_sub_field('faq_answer');
            // Generate a unique ID for each FAQ entry
            $uid = uniqid('faq_');
        ?>
        <div class="faq-instance">
            <input type="checkbox" id="<?php echo $uid; ?>" class="faq-toggle" hidden>
            <label for="<?php echo $uid; ?>" class="faq-instance-header">
                <span><?php echo esc_html( $question ); ?></span>
                <span class="icon">+</span>
            </label>
            <div class="faq-instance-body">
                <p><?php echo esc_html( $answer ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
