<?php
/*
Template Name: Map
*/
?>

<?php get_header(); ?>

	<style>
      #map-canvas {
        height: 700px;
        margin: 0px;
        padding: 0px;
        width: 100%;
      }
    </style>
			
			<div id="content" class="clearfix container">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">

							<div id="map-canvas"></div>
					
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


			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
			<script>

				// Define your locations: HTML content for the info window, latitude, longitude

			     var locations = [
			    <?php if( have_rows('locations') ): while ( have_rows('locations') ) : the_row(); ?>
			    	['<h4><?php the_sub_field("title"); ?></h4><img src="<?php the_sub_field("image"); ?>"><?php the_sub_field("description"); ?>', <?php the_sub_field("location"); ?>],
				<?php endwhile; endif; ?>
			    ];
			    console.log(locations);

			    // Setup the different icons and shadows
			    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
			    
			    var icons = [
			      iconURLPrefix + 'orange-dot.png'
			    ]
			    var iconsLength = icons.length;

			    var map = new google.maps.Map(document.getElementById('map-canvas'), {
			      zoom: 10,
			      center: new google.maps.LatLng(-37.92, 151.25),
			      mapTypeId: google.maps.MapTypeId.ROADMAP,
			      mapTypeControl: false,
			      streetViewControl: false,
			      panControl: false,
			      zoomControlOptions: {
			         position: google.maps.ControlPosition.LEFT_BOTTOM
			      }
			    });

			    var infowindow = new google.maps.InfoWindow({
			    	maxWidth: 200
			    });

			    var markers = new Array();
			    
			    var iconCounter = 0;
			    
			    // Add the markers and infowindows to the map
			    for (var i = 0; i < locations.length; i++) {  
			      var marker = new google.maps.Marker({
			        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			        map: map,
			        icon: icons[iconCounter]
			      });

			      markers.push(marker);

			      google.maps.event.addListener(marker, 'click', (function(marker, i) {
			        return function() {
			          infowindow.setContent(locations[i][0]);
			          infowindow.open(map, marker);
			        }
			      })(marker, i));
			      
			      iconCounter++;
			      // We only have a limited number of possible icon colors, so we may have to restart the counter
			      if(iconCounter >= iconsLength) {
			      	iconCounter = 0;
			      }
			    }

			    function autoCenter() {
			      //  Create a new viewpoint bound
			      var bounds = new google.maps.LatLngBounds();
			      //  Go through each...
			      for (var i = 0; i < markers.length; i++) {  
							bounds.extend(markers[i].position);
			      }
			      //  Fit these bounds to the map
			      map.fitBounds(bounds);
			    }
			    autoCenter();

    		</script>

<?php get_footer(); ?>