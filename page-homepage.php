<?php
/*
Template Name: Homepage
*/
?>

<?php get_header( 'home' ); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="clearfix" role="main">

					<?php get_template_part( 'templates/about', 'homepage'); ?>

					<?php get_template_part( 'templates/plans', 'homepage'); ?>

					<?php get_template_part( 'templates/gallery', 'homepage'); ?>

					<?php get_template_part( 'templates/stories', 'homepage'); ?>

					<?php get_template_part( 'templates/faq', 'homepage'); ?>

					<?php get_template_part( 'templates/contact', 'homepage'); ?>
	
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
