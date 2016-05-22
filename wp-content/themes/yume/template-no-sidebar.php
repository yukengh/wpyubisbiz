<?php 
/**
 * Template Name: Page: No Sidebar
 * 
 * @package Yume 
 */
get_header(); ?>
      <div id="content">
			<div class="center">
				<div class="columnwrapp nosidebar">
					<div class="pagecontent innerpage">
						<div class="fullwidth">
							<?php get_template_part( 'content-page'); ?>
						</div> 
					</div> 
				</div>
			</div>
      </div>
<?php get_footer(); ?>