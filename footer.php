		<footer role="contentinfo">
		
			<div id="inner-footer" class="clearfix">
				<div id="widget-footer" class="clearfix container">

                <div class="col-sm-11 col-sm-offset-1">

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
					<div class="col-xs-12 col-sm-3"><?php dynamic_sidebar('Footer 1'); ?></div>
					<?php endif; ?>
					<div class="col-xs-12 col-sm-8 pull-right div-wrap">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
						<div class="col-xs-4"><?php dynamic_sidebar('Footer 2'); ?></div>
						<?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
						<div class="col-xs-4"><?php dynamic_sidebar('Footer 3'); ?></div>
						<?php endif; ?>
					</div>
				
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright') ) : ?>
			        <?php endif; ?>
			        
				</div>

            </div>

			</div> <!-- end #inner-footer -->
			
			

		</footer> <!-- end footer -->
				
		<div class="share-story-widget"><a href="<?php echo site_url(); ?>/share">Own a Pan-Abode? Share your story.</a></div>
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
