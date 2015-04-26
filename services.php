<?php
/*
Template Name: Services
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
						Our services
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
		<?php query_posts('posts_per_page=8&cat=4'); ?>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<!-- SERVICE STARTS -->
<div class="service">
	<div class="grid">
		<div class="row">
			<h2>
				<?php the_title(); ?>
			</h2>
		</div>
		<div class="row">
			<div class="slot-0-1-2">
				<img src="<?php the_field('image'); ?>">
			</div>
			<div class="slot-3-4-5">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
		<!-- SERVICE ENDS -->
	<?php endwhile;?>
	<?php else : ?>
	<?php endif; wp_reset_query(); ?>

<?php include('footer.php') ?>