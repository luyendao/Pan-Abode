<section class="section">



	<?php $homes = get_page_by_path( 'homes' ); ?>	



	<!-- SECTION PARALLAX -->

	<div class="img-holder parallax-sixth" data-image="<?php the_field( 'parallax_image', $homes->ID ); ?>"></div>

	<style>

		.img-holder.parallax-sixth {

			background-image: url("<?php the_field( 'parallax_image', $homes->ID ); ?>");

		}

	</style>



	<!-- SECTION HEADER -->

	<div id="homes" class="section-header background">



		<div class="container-fluid">
			<div class="col-sm-11  col-sm-offset-1">
				<div class="col-xs-8 pull-right">
					<h2><?php echo $homes->post_title; ?></h2>
                    <?php echo apply_filters('the_content', $homes->post_content); ?>
                    <a class="btn" href="<?php the_field( 'catalog', 38 ); ?>">Download Catalog</a>
                    <br/><br />
				</div>
			</div>
		</div>
	</div>







	<!-- SECTION CONTENT -->

	<div class="section-content">


		<div class="container-fluid">


		<a href="#gallery" class="scroll-button"></a>


			<div class="col-sm-11 pull-right">


				<div class="col-sm-12">





					<?php the_field( 'rancher_plans', $homes ->ID ); ?>


					<div class="clearfix homes-wrap row">


						<?php

							$args = array(

										 'post_type'	=>	'home',

										 'type'			=>	'rancher-plans',

										 'order'		=>	'asc',

										 'orderby'		=>	'ID'

										 );



							$loft_plans = new WP_Query( $args );



						?>



						<?php if( $loft_plans->have_posts() ): while( $loft_plans->have_posts() ): $loft_plans->the_post(); ?>



							<div class="col-xs-4">

								<a href="<?php the_permalink(); ?>" class="home-link">

									<?php the_post_thumbnail( 'medium' ); ?>

									<span><?php the_title(); ?></span>

								</a>

								<p class="image-description"><?php the_excerpt(); ?></p>

							</div>



						<?php endwhile; endif; ?>



					</div>

					

					<?php the_field( 'two_storey_loft_plans', $homes ->ID ); ?>


					<div class="clearfix homes-wrap row">



						<?php

							$args = array(

										 'post_type'	=>	'home',

										 'type'			=>	'two-storey-plans',

										 'order'		=>	'asc',

										 'orderby'		=>	'ID'

										 );



							$loft_plans = new WP_Query( $args );



						?>



						<?php if( $loft_plans->have_posts() ): while( $loft_plans->have_posts() ): $loft_plans->the_post(); ?>



							<div class="col-xs-4">

								<a href="<?php the_permalink(); ?>" class="home-link">

									<?php the_post_thumbnail( 'medium' ); ?>

									<span><?php the_title(); ?></span>

								</a>

								<p class="image-description"><?php the_excerpt(); ?></p>

							</div>



						<?php endwhile; endif; ?>



					</div>



					<?php the_field( 'tiny_homes', $homes ->ID ); ?>


					<div class="clearfix homes-wrap row">


						<?php

							$args = array(

										 'post_type'	=>	'home',

										 'type'			=>	'tiny-homes',

										 'order'		=>	'asc',

										 'orderby'		=>	'ID'

										 );



							$loft_plans = new WP_Query( $args );



						?>



						<?php if( $loft_plans->have_posts() ): while( $loft_plans->have_posts() ): $loft_plans->the_post(); ?>



							<div class="col-xs-4">

								<a href="<?php the_permalink(); ?>" class="home-link">

									<?php the_post_thumbnail( 'medium' ); ?>

									<span><?php the_title(); ?></span>

								</a>

								<p class="image-description"><?php the_excerpt(); ?></p>

							</div>



						<?php endwhile; endif; ?>



					</div>




				</div>



			</div>



		</div>



	</div>



</section>
