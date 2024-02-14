<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twochefs2024
 */

?>

<div class="footer content-container">
	<div class="top">
		<div class="left">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo">
		</div>

		<div class="center">
			<ul>
				<li><a class="navigation" href="<?php echo site_url(); ?>">Home</a></li>
				<li>
				<?php
					// Check if we are on the front page or home page.
					if (is_front_page() || is_home()) {
						echo '<a class="navigation" href="#services">Services</a>';
					} else {
						// Use home_url() to get the home URL and append the section ID.
						echo '<a class="navigation" href="' . esc_url(home_url('/#services')) . '">Services</a>';
					}
					?>
				</li>

				<li>
					<?php
					// Check if we are on the front page or home page.
					if (is_front_page() || is_home()) {
						echo '<a class="navigation" href="#blog">Blog</a>';
					} else {
						// For the blog, it might be better to link directly to the blog page instead of a section.
						// Assuming your blog page is the main posts page, you can link directly to it.
						echo '<a class="navigation" href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">Blog</a>';
					}
					?>
					</li>
				<li>
					<?php
					// Check if we are on the front page or home page.
					if (is_front_page() || is_home()) {
						echo '<a class="navigation" href="#team">Team</a>';
					} else {
						// Use home_url() to get the home URL and append the section ID.
						echo '<a class="navigation" href="' . esc_url(home_url('/#team')) . '">Team</a>';
					}
					?>
				</li>

				<li><a id="servicesLink" class="navigation" href="#services">Contact</a></li>


			</ul>
		</div>

		<div class="right">
			<div class="social-icons">
				<div class="facebook">
					<a href="https://www.facebook.com/TwoChefs1"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Logo"></a>
				</div>
				<div class="instagram">
					<a href="https://www.instagram.com/twochefs.catering/"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Logo"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<p>© <?php echo date("Y"); ?> Two Chefs. All rights reserved.</p>
	</div>
	
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
