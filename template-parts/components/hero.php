<?php
// Assume these are placed within your WordPress theme's template file for the hero section.

// Variables for the ACF fields
$hero_image_small = get_field('hero_section_image')['sizes']['small']; // Small devices
$hero_image_medium = get_field('hero_section_image')['sizes']['medium']; // Medium devices
$hero_image_large = get_field('hero_section_image')['sizes']['large']; // Large devices
$hero_image_full = get_field('hero_section_image')['url']; // Full size for large desktops
$hero_heading = get_field('hero_section_heading');
$hero_description = get_field('hero_section_description');
?>

<div class="hero" id="heroSection"
     data-small="<?php echo esc_url($hero_image_small); ?>"
     data-medium="<?php echo esc_url($hero_image_medium); ?>"
     data-large="<?php echo esc_url($hero_image_large); ?>"
     data-full="<?php echo esc_url($hero_image_full); ?>">
    <div class="hero-content">
        <h1><?php echo esc_html($hero_heading); ?></h1>
        <p><?php echo esc_html($hero_description); ?></p>
        <a href="#" class="button button-hero openContactModal">Contact</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function updateBackgroundImage() {
        var heroSection = document.getElementById('heroSection');
        var imageUrl = heroSection.dataset.small; // Default to small

        // Custom SCSS breakpoints converted to pixels
        var bpSmall = 400; // 25em * 16px
        var bpMedium = 900; // 56.25em * 16px

        if (window.innerWidth >= bpMedium) {
            imageUrl = heroSection.dataset.large;
        } else if (window.innerWidth >= bpSmall) {
            imageUrl = heroSection.dataset.medium;
        }

        // For large desktops, use the full-size image
        if (window.innerWidth >= 1024) {
            imageUrl = heroSection.dataset.full;
        }

        heroSection.style.backgroundImage = 'url(' + imageUrl + ')';
    }

    // Update background image on load
    updateBackgroundImage();

    // Optionally, update background image on window resize
    window.addEventListener('resize', function() {
        // Throttle resize events to avoid excessive updates
        clearTimeout(window.resizedFinished);
        window.resizedFinished = setTimeout(function(){
            updateBackgroundImage();
        }, 250);
    });
});
</script>
