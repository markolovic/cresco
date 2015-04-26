<?php
/*
Template Name: Article Archive
*/
?>

<?php include('header.php') ?>

		<!-- TOP HEADER -->
<div class="home-head">
	<div class="grid">
		<div class="row">
			<div class="slot-0-1-2-3">
				<div class="row">
					<h1>
						<img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="">
						Article Archive
					</h1>
				</div>
				<div class="row">
					<div class="slot-0-1-2">
						<input type="text" name="" value="" placeholder="SEARCH">
					</div>
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

<div class="art-feats">
	<?php query_posts('posts_per_page=0&cat=3'); ?>
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

<?php include('footer.php') ?>