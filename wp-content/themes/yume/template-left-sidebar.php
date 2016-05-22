<?php 
/**
 * Template Name: Page: Left Sidebar
 * 
 * @package Yume 
 */
get_header(); ?>
      <div id="content">
			<div class="center">
				<div class="columnwrapp left_sidebar">
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