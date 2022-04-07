<?php
/*** A Simple Category Template*/
 
get_header(); ?> 

<section id="primary" class="site-content">

	<div  class="middle-menu">
		<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
	</div>
	
<div id="content" role="main">
 

<?php if ( have_posts() ) : ?>
 
<div class="archive-header p2">
<h1 class="archive-title">Позначка: <?php single_cat_title(); ?> </h1>
 

<?php if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</div>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post();?>






				<div class="post-main studrada-novini category" style="width:100%">
                	<h3 style="background:transparent;"><a style="background:transparent; font-size:100%" href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					
					<div class="m_info_arhiv ">
<span><i class="fa fa-calendar"></i> <?php echo get_the_date('j-n-Y'); ?> </span>&nbsp;&nbsp;
						 	<?php the_category(' , ', 'multiple'); ?>
						&nbsp;&nbsp;<span ><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp; </span>
							</div>  
							
							
                		<div class="post"  style="background:transparent;">
							<div class="postcnt">
														<a href="<?php the_permalink(); ?>">
							
							<?	if ( has_post_thumbnail() ) {
	 the_post_thumbnail('middle'); 
} else {?>
<img src="<?php bloginfo('template_url'); ?>/images/logo_news.jpg" alt="ДонНТУ" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/>
<?}?>
							
							</a>
							
							
							<div class="ex"><?php the_excerpt(); ?>
							</div>
        					</div>
							<div class="postall">
							<h2 style="float:left"><a href="<?php the_permalink();?>">Читати далі</a></h2>
						
							</div>
							
							
							
                			
                </div></div>

<div class="clearfix"></div> 
<?php endwhile; // End Loop



 endif; ?>
		        
      

</div>
</section>


<?php get_footer();?>
