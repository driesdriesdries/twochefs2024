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
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site page fadein">
	
	<nav class="navbar content-container">
		<div class="left">
		<a href="<?php echo site_url(); ?>">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Logo">
		</a>

		</div>
		<div class="right">
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
        // Use home_url() to get the home URL and append the section ID.
        echo '<a class="navigation" href="' . esc_url(home_url('/#blog')) . '">Blog</a>';
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

				<li><a class="navigation openContactModal" href="#">Contact</a></li>
			</ul>
		</div>
		<div class="menu-button menu-toggle"><span>&#9776;</span></div>
	</nav>
	