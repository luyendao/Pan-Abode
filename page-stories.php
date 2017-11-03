<?php
/*
 * Template Name: Stories
 */

?>
<?php get_header(); ?>
			
			<div id="content" class="clearfix container">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					

                        <section class="post_content clearfix" itemprop="articleBody">


                           <?php the_content(); ?>
					
                            <style type="text/css">

                            .acf-map {
                                width: 100%;
                                <?php if (wpmd_is_phone()) {  
                                    echo 'height: 300px;';
                                } else {
                                    echo 'height: 600px;';
                                }; ?>
                                border: #ccc solid 2px;
                                margin: 20px 0;
                                position:relative;
                            

                            /* fixes potential theme css conflict */
                            .acf-map img {
                               max-width: inherit !important;
                            }

                            </style>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqE89xtEK7U1DdElmJek5s2KnrYj_PikM"></script>
                            
                            <script type="text/javascript">
                            
                            (function($) {

                            /*
                            *  new_map
                            *
                            *  This function will render a Google Map onto the selected jQuery element
                            *
                            *  @type    function
                            *  @date    8/11/2013
                            *  @since   4.3.0
                            *
                            *  @param   $el (jQuery element)
                            *  @return  n/a
                            */

                            function new_map( $el ) {
                                
                                // var
                                var $markers = $el.find('.marker');
                                
                                
                                // vars
                                var args = {
                                    zoom        : 10,
                                    center      : new google.maps.LatLng(0, 0),
                                    mapTypeId   : google.maps.MapTypeId.ROADMAP,
                                   /* styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffdd00"}]},{"featureType":"poi.business","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e30613"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#009640"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#c8c8c8"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e4e4e4"}]},{"featureType":"transit.line","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.rail","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#c8c8c8"}]},{"featureType":"transit.station.rail","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#ff0000"}]},{"featureType":"transit.station.rail","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"transit.station.rail","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#094898"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]}] */                                 
                                };
                                
                                
                                // create map               
                                var map = new google.maps.Map( $el[0], args);
                                
                                
                                // add a markers reference
                                map.markers = [];
                                


                                // add markers
                                $markers.each(function(){
                                    
                                    add_marker( $(this), map );
                                    
                                });
                                


                                
                                // center map
                                center_map( map );
                                
                                
                                // return
                                return map;
                                
                            }

                            /*
                            *  add_marker
                            *
                            *  This function will add a marker to the selected Google Map
                            *
                            *  @type    function
                            *  @date    8/11/2013
                            *  @since   4.3.0
                            *
                            *  @param   $marker (jQuery element)
                            *  @param   map (Google Map object)
                            *  @return  n/a
                            */

                            function add_marker( $marker, map ) {

                                // var
                                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

                                // icon
                                var icon = {
                                    url: '<?php echo get_stylesheet_directory_uri(). '/images/marker.svg'; ?>',
                                    fillOpacity: 0.8,
                                    scale: 0.5,
                                }

                                // create marker
                                var marker = new google.maps.Marker({
                                    position    : latlng,
                                    map         : map,
                                    icon        : icon
                                });

                                // add to array
                                map.markers.push( marker );

                                // if marker contains HTML, add it to an infoWindow
                                if( $marker.html() && $marker.attr('data-pin') == '' )
                                {
                                    // Store previous infowindows so we can close it
                                    var previous_window = false;

                                    // show info window when marker is clicked
                                    google.maps.event.addListener(marker, 'click', function() {

                                    var content = '<div class="infobox">' + $marker.html() + '</div>';
                                    var infowindow = new google.maps.InfoWindow({
                                        content     :  content 
                                    });

                                        // Save current infowindow into a variable
                                        infowindow.setContent(content);
                                        infowindow.open( map, marker);


                                    });
                                }

                            }



                            /*
                            *  center_map
                            *
                            *  This function will center the map, showing all markers attached to this map
                            *
                            *  @type    function
                            *  @date    8/11/2013
                            *  @since   4.3.0
                            *
                            *  @param   map (Google Map object)
                            *  @return  n/a
                            */

                            function center_map( map ) {

                                // vars
                                var bounds = new google.maps.LatLngBounds();

                                // loop through all markers and create bounds
                                $.each( map.markers, function( i, marker ){

                                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                                    bounds.extend( latlng );

                                });

                                // only 1 marker?
                                if( map.markers.length == 1 )
                                {
                                    // set center of map
                                    map.setCenter( bounds.getCenter() );
                                    map.setZoom( 16 );
                                }
                                else
                                {
                                    // fit to bounds
                                    map.fitBounds( bounds );
                                }

                            }

                            /*
                            *  document ready
                            *
                            *  This function will render each map when the document is ready (page has loaded)
                            *
                            *  @type    function
                            *  @date    8/11/2013
                            *  @since   5.0.0
                            *
                            *  @param   n/a
                            *  @return  n/a
                            */
                            // global var
                            var map = null;

                            $(document).ready(function(){

                                $('.acf-map').each(function(){

                                    // create map
                                    map = new_map( $(this) );

                                });

                            });

                            })(jQuery);
                            </script>


                            <div class="acf-map">

                            <div class="acf-map-loader">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/loader.svg" alt="Loader" />
                            </div>

                            <?php 

                            //$posts = get_field('select_stories');


 
                            $args = array(
                                'post_type' => 'story',
                                'posts_per_page' => -1
                            );
                             
                            $my_query = new WP_Query( $args );
                             
                            if ( $my_query->have_posts() ) {
                             
                                while ( $my_query->have_posts() ) {
                             
                                    $my_query->the_post();
                             
                                     $map = get_field('map'); // get map array
                                    // Post data goes here.
                             
                               
                                    
                            ?>
                                        

                                        <div class="marker" style="display: none;" data-pin="<?php echo get_field('show_map_pin_only'); ?>" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>">
                                           

                                        <h4><?php echo get_the_title(); ?></h4>


                                        <?php if (wpmd_is_phone()) {

                                        echo sprintf('<a href="#post-%s">Learn More</a>', get_the_ID());


                                        } elseif (wpmd_is_notphone()) {

                                            
                                            // Do not display if there's no data
                                            if (get_the_content() || get_post_thumbnail_id()) :

                                                    $thumb = get_post_thumbnail_id();
                                                    if ($thumb) { 
                                                        $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
                                                        $image = aq_resize( $img_url, 320, 200, true, true, true); //resize & crop the image
                                                    } else {
                                                        $image = null;
                                                    }
                                                    

                                                    if ($image) { 
                                                        echo sprintf('<img src="%s" alt="image" />',$image);
                                                    }

                                                    echo sprintf('<p>%s<br />-- %s</p>',get_the_content(), get_field('owner_name'));

                                            endif;


                                        } ?>


                                            
                                        
                                        </div>
                                    <?php 

                                    } // end if have_posts

                                } // end while loop
                             
                            // Reset the `$post` data to the current post in main query.
                            wp_reset_postdata();

                             ?>

                            </div>


                            <?php 

                            // If on mobile, loop through $posts array again 

                            echo sprintf('<div id="mobile-stories">');


                            if( $posts && wpmd_is_phone()):

                                    // Loop through and create markers
                                    foreach( $posts as $post):
                                    setup_postdata($post);    


                                    if (get_post_thumbnail_id()) { 
                                        $thumb = get_post_thumbnail_id();
                                        $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
                                        $image = aq_resize( $img_url, 320, 200, true, true, true); //resize & crop the image
                                    } else {
                                        $image = '';
                                    }

                                    echo sprintf('<div id="post-%s"><h4>%s</h4><img src="%s" alt="image" /><p>%s</p><p class="owner-name">-- %s</p></div> <hr />', get_the_ID(), get_the_title(), $image, get_the_content(), get_field('owner_name'));
                                    endforeach;

                            endif;
                            echo sprintf('</div>');

                            ?>



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
