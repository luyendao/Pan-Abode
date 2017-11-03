<?php get_header(); ?>
			
			<div id="content" class="clearfix container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div id="main" class="col-sm-8 clearfix" data-wow-delay="1.5s" data-wow-duration="1s" role="main">
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
							<header>
								
								<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>

								  <?php $category = wp_get_post_terms( get_the_ID(), 'type'); ?>

								  <ul class="breadcrumbs">
								  	<li><a href="#<?php //echo get_term_link( $category[0]->term_id, 'type' ); ?> "><?php echo $category[0]->name; ?></a></li> > 
								  	<li><?php the_title(); ?></li>
								  </ul>
							
							</header> <!-- end article header -->
						
							<section class="post_content clearfix" itemprop="articleBody">
								
								<?php the_content(); ?>
						
							</section> <!-- end article section -->
						
						</article> <!-- end article -->
				
					</div> <!-- end #main -->
	    
					<div id="sidebar1" class="col-sm-4" data-wow-delay="2s" data-wow-duration="1s" role="complementary">
					
                        <?php if( get_field( 'floor_plan_pdf')){ ?><a href="<?php the_field( 'floor_plan_pdf'); ?>" class="pdf btn" target="_blank">Download <?php the_title(); ?> Floor Plan</a><?php } ?>

						<div class="images">

							<?php if( get_field( 'image_1' )!='' ){ ?><a href="<?php the_field( 'image_1' ); ?>" ><img src="<?php the_field( 'image_1' ); ?>" alt="" /></a><?php } ?>
							<?php if( get_field( 'image_2' )!='' ){ ?><a href="<?php the_field( 'image_2' ); ?>" ><img src="<?php the_field( 'image_2' ); ?>" alt="" /></a><?php } ?>
							<?php if( get_field( 'image_3' )!='' ){ ?><a href="<?php the_field( 'image_3' ); ?>" ><img src="<?php the_field( 'image_3' ); ?>" alt="" /></a><?php } ?>

						</div>

					</div>

				<?php endwhile; endif; ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
