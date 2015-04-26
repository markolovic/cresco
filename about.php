<?php
/*
Template Name: About Us
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
						About Us
					</h1>
				</div>
				<div class="row">
					<ul>
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

<?php query_posts('posts_per_page=0&cat=2'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
		<!-- ABOUT PARAGRAPHS START -->

<div class="ab-p">
	<div class="grid">
		<div class="row">
			<div class="slot-0-1-2-3-4">
				<h2>
					<?php the_title(); ?>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="slot-0">
				&nbsp;
			</div>
			<div class="slot-1-2-3-4">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

		<!-- ABOUT P ENDS -->
<?php endwhile;?>
	<?php else : ?>
	<?php endif; wp_reset_query(); ?>
		<!-- STAFF STARTS -->

<div class="staff">
	<div class="grid">
	<?php query_posts('posts_per_page=0&cat=5'); ?>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
				<!-- STAFF PERSON STARTS -->
		<div class="row">
			<div class="slot-0">
				<div class="circle">
					<img src="<?php the_field('staff_img'); ?>" alt="">
				</div>
			</div>
			<div class="slot-1-2-3-4">
				<h2>
					<?php the_title(); ?>
				</h2>
				<li><?php the_field('staff-title'); ?></li>
				<?php the_content(); ?>
			</div>
		</div>
				<!-- STAFF PERSON ENDS -->
	<?php endwhile;?>
	<?php else : ?>
	<?php endif; wp_reset_query(); ?>
				
	</div>
</div>

		<!-- STAFF ENDS -->


<?php include('footer.php') ?>