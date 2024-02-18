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
	document.addEventListener('DOMContentLoaded', function() {
    // Select the menu toggle button
    const menuToggleButton = document.querySelector('.menu-toggle');

    // Define the toggle function
    function toggleMenu() {
        // Select the navigation element
        const navElement = document.querySelector('nav.navbar.content-container');
        // Toggle the 'collapsed' class on the navigation element
        navElement.classList.toggle('collapsed');
    }

    // Add click event listener to the menu toggle button
    menuToggleButton.addEventListener('click', toggleMenu);
});

</script>



	<nav class="navbar content-container">
		<div class="left">
			<a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo"></a>
		</div>
		<div class="right">
			<ul>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>
		<div class="menu-button menu-toggle"><h1>x</h1></div>
	</nav>