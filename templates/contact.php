<section class="section">



	<?php $contact = get_page_by_path( 'contact' ); ?>	



	<!-- SECTION PARALLAX -->

	<div class="img-holder parallax-ninth" data-image="<?php the_field( 'parallax_image', $contact->ID ); ?>"></div>

	<style>

		.img-holder.parallax-ninth {

			background-image: url("<?php the_field( 'parallax_image', $contact->ID ); ?>");

		}

	</style>



	<!-- SECTION HEADER -->

	<div id="contact" class="section-header background">



		<div class="container-fluid">



			<?php $contact = get_page_by_path( 'contact' ); ?>	



			<div class="col-sm-11  col-sm-offset-1">



				<div class="col-xs-8 pull-right">

					<h2><?php echo $contact->post_title; ?></h2>

					<?php echo apply_filters('the_content', $contact->post_content); ?> 

                    <a class="btn" href="http://panabode.com/online-request-form/">Online Request Form</a>

                    <br /><br />

				</div>



			</div>



		</div>



	</div>







	<!-- SECTION CONTENT -->

	<div class="section-content" id="office-information">






		<div class="container-fluid">





			<div class="col-sm-11 col-sm-offset-1" style="margin-top:20px;">


				<div class="col-xs-12 col-sm-8 pull-right" id="head-office">
					<?php 
					wp_reset_postdata();
					echo get_field( 'head_office_contact'); ?>
				</div>

				<div style="clear:both;" />		



					<div class="col-xs-12 col-sm-8 pull-right" id="dealer-listings">



							<div class="clearfix">

							<?php 
							
							
							printf('<h2>Dealers and Distributors</h2>');
							echo get_field('dealer_listings_description'); ?>

							<div class="row">
								<?php
								$rows = get_field('canada_dealers');
								$row_index = 0;

								echo '<h4>CANADA</h4>';

								foreach ($rows as $row) {
									
									if ($rows[$row_index]['province'] !== $rows[$row_index-1]['province']) {
										echo '<h5 style="clear:both;">' . $rows[$row_index]['province'] . '</h5>';
									}

									
									echo '<div class="block col-sm-4 col-xs-12">' . $row['dealer_information'] . '</div>';

									$row_index++;
								}
								?>				
							</div>		


							<div class="row">
								<?php
								$rows = get_field('us_dealers');
								$row_index = 0;


								echo '<h4>UNITED STATES</h4>';

								if (empty($rows)) {
									echo '<div class="block col-sm-12"><p>Please contact our Head Office in Surrey, British Columbia for sales inquiries or for more information about dealership opportunities in the United States.</p></div>';
								} else {

									foreach ($rows as $row) {
										
										if ($rows[$row_index]['province'] !== $rows[$row_index-1]['province']) {
											echo '<h5 style="clear:both;">' . $rows[$row_index]['province'] . '</h5>';
										}

										
										echo '<div class="block col-sm-4 col-xs-12">' . $row['dealer_information'] . '</div>';

										$row_index++;
									}

								}

								
								?>	
							</div>

						
							<div class="row">
								<?php
								$rows = get_field('japan_dealers');
								$row_index = 0;


								echo '<h4>JAPAN</h4>';

								foreach ($rows as $row) {
									
									if ($rows[$row_index]['prefecture'] !== $rows[$row_index-1]['prefecture']) {
										echo '<h5 style="clear:both;">' . $rows[$row_index]['prefecture'] . '</h5>';
									}

									
									echo '<div class="block col-sm-4 col-xs-12">' . $row['dealer_information'] . '</div>';

									$row_index++;
								}
								?>	
							</div>



					</div>



				</div>



			</div>



		</div>



	</div>



</section>
