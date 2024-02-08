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

<div class="footer">
	<div class="top">
		<div class="left">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo">
		</div>

		<div class="center">
			<ul>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>

		<div class="right">right</div>
	</div>
	<div class="bottom">
		<p>© <?php echo date("Y"); ?> Two Chefs. All rights reserved.</p>
	</div>
	
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
