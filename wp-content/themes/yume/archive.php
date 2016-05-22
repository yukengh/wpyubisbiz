<?php
/**
 * The template for displaying archive
 *
 *
 * @package Yume
 */
 get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp <?php do_action( 'yume_display_ps' ); ?>">
					<div class="pagecontent">
						<div class="fullwidth">
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
									<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="topbarpost">
												<div class="fleft"><i><?php _e( 'in', 'yume' ); ?></i> <?php the_category(', '); ?></div>
												<div class="fright"><span class="postdate"><?php the_time( get_option( 'date_format' ) ); ?></span></div>
										</div>
										<div class="postcontent">
												<?php if( has_post_thumbnail() ) { ?>
												<div class="thumb thumbleft">
														<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail'); ?></a>
												</div>
												<?php } ?>
												<h2><a href="<?php the_permalink() ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></a></h2>
												<p><?php the_excerpt(); ?></p>
										</div>
										<div class="postfooter">
											<div class="fleft">
												<span class="commentcount"><?php comments_popup_link('<span class="icon comments"></span> No Comments', '<span class="icon comments"></span> 1 Comment', '<span class="icon comments"></span> % Comments', 'comment-link'); ?></span>
											</div>
											<div class="fright"><a class="readmore" href="<?php the_permalink() ?>"><?php _e( 'Read More &#187', 'yume' ); ?></a></div>
										</div>
									</div>
							<?php endwhile; ?>
								<p class="pagination">
									<span class="prev"><?php next_posts_link(__('Previous Posts', 'yume')) ?></span>
									<span class="next"><?php previous_posts_link(__('Next posts', 'yume')) ?></span>
								</p>
							<?php else : ?>
								<h2 class="center"><?php _e( 'Not found', 'yume' ); ?></h2>
								<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'yume' ); ?></p>
							<?php endif; ?>	
						</div>
					</div>
                    <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>