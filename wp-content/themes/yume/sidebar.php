<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Yume
 */
?>
<div class="sidebar">
    <div class="fullwidth">
	    <?php if (strlen(of_get_option('sidebar_banner'))>0) { echo of_get_option('sidebar_banner'); } ?>
		<?php
		if (is_page()) { 
			$new_sidebar = get_post_meta( get_the_ID(), 'new_sidebar', true);
			if($new_sidebar==1){ $sidebar_select = 'widget-area-'.get_the_ID(); } else if($new_sidebar=='') { $sidebar_select = 'sidebar-widget-area'; } else { $sidebar_select = $new_sidebar; }
		} 
		else {
		    $sidebar_select = 'sidebar-widget-area';
		}
		?>
		<?php if ( is_active_sidebar($sidebar_select) ) : ?>
			<?php dynamic_sidebar($sidebar_select); ?>
		<?php else : ?>	
			<div class="post">
				<div class="topbarpost"><div class="fleft"><?php _e( 'Search', "yume" ); ?></div></div>
				<?php get_search_form(); ?>				
			</div>
			<div class="post">
				<div class="topbarpost"><div class="fleft"><?php _e( 'Recent Posts', "yume" ); ?></div></div>
				<ul>
					<?php wp_get_archives('type=postbypost&limit=10'); ?>
				</ul>
			</div>
			<div class="post">
				<div class="topbarpost"><div class="fleft"><?php _e( 'Pages', "yume" ); ?></div></div>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div>
			<div class="post">
				<div class="topbarpost"><div class="fleft"><?php _e( 'Tag Cloud', "yume" ); ?></div></div>
				 <ul>
					<?php wp_tag_cloud(); ?>
				</ul>
			</div>				
		<?php endif; ?>	
	</div>
</div>	