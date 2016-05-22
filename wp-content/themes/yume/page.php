<?php
/**
 * The template for displaying all pages.
 *
 * @package Yume
 */
 get_header(); ?>
      <div id="content">
			<div class="center">
				<div class="columnwrapp <?php do_action( 'yume_display_ps' ); ?>">
					<div class="pagecontent innerpage">
						<div class="fullwidth">
								<?php get_template_part( 'content-page'); ?> 
						</div> 
					</div> 
                   <?php get_sidebar(); ?>
				</div>
			</div>
      </div>
<?php get_footer(); ?>