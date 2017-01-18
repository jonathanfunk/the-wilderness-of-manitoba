<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="panel"><!-- Discography -->
		<div class="title">
			<h3>Discography</h3>
		</div>
		<div class="content">
		</div>
	</div>
	<div class="panel"><!-- Contact -->
		<div class="title">
			<h3>Contact</h3>
		</div>
		<div class="content">
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
