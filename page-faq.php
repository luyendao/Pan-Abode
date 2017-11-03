<?php
/*
 * Template Name: FAQ
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

                            <h4>Quick Links:</h4>

                            <select onchange="location = this.options[this.selectedIndex].value;">
                                <option value="#additions">Additions</option>
                                <option value="#assembly">Assembly</option>
                                <option value="#building">Building Codes</option>
                                <option value="#care">Care and Maintenance</option>
                                <option value="#commercial">Commercial and Government Sales</option>
                                <option value="#dealers">Dealers and Distributors</option>
                                <option value="#design">Design and Planning</option>
                                <option value="#electrical">Electrical and Heating</option>
                                <option value="#energy">Energy Efficiency</option>
                                <option value="#garage">Garage Packages</option>
                                <option value="#historical">Historical Records</option>
                                <option value="#insurance">Insurance Replacement</option>
                                <option value="#log">Log Shrinkage</option>
                                <option value="#package">Package Contents</option>
                                <option value="#insurance">Insurance Replacement</option>
                                <option value="#pricing">Pricing</option>
                                <option value="#renovations">Renovations</option>
                                <option value="#replacement">Replacement Materials</option>
                                <option value="#shipping">Shipping and Delivery</option>
                                <option value="#warranty">Warranty</option>
                            </select>

<!--
                            <ul>
                                <li><a href="#additions">Additions</a></li>
                                <li><a href="#assembly">Assembly</a></li>
                                <li><a href="#building">Building Codes</a></li>
                                <li><a href="#care">Care and Maintenance</a></li>
                                <li><a href="#commercial">Commercial and Government Sales</a></li>
                                <li><a href="#dealers">Dealers and Distributors</a></li>
                                <li><a href="#design">Design and Planning</a></li>
                                <li><a href="#electrical">Electrical and Heating</a></li>
                                <li><a href="#energy">Energy Efficiency</a></li>
                                <li><a href="#garage">Garage Packages</a></li>
                                <li><a href="#historical">Historical Records</a></li>
                                <li><a href="#insurance">Insurance Replacement</a></li>
                                <li><a href="#log">Log Shrinkage</a></li>
                                <li><a href="#package">Package Contents</a></li>
                                <li><a href="#insurance">Insurance Replacement</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#renovations">Renovations</a></li>
                                <li><a href="#replacement">Replacement Materials</a></li>
                                <li><a href="#shipping">Shipping and Delivery</a></li>
                                <li><a href="#warranty">Warranty</a></li>
                                </ul>

-->
                            <?php the_content(); ?>
					
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
