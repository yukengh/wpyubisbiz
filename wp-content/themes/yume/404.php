<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 *
 * @package Yume
 */
get_header(); ?>
      <div id="content">
			<div class="center">
				<div class="columnwrapp  <?php do_action( 'yume_display_ps' ); ?>">
					<div class="pagecontent innerpage">
						<div class="fullwidth">
							<div class="postbox">
								<div class="topbarpost">
										<div class="fleft"><?php _e( 'Not found', 'yume' ); ?></div>
								</div> 
								<div class="postcontent">
										<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'yume' ); ?></p>	
								</div> 
							</div> 
						</div> 
					</div> 
                   <?php get_sidebar(); ?>
				</div>
			</div>
      </div>
<?php get_footer(); ?>