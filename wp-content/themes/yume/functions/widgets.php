<?php
if ( ! function_exists( 'yume_widgets_init' ) ) :
function yume_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar Widget Area', "yume"),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area', "yume"),
		'before_widget' => '<div class="post" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="topbarpost"><div class="fleft">',
		'after_title' => '</div></div>',
	));		
	$list_pages = yume_get_list_pages();
	while ( $list_pages->have_posts() ) {
		$list_pages->the_post();
		$new_sidebar = get_post_meta( get_the_ID(), 'new_sidebar', true);
		if($new_sidebar==1) {
			register_sidebar(array(
				'name' => __( 'Sidebar for Page '.get_the_title(), "yume"),
				'id' => 'widget-area-'.get_the_ID(),
				'description' => __( 'The pages widget area', "yume"),
				'before_widget' => '<div class="post" id="%1$s">',
				'after_widget' => '</div>',
				'before_title' => '<div class="topbarpost"><div class="fleft">',
				'after_title' => '</div></div>',
			));		
		}
	}
	wp_reset_postdata(); 	
}
endif;
add_action( 'widgets_init', 'yume_widgets_init' );
?>