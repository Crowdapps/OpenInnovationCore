<header id="masthead" class="container main-gradient gradient clear ">
	<div class="wrapper">
		<hgroup class="site-title fl">
			<h1 id="site-title" class="custom-header-image">
				<a id="the-title" href="<?php echo site_url(); ?>"> <p><?php bloginfo( 'name' ); ?></p> </a>
			</h1>
		</hgroup>

		<div width="110px" height="107px" class="header-img">
			<?php if( get_option('platform_logo') !== '' ): echo '<div id="the-img-logo"><img src="'.get_option('platform_logo').'" /></div>'; endif; ?>
			<div id="the-logo"><?php echo get_option('the_head_txts'); ?></div>
		</div>

		<?php wp_nav_menu( array(
				'container' => 'nav',
				'theme_location' => 'header',
				'menu_id' => 'menu-header',
				'container_class' => 'menu fl',
				'fallback_cb' => false
		) ); ?>

		<?php if(is_user_logged_in()){ do_action( 'ideax_nav_menu_profile' ); } ?>

	</div><!-- /.wrapper -->
</header><!-- /#mathead -->
