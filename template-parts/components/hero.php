<?php
// Assume these are placed within your WordPress theme's template file for the hero section.

// Variables for the ACF field
$hero_image = get_field('hero_section_image'); // Fetch the array
$hero_image_url = wp_get_attachment_image_src($hero_image['ID'], 'hero-banner')[0]; // Get the URL for the 'hero-banner' size

$hero_heading = get_field('hero_section_heading');
$hero_description = get_field('hero_section_description');
?>

<div class="hero" id="heroSection" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
    <div class="hero-content">
        <h1><?php echo esc_html($hero_heading); ?></h1>
        <p><?php echo esc_html($hero_description); ?></p>
        <a href="#" class="button button-hero openContactModal">Contact</a>
    </div>
</div>
 