<?php
/*
Template Name: Single Page
*/
?>


<?php include('header.php') ?>

		<!-- TOP HEADER -->
<div class="single-head">
	<div class="head-img">
		<img src="<?php the_field('thumbnail_image'); ?>" alt="">
	</div>
	<div class="home-head">
		<div class="grid">
			<div class="row">
				<div class="slot-0-1-2-3">
					<div class="row">
						<h1>
							<?php the_title(); ?>
						</h1>
					</div>
					<div class="row">
						<div class="slot-0-1-2">
							<ul>
								<li><?php previous_post_link('%link', 'Previous article', TRUE); ?></li>
							    <li><?php next_post_link( '%link', 'Next article', TRUE ); ?></li>
							</ul>
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
</div>
		<!-- TOP HEADER ENDS -->

<div class="single-p">
	<div class="grid">
		<div class="slot-0">
			&nbsp;
		</div>
		<div class="slot-1-2-3-4">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<h6>Written by <?php the_author(); ?></h6>
		<?php endwhile;?>
		<?php else : ?>
		<?php endif; wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php include('footer.php') ?>