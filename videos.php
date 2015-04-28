<?php
/*
Template Name: Video Archive
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
						Video Archive
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

<div class="feat-vids">
	<div class="grid">
  <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
  <?php $the_query = new WP_Query( 'posts_per_page=5&cat=7&paged=' . $paged ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<!-- VID STARTS -->
		<div class="vid">
			<div class="row">
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
		</div>
		<!-- VID ENDS -->
		<?php endwhile;?>
    <nav class="pagination">
      <?php pagination_bar( $the_query, $paged ); ?>
    </nav>
		<?php else : ?>
		<?php endif; wp_reset_query(); ?>
	</div>
</div>

<?include('footer.php') ?>
