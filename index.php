<!DOCTYPE html>
<html>
<?php include('header.php') ?>
		<!-- TOP HEADER -->
<div class="home-head">
	<div class="grid">
		<div class="row">
			<div class="slot-0-1-2-3">
				<div class="row">
					<h1>
						<img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="">
						Cresco Sonitus Media Group
					</h1>
				</div>
				<div class="row">
					<ul>
					    <li>Featured Articles</li>
					    <li>Featured Video</li>
					</ul>
				</div>
			</div>
			<div class="slot-4-5">
				<div class="menu">
					<div class="row">
						<h2>
							Menu
						</h2>
					</div>
					<div class="row">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
		<!-- TOP HEADER ENDS -->

		<!-- ARTICLE FEATURES -->
<div class="art-feats">
	<?php query_posts('posts_per_page=8&cat=3'); ?>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<a href="<?php the_permalink(); ?>">
	<div class="art">
		<img src="<?php the_field('thumbnail_image'); ?>">
		<div class="info">
			<h2>
				<?php the_title(); ?>
			</h2>
			<?php the_excerpt(); ?>
		</div>
	</div>
	</a>
	<?php endwhile;?>
	<?php else : ?>
	<?php endif; wp_reset_query(); ?>
</div>
		<!--  ARTICLE FEATURES ENDS -->

<div class="feat-vids">
	<div class="grid">
		<div class="row">
			<div class="slot-0-1-2-3-4-5">
				<h1>
					Featured Video
				</h1>
			</div>
		</div>
		<div class="row">
		<?php query_posts('posts_per_page=1&cat=7'); ?>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="vid">
				<div class="slot-0-1-2">
					<iframe src="//www.youtube.com/embed/<?php the_field('embed-link'); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="slot-3-4-5">
					<div class="row">
						<h2>
							<?php the_title(); ?>
						</h2>
					</div>
					<div class="row">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<?php else : ?>
		<?php endif; wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php include('footer.php') ?>
</body>
</html>