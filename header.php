<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twochefs2024
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-WZEV3LYXR4"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-WZEV3LYXR4');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site page fadein">
	


<script>

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with the class 'menu-button'
    var menuButtons = document.querySelectorAll('.menu-button');

    // Add click event listener to each menu button
    menuButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Select the nav element with class 'navbar content-container'
            var navBar = document.querySelector('.navbar.content-container');
            // Toggle the 'active' class on the navBar
            navBar.classList.toggle('active');
        });
    });
});

</script>
	<nav class="navbar content-container">
		<div class="left">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Logo">
		</div>
		<div class="right">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>
		<div class="menu-button menu-toggle"><span>&#9776;</span></div>
	</nav>
	