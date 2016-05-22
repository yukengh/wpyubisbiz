<?php 
/**
 * Template Name: Blog: No Sidebar
 * 
 * @package Yume 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp nosidebar">
					<div class="pagecontent">
						<div class="fullwidth">
							<?php get_template_part('content-post'); ?> 
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>