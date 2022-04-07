<?php get_header();?>
              	
				
<section id="primary" class="site-content" style="margin-top:0px">

<div  class="middle-menu">
	<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
</div>

  	<div id="content" role="main">
	<div class"err">
					<img src="<?php bloginfo('template_url'); ?>/images/404.png" class="err" alt="404 error" />
	</div>
	</div>
</section>	

<?php get_footer();?>


