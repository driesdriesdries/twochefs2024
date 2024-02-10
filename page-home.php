<?php

get_header();
?>
	<div class="content-container fadein">
		<?php get_template_part( 'template-parts/components/hero' ); ?>
		<?php get_template_part( 'template-parts/components/logo-reel' ); ?>
		<?php get_template_part( 'template-parts/components/services' ); ?>
		<?php get_template_part( 'template-parts/components/featured' ); ?>
		<?php get_template_part( 'template-parts/components/blog' ); ?>
		<?php get_template_part( 'template-parts/components/team' ); ?>
		<?php get_template_part( 'template-parts/components/faq' ); ?>
		<?php get_template_part( 'template-parts/components/testimonial' ); ?>
		<?php get_template_part( 'template-parts/components/callout' ); ?>
	</div>

<?php
get_footer();