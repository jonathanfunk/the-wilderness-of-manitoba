<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package The_Wilderness_Of_Manitoba
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
