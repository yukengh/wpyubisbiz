<?php 
/**
 * Template Name: Page: Sitemap
 * 
 * @package Yume 
 */
get_header(); ?>
      <div id="content">
			<div class="center">
				<div class="columnwrapp  <?php do_action( 'yume_display_ps' ); ?>">
					<div class="pagecontent innerpage">
						<div class="fullwidth">
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="postbox">
									<div class="topbarpost">
										<div class="fleft"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></div>
									</div> 
									<div class="postcontent">
									<?php if(get_post_meta($post->ID, 'display_title_page', true)!=1) { ?>
											<h2><?php the_title(); ?></h2>
									<?php } ?>
											<h3><?php _e( 'Pages', "yume"); ?></h3>
											<ul><?php wp_list_pages('title_li='); ?></ul>
											<h3><?php _e( 'Posts', "yume" ); ?></h3>
											<ul>
												<?php
													$lastposts = get_posts('numberposts=-1');
													foreach($lastposts as $post) :
												?>
												<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
												<?php endforeach; ?>
											</ul>
											<h3><?php _e( 'Categories', "yume" ); ?></h3>
											<ul><?php wp_list_categories('title_li='); ?></ul>
									</div>
								</div> 
							<?php endwhile; ?>
							<?php endif; ?>
						</div> 
					</div> 
                   <?php get_sidebar(); ?>
				</div>
			</div>
      </div>
<?php get_footer(); ?>