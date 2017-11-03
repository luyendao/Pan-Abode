<section class="section">



	<?php $testimonials = get_page_by_path( 'stories' ); ?>	



	<!-- SECTION PARALLAX -->

	<div class="img-holder parallax-eighth" data-image="<?php the_field( 'parallax_image', $testimonials->ID ); ?>"></div>

	<style>

		.img-holder.parallax-eighth {

			background-image: url("<?php the_field( 'parallax_image', $testimonials->ID ); ?>");

		}

	</style>



	<!-- SECTION HEADER -->

	<div id="testimonials" class="section-header background">



		<div class="container-fluid">



			<div class="col-sm-11  col-sm-offset-1">



				<div class="col-xs-8 pull-right">




					<h2><?php echo $testimonials->post_title; ?></h2>
					<h3>Hear from actual Pan-Abode owners.</h3>

					<?php echo get_field('homepage_stories_summary',1151);?> 

					<a class="btn" style="margin-bottom:20px;" href="<?php echo site_url(); ?>/share">Share Your Story</a>
					<a class="btn" style="margin-bottom:20px;" href="<?php echo site_url(); ?>/stories">Discover More Stories</a>
					<br />
				</div>



			</div>



		</div>



	</div>







	<!-- SECTION CONTENT -->

	<div class="section-content" style="margin-top:20px;">



		<div class="container-fluid">


<!--
			<a href="#frequently-asked-questions" class="scroll-button"></a>
-->


			<div class="col-sm-11 col-sm-offset-1" style="margin:0 auto; text-align:center">


	<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider();
		});
	</script>


				<?php

					$args = array(

								 'post_type'	=>	'story',

								 'order'		=>	'asc',

								 'orderby'		=>	'ID'

								 );



					$stories = new WP_Query( $args );



				?>


<div class="my-slider unslider col-xs-10 pull-right">

	<ul>

				<?php if( $stories->have_posts() ): while( $stories->have_posts() ): $stories->the_post(); ?>



				<li>

					<div class="col-xs-6">
						<?php 

						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 320, 200, true, true, true); //resize & crop the image

						if ( $image ) { 
							echo sprintf('<img src="%s" alt="image" />', $image); 
						} else {
							echo '';
						}

						//the_post_thumbnail( 'thumb' ); 


						?>
					</div>

					<div class="col-xs-6">
						<?php 

						echo sprintf('<h4>%s</h4>',get_the_title());
						echo sprintf('%s', wp_trim_words(get_the_content())); 
						echo sprintf('<p class="owner-name">-- %s</p>', get_field('owner_name'));

						?>
					</div>	
				</li>


				<?php endwhile; endif; ?>


	</ul>

				</div>



			</div>



		</div>



	</div>



</section>
