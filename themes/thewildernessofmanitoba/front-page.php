<?php
/**
* The main template file.
*
* @package The_Wilderness_Of_Manitoba
*/

get_header(); ?>

<main id="main" class="site-main" role="main">
	<div class="collumn"><!-- Column 1 -->
		<h3>The<br><!-- Wilderness of Manitoba -->
			Wilderness<br>
			of Manitoba</h3>
			<div class="content">
				<?php echo CFS()->get( 'the_wilderness_of_manitoba' ); ?>
			</div>
			<div class="panel"><!-- Videos -->
				<div class="title">
					<h3>Videos</h3>
				</div>
				<div class="content">
					<?php echo CFS()->get( 'videos' ); ?>
				</div>
			</div>
		</div>
		<div class="collumn"><!-- Collumn 2 -->
			<div class="title"><!-- Music -->
				<h3>Music</h3>
			</div>
			<div class="content">
				<iframe width="100%" height="260" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/289580674%3Fsecret_token%3Ds-Jwjio&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		<div class="panel"><!-- Press -->
			<div class="title">
				<h3>Press</h3>
			</div>
			<div class="content">
				<?php echo CFS()->get( 'press' ); ?>
			</div>
		</div>
		<div class="panel"><!-- Highlights -->
			<div class="title">
				<h3>Highlights</h3>
			</div>
			<div class="content">
				<?php echo CFS()->get( 'highlights' ); ?>
			</div>
		</div>
		<div class="panel"><!-- Photos -->
			<div class="title">
				<h3>Photos</h3>
			</div>
			<div class="content">
				<p>Click to download high resolution image:</p>
				<div class="photos">
					<?php echo CFS()->get( 'photos' ); ?>
				</div>
			</div>
		</div>
	</div>
	<aside>
		<div class="title"><!-- Discography -->
			<h3>Discography</h3>
		</div>
		<div class="content">
			<?php echo CFS()->get( 'discography' ); ?>
		</div>
		<div class="title"><!-- Contact -->
			<h3>Contact</h3>
		</div>
		<div class="content">
			<?php echo CFS()->get( 'contact' ); ?>
		</div>
	</aside>
</main><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
