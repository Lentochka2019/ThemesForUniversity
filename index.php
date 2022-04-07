<?php get_header();?>
<section id="primary" class="site-content" style="margin-top:0px">

<div  class="middle-menu">
	<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
</div>

  	<div id="content" role="main">
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<div class="m_info_arhiv">
					<span><i class="fa fa-calendar"></i> <?php echo get_the_date('j-n-Y'); ?></span> &nbsp;&nbsp; <?php the_category(' , ', 'multiple'); ?> &nbsp;&nbsp;<span><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp;</span>
				</div>
		<p style="background:transparent; margin-top: 20px; margin-bottom: 20px"><a href="<?echo the_permalink();?>"><?php the_title(); ?></a></p>
		
		<?php // the_content(); ?>
    <?php endwhile; endif; ?>
	</div>
</section>	 
<?php get_footer();?>