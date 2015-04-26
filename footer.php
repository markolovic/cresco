
<div class="footer">
	<div class="grid">
		<div class="slot-0-1">
			<h3>
				Latest Articles
			</h3>
			<?php query_posts('posts_per_page=8&cat=3'); ?>
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<li><a href="a<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile;?>
			<?php else : ?>
			<?php endif; wp_reset_query(); ?>
		</div>
		<div class="slot-2-3">
			<h3>
				Sitemap
			</h3>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
		<div class="slot-4-5">
			<h3>
				Contact
			</h3>
			<ul>
			    <li><a href="https://www.facebook.com/pages/Cresco-Sonitus-Media-Group/488929424578095?fref=ts" tar="blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/facebook.svg"></a></li>
			    <li><a href="https://twitter.com/CrescoSMG" tar="blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/twitter.svg" alt=""></a></li>
			    <li><a href="https://www.youtube.com/channel/UCGEmoPo7UC5p3LkmP4Lcl4A" tar="blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/youtube.svg" alt=""></a></li>
			    <li><a href="mailto:Cresco-smg@outlook.com"><img src="<?php bloginfo( 'template_url' ); ?>/img/mail.svg" alt=""></a></li>
			    <li><a href="tel:+4475 3888 3378"><img src="<?php bloginfo( 'template_url' ); ?>/img/phone.svg" alt=""></a></li>
			</ul>
		</div>
	</div>
</div>
			<!-- SCRIPTS -->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60468291-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/lazy.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>