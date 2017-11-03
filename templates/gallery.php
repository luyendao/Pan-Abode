<section class="section">



	<?php 
	$gallery = get_page_by_path( 'gallery' ); 
	?>



	<!-- SECTION PARALLAX -->

	<div class="img-holder parallax-fifth" data-image="<?php the_field( 'parallax_image', $gallery->ID ); ?>"></div>

	<style>

		.img-holder.parallax-fifth {

			background-image: url("<?php the_field( 'parallax_image', $gallery->ID ); ?>");

		}

	</style>



	<!-- SECTION HEADER -->

	<div id="gallery" class="section-header background">



		<div class="container-fluid">



			<div class="col-sm-11  col-sm-offset-1">



				<div class="col-xs-8 pull-right">

					<h2><?php echo $gallery->post_title; ?></h2>


					<?php echo apply_filters('the_content', $gallery->post_content); ?> 

                     <a href="<?php bloginfo( 'url' ); ?>/gallery/" class="btn">View Complete Gallery</a> <br /><br />

                </div>



			</div>



		</div>



	</div>







	<!-- SECTION CONTENT -->

	<div class="section-content">



		<div class="container-fluid">



			<a href="#testimonials" class="scroll-button"></a>



			<div class="col-sm-11 pull-right">



				<div class="col-sm-12">



						<?php get_template_part( 'templates/projects', 'homepage'); ?>
	


					</div>

					

				</div>



			</div>



		</div>



	</div>



</section>
