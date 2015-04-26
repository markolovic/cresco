<?php
/*
Template Name: Contact Us
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
						Contact Us
					</h1>
				</div>
				<div class="row">
					<div class="slot-0-1-2">

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

<div class="contact">
	<div class="grid">
		<div class="row cont-type">
			<div class="slot-0">
				&nbsp;
			</div>
			<div class="slot-1-2-3-4-5">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/mail.svg" alt="">
				<span><a href="mailto:info@cresco-smg.com">info@cresco-smg.com</a></span>
			</div>
		</div>
		<div class="row cont-type">
			<div class="slot-0">
				&nbsp;
			</div>
			<div class="slot-1-2-3-4-5">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/phone.svg" alt="">
				<span><a href="tel:+4475 3888 3378">+4475 3888 3378</a></span>
			</div> 
		</div>
		<div class="row cont-type">
			<div class="slot-0">
				&nbsp;
			</div>
			<div class="slot-1-2-3-4-5">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/facebook.svg" alt="">
				<span>/<a href="https://www.facebook.com/pages/Cresco-Sonitus-Media-Group/488929424578095?fref=ts">CSMG Facebook Page</a></span>
			</div>
		</div>
		<div class="row cont-type">
			<div class="slot-0">
				&nbsp;
			</div>
			<div class="slot-1-2-3-4-5">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/twitter.svg" alt="">
				<span><a href="https://twitter.com/CrescoSMG">@CSMG</a></span>
			</div>
		</div>
		<div class="row cont-type">
			<div class="slot-0">
				&nbsp;
			</div>
			<div class="slot-1-2-3-4-5">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/youtube.svg" alt="">
				<span><a href="https://www.youtube.com/channel/UCGEmoPo7UC5p3LkmP4Lcl4A">Cresco Sonitus Media Group</a></span>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php') ?>