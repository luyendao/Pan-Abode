<section class="section" id="about">



	

<!-- Why a Pan-Abode? -->



	<!-- SECTION HEADER -->

	<div class="section-header background">



		<div class="container-fluid">



			<div class="col-sm-11 col-sm-offset-1">



				<?php $about = get_page_by_path( 'about' );?>



				<div class="col-xs-8 pull-right">

					<h2><?php echo $about->post_title; ?></h2>

					<?php echo apply_filters('the_content', $about->post_content); ?> 

				</div>



			</div>



		</div>



	</div>



	<!-- SECTION CONTENT -->

	<div class="section-content" id="about-us">



		<div class="container-fluid">



			<a href="#homes" class="scroll-button"></a>

<script>
jQuery(document).ready(function($){

	$(".panel").hide();
	$(".panel-1").show();
	$("#toggles a").click(function(e){
		e.preventDefault();
		var targetPanel = "." + e.target.id;
		//var targetPanelHeight = $(targetPanel).outerHeight();
		$(".panel").hide();
		$(targetPanel).slideToggle("slow","swing").show();
		//$('.section-content#about-us').height(targetPanelHeight);


	});

});
</script>

<div class="col-sm-11 col-sm-offset-1">
	
	<div class="col-xs-8 pull-right" id="toggle-menu">

	<ul id="toggles">
	<li><a href="#" id="panel-1">Why Pan Abode?</a></li>
	<li><a href="#" id="panel-2">Our Legacy</a></li>
	<li><a href="#" id="panel-3">Western Red Cedar</a></li>
	<li><a href="#" id="panel-4">Custom Design</a></li>
	<li><a href="#" id="panel-5">Easy Assembly</a></li>
	</ul>

	</div>

</div>
	<?php if( have_rows('panels',$about->ID) ): ?>


	<?php 
		$counter = 1;
		while( have_rows('panels',$about->ID) ): the_row(); 

		// vars
		
		$header = get_sub_field('block_header');
		$subheader = get_sub_field('block_sub-title');
		$left= get_sub_field('left_column');
		$right= get_sub_field('right_column');

		?>

			<div class="col-sm-11 col-sm-offset-1 pull-right panel fadeInRight animated panel-<?php echo $counter;?>"  data-wow-duration="1s" data-wow-delay="1s">


				<div class="col-xs-8 pull-right panel-header section-header">
					<?php if (!empty($header)) { echo '<h3>' . $header . '</h3>'; }?>
					<?php if (!empty($subheader)) { echo '<p class="western">' . $subheader . '</p>'; } ?>
				</div>

				<div class="col-xs-8 pull-right panel-body">


					<div class="col-xs-6">
						
						<?php echo $left; ?>

					</div>

					<div class="col-xs-6">

						<?php echo $right; ?>

					</div>

				</div>


			</div>

			<?php $counter++; endwhile; ?>


		<?php endif; ?>


			</div>



		</div>



	</div>


</section>
