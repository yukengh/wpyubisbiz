<?php
/**
 * The template for displaying the footer.
 *
 * @package Yume
 */
?>
		<div id="footer">
			<div class="center columnwrapp">
				<div class="column5">
					<?php if (has_nav_menu('footer1')) { ?>
							<h4><?php echo esc_attr(yume_get_name_menu( 'footer1' )); ?></h4>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer1', 'items_wrap'  => '<ul class="nav">%3$s</ul>'  ) ); ?>
					<?php } ?>
				</div>
				<div class="column5">
					<?php if (has_nav_menu('footer2')) { ?>
							<h4><?php echo esc_attr(yume_get_name_menu( 'footer2' )); ?></h4>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer2', 'items_wrap'  => '<ul class="nav">%3$s</ul>'  ) ); ?>
					<?php } ?>
				</div>
				<div class="column5">
					<?php if (has_nav_menu('footer3')) { ?>
							<h4><?php echo esc_attr(yume_get_name_menu( 'footer3' )); ?></h4>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer3', 'items_wrap'  => '<ul class="nav">%3$s</ul>'  ) ); ?>
					<?php } ?>
				</div> 
				<div class="column5">
					<?php if (has_nav_menu('footer4')) { ?>
							<h4><?php echo esc_attr(yume_get_name_menu( 'footer4' )); ?></h4>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer4', 'items_wrap'  => '<ul class="nav">%3$s</ul>'  ) ); ?>
					<?php } ?>
				</div>
				<div class="column5">
					<?php if (has_nav_menu('footer5')) { ?>
							<h4><?php echo esc_attr(yume_get_name_menu( 'footer5' )); ?></h4>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer5', 'items_wrap'  => '<ul class="nav">%3$s</ul>'  ) ); ?>
					<?php } ?>
				</div>
			</div>
			<div class="gotopwrapp">
				<div class="center columnwrapp">
					<div class="fullwidth">
					    <p class="footer_text"><?php  echo esc_html(of_get_option('footer_text_left')); ?></p>
						<p class="footer_text textright"><?php do_action( 'yume_display_credits' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>		
</body>
</html>