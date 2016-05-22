<?php
/**
 * The template for displaying page.
 *
 * @package Yume
 */
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>
<div class="postbox">
	<div class="topbarpost">
		<div class="fleft"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></div>
	</div> 
	<div class="postcontent">
			 <ul class="singlecontent">
					<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></h2>
						<?php if( has_post_thumbnail() ) { echo get_the_post_thumbnail( $post->ID, 'featured'); }?>
						<p><?php the_content(); ?></p>
						<?php 
						wp_link_pages( array( 
							'before'            => '<div class="wp-pagenavi template_paginated">'.__( 'Pages:', 'yume' ),
							'after'             => '</div>',
							'link_before'       => '<span class="current">',
							'link_after'        => '</span>',
							'pagelink'          => '%',
							'echo'              => 1 
						) );
						?>
						<p><?php posts_nav_link(); ?></p>
						<p class="pagination_single">
							<span class="prev"><?php previous_post_link('%link'); ?></span>
							<span class="next"><?php next_post_link('%link'); ?></span>
						</p>
						<div class="clear"></div>
						<div id="comments">
								<?php comments_template(); ?>
						</div>	
					</li>								
			</ul>
	</div> 
</div> 
<?php endwhile; ?>
<?php endif; ?>				