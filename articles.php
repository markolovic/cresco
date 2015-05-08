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
  <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
  <?php $the_query = new WP_Query( 'cat=3&paged=' . $paged ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
  <nav class="pagination">
  <?php 
    pagination_bar( $the_query, $paged );
  ?>
  </nav>
  <?php wp_reset_postdata(); ?>
	<?php else : ?>
	<?php endif; ?>
</div>
		<!--  ARTICLE FEATURES ENDS -->

<?php include('footer.php') ?>
