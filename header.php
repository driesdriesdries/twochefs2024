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
	<nav class="navbar">
		<label class="navbar-toggle" id="js-navbar-toggle" for="chkToggle">
				<i class="fa fa-bars"></i>
			</label>
		<a href="#" class="logo">logo</a>
		<input type="checkbox" id="chkToggle"></input>
		<ul class="main-nav" id="js-menu">
		<li>
			<a href="#" class="nav-links">Home</a>
		</li>
		<li>
			<a href="#" class="nav-links">Products</a>
		</li>
		<li>
			<a href="#" class="nav-links">About Us</a>
		</li>
		<li>
			<a href="#" class="nav-links">Contact Us</a>
		</li>
		<li>
			<a href="#" class="nav-links">Blog</a>
		</li>
		</ul>
</nav>

	

	
