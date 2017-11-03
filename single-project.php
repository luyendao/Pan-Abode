<?php get_header(); ?>
			
			<div id="content" class="clearfix container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div id="main" class="col-sm-12 clearfix" data-wow-delay="1.5s" data-wow-duration="1s" role="main">
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
							<header>
								
								<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>

								  <?php //$category = wp_get_post_terms( get_the_ID(), 'type'); ?>
								<?php 
									$term_list = wp_get_post_terms(get_the_ID(),'project_types', array("fields" => "names"));
									$term = $term_list[0];
								?>

								  <ul class="breadcrumbs">
								  	<li><a href="#<?php //echo get_term_link( $category[0]->term_id, 'type' ); ?> "><?php echo $term; ?></a></li> > 
								  	<li><?php the_title(); ?></li>
								  </ul>
							
							</header> <!-- end article header -->
						
							<section class="post_content clearfix" itemprop="articleBody">
								
								<?php the_content(); ?>

								<?php if (get_field('project_video')): ?>

									<div class="row">

										<div class="col-md-8 embed-container" id="project-video">

										<?php echo get_field('project_video'); ?>

										</div>

									</div>

								<?php endif; ?>


								<div class="gallery">
									<ul>
									<?php

									// Loop through Collection post type ACF repeater
									if( have_rows('collection_images') ):			

									 	// loop through the rows of data
									    while ( have_rows('collection_images') ) : the_row();
									    $img_url = get_sub_field('image');
									    $image = aq_resize( $img_url, 300, 225, true,true,true); 
									    ?>
									       
									        <li class="col-md-4 col-sm-12">
										        <a class="thumbnail fancybox image" href="<?php echo get_sub_field('image'); ?>" rel="group-<?php echo get_the_ID(); ?>">
										        		<img src="<?php echo $image; ?>" alt="<?php echo get_sub_field('caption'); ?>" />
										        </a>
									        </li>

									        <?php 
									    endwhile;
									endif;

									?>					
									</ul>
								</div>			

						
							</section> <!-- end article section -->
						
						</article> <!-- end article -->
				
					</div> <!-- end #main -->
	    
				<?php endwhile; endif; ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
