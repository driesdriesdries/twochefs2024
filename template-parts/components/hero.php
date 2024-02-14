<?php
// Variables for the ACF fields
$hero_image = get_field('hero_section_image');
$hero_heading = get_field('hero_section_heading');
$hero_description = get_field('hero_section_description');

// Get the URL of the 'large' image size or a custom registered size
$hero_image_url = $hero_image['sizes']['large']; // Replace 'large' with your custom size if needed
?>

<div class="hero" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
  <div class="hero-content">
    <h1><?php echo esc_html($hero_heading); ?></h1>
    <p><?php echo esc_html($hero_description); ?></p>
    <a href="#" class="button button-hero">Contact</a>
  </div>
</div>