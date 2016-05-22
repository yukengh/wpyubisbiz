<?php 
/**
 * Template Name: Blog: Left Sidebar
 * 
 * @package Yume 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp left_sidebar">
					<div class="pagecontent">
						<div class="fullwidth">
							<?php get_template_part('content-post'); ?> 
						</div>
					</div>
                    <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>