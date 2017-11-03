<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix container">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					

						<script>
							jQuery( document ).ready(function($) {
							 $("#type-selector li > a").click(function(e) {
							 	e.preventDefault();							
							 	var type = $(this).attr("data-filter-type");
							 	console.log(type);

							 	$("#type-selector li > a").parent().removeClass('current');
							 	$(this).parent().addClass('current');

							 	$(".gallery ul li").hide();



							 	if (type.length && type !== 'show-all') {

							 	// Each LI contains two hrefs, select first one only
							 	$(".gallery ul li").each(function() {

							 		var categories = $(this).attr("data-taxonomy");
							 		
									if ( ~categories.indexOf(type)) {
										$(this).show();
									} else {
										$(this).hide();
									}							 		


								 })

							 	} else {
							 		$(".gallery ul li").show();
							 	}


							 	})
							});

						</script>


						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							<?php //the_field( 'gallery' ); ?>

							<?php 
								$terms = get_terms( 'project_types' );
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) { ?>
								    <ul id="type-selector" class="row">
								    <li class="btn col-md-2 current"><a data-filter-type="show-all" href="#">Show All</a></li>
								    <?php
								    foreach ( $terms as $term ) {
								        echo '<li class="btn col-md-2"><a data-filter-type="' . strtolower($term->name) . '" href="#">' . $term->name . '</a></li>';
								    }
								    echo '</ul>';
								}
							?>						

							<?php get_template_part( 'templates/projects'); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>