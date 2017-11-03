<section id="faqs" class="section">



	<?php $faqs = get_page_by_path( 'frequently-asked-questions' ); ?>	



	<!-- SECTION PARALLAX -->

	<div class="img-holder parallax-seventh" data-image="<?php the_field( 'parallax_image', $faqs->ID ); ?>"></div>

	<style>

		.img-holder.parallax-seventh {

			background-image: url("<?php the_field( 'parallax_image', $faqs->ID ); ?>");

		}

	</style>



	<!-- SECTION HEADER -->

	<div id="frequently-asked-questions" class="section-header background">



		<div class="container-fluid">



			<div class="col-sm-11  col-sm-offset-1">



				<div class="col-xs-8 pull-right">

					<h2><?php echo $faqs->post_title; ?></h2>

					<?php echo apply_filters('the_content', $faqs->post_content); ?> 
                
                    <a class="btn" href="faq">View Full FAQ</a>

                    <br /><br />

				</div>



			</div>



		</div>



	</div>







	<!-- SECTION CONTENT -->

	<div class="section-content">



		<div class="container-fluid">



			<a href="#contact" class="scroll-button"></a>



			<div class="col-sm-11 pull-right" style="margin-top:20px;">



				<div class="col-xs-8 pull-right">



					<?php the_field( 'section_content', $faqs->ID ); ?>

				</div>



			</div>



		</div>



	</div>



</section>
