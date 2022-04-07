<?php
  $post = $wp_query->post;
  //print_r($post);
  $par=$post->post_parent; 
	$ids = get_post_ancestors( $post->id ); //print_r($ids);
$idr  = array_pop( $ids ); //print $id;

//$pag=$post->page_id;
// echo("Родитель".$pag);  
 // echo("Родитель". $par); 
  /*if ($par==577)*/
  
/*if($par==690 or $par==5535)
   	{ get_header('old'); }

else{get_header('test1'); }*/

get_header('');

if($par==6801 or $par==6819 or $par==6836 or $par==6847 or $par==7202 or $par==7205 or $par==8088 or $par==17825 or $par==20423)
{?>
	 
<section id="primary" class="site-content" style="margin-top:0px"> 
<div  class="middle-menu">
	<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
</div>
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
	<p id="breadcrumbs">','</p>
	');
	}
	?>

<div id="content" role="main" class="two-column responsive-reversed md">

	<div class="left">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<h3 style="background:transparent; margin-top: 20px; margin-bottom: 20px"><?php the_title(); ?></h3>
			<div class="post-content"><?php the_content(); ?></div>
	    <?php endwhile; endif; ?>
	</div>
	<div class="right">
		
<div class="clearfix"></div>
	<?//echo do_shortcode('[pagelist child_of="6801" class="menu" sort_order="ask" sort_column="post_date" depth="1"]');?>
		<?dynamic_sidebar('md');?>	 	
	</div>
</div>
</section>

	
	  
<div class="clearfix"></div>
  <?}


elseif (is_page('1879') or $par==1879 or is_page('2890') || $par==2890 or $par==690  or $par==5535 or $par==3796 or is_page('37209') or $par==37209)
 {?>



<section id="primary" class="site-content" style="margin-top:0px"> <div  class="middle-menu">
	<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div></div>
		
	<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
 <div id="content" role="main" class="two-column small-left">
 
 	<div class="left">
	<?if ($par==690) 
	{	
	 wp_nav_menu( array( 	'theme_location'  => '','menu' => 'Бібліотека','fallback_cb'=> '','depth'=>3, 'menu_class'=>'nav-menu' ) ); 
	}else {dynamic_sidebar('index-95');}
	if (is_page('1879') or $par==1879)
	{
 	
		echo do_shortcode('[pagelist child_of="1879" class="menu" sort_order="desk" sort_column="post_date" depth="1" ]');
	}
	
	
	
	?>
 		</div>
 <div class="right"> 

<?
/*Рішення вченої ради*/
if (is_page('6684'))
	{?>
		<div class="tabs">
<?global $post;	
	//запрашиваем дочерние страницы
	$args = array(
		'post_parent' => 6684,
		'post_type' => 'page'
	);
	$subpages = new WP_query($args);	
	// создаем выходные данные
	if ($subpages->have_posts()) :
	?> 
	<ul><?
		while ($subpages->have_posts()) : $subpages->the_post();
		
		 $title_short = get_post_custom_values('title');
	
		if (is_array($title_short)) {
							$title_short = implode($title_short);
						}
						
						
			//echo $title_short;
			
					
		$short = get_post_custom_values( 'short_name' ) ;
	
		?>										
		<li id="<?echo $short[0]?>"><a name="<?echo $short[0]?>"> <?if (!empty($title_short)): echo $title_short; 
		
		else: the_title(); endif;?>
		</a>
		</li>
		<?
		endwhile;?>				
	</ul>
	<div class="tab_all">
	<?while ($subpages->have_posts()) : $subpages->the_post();		
		?>
		 <div>
		 	<div><?the_content();?></div>
		 	<div><?get_post_meta($post->ID, 'contacts', true)?></div>
		 </div>
		<?
		endwhile;?>
	</div>
<?	endif;
	
	// сбрасываем запрос
	wp_reset_postdata();
	
	?>		          
</div> 
<?	}
?>	

 
<?if($par==3796 or is_page('3796')) {?>
<h3 style="background:transparent; margin-top: 20px; margin-bottom: 20px">Новинки фонду</h3>

<div class="tabs">
<?global $post;	
			//запрашиваем дочерние страницы
			$args = array(
				'post_parent' => '3796',
				'post_type' => 'page'
			);
			$subpages = new WP_query($args);	
	//		print_r($subpages);
			// создаем выходные данные
			if ($subpages->have_posts()) :
			?> 
				<ul><?
				while ($subpages->have_posts()) : $subpages->the_post();			
			 	$title_short = get_post_custom_values('title');		
				if (is_array($title_short)) { $title_short = implode($title_short);}
				$short = get_post_custom_values( 'short_name' ) ;			?>										
					<li id="<?echo $short[0]?>"><a name="<?echo $short[0]?>"> 
						<?if (!empty($title_short)): echo $title_short; 			
						else: the_title(); endif;?>	</a>
					</li>
				<?
				endwhile;?>				
				</ul>
				<div class="tab_all">
					<?while ($subpages->have_posts()) : $subpages->the_post();?>
					 <div>
					 	<div><? the_content();?></div>
					 	<div><?//get_post_meta($post->ID, 'contacts', true)?></div>
					 </div>
					<?endwhile;?>
				</div>
				<?endif;		
		// сбрасываем запрос
		wp_reset_postdata();		
		?>		          
	</div> 

	
<?}else{?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

		<h3 style="background:transparent; margin-top: 20px; margin-bottom: 20px"><?php the_title(); ?></h3>
		
		<div class="post-content"><? the_content();?></div><?  endwhile; endif; }?>
   

 	
</div>

 </div>
</section>
<div class="clearfix"></div>



<?  }elseif (is_page('18929')or is_page('41809')) { 
?>
<div class="content-main">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div class="post-content"><?php the_content(); ?></div>
<?php endwhile; endif; ?>
<?php //wp_reset_query(); ?> 
</div><?	
}elseif($par==39769 or $idr==39769 or is_page('39769')) {
//	print_r($ids);or is_page('48277')
?>

<section id="primary" class="site-content" style="margin-top:0px">
<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('
		<p id="breadcrumbs">','</p>
		');
		}
		?>
	<div id="content" role="main" class="" >
		
	<div class="two-column small-right">
		<div class="left">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<div class="post-content">
				<?global $post;?>			
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="right">
			<?dynamic_sidebar('quality');?> 
		</div>
	</div>
	</div>	
</section>


<?}
elseif (is_page('7369')or $par==7369 ) 
{?>

<section id="primary" class="site-content" style="margin-top:0px"> 
<div id="content" role="main" class="two-column small-left">
<div class="left">
<ul class="page-list menu"  ><li class="page_item "><a href="<?php echo get_page_link( 7369 ); ?>">Університет сьогодні</a></li></ul>
<?
echo do_shortcode('[pagelist child_of="7369" class="menu" sort_order="ask" sort_column="post_date" ]');
?>
</div>
<div class="right">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div class="post-content">
<h3 style="background:transparent; margin-top: 20px; margin-bottom: 20px"><?php the_title(); ?></h3>
<?global $post;?>
<?php the_content(); ?>
</div>
<?php endwhile; endif; ?> 
</div>
</div>
</div>
</section>
 

	
<?}


else {?>
<section id="primary" class="site-content" style="margin-top:0px">

<div  class="middle-menu">
	<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
</div>
<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('
		<p id="breadcrumbs">','</p>
		');
		}
		?>
  	<div id="content" role="main">
	
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		
		<div class="post-content">
		<?php the_content(); ?>
		</div>
    <?php endwhile; endif; ?>
	
	</div>
</section>	 
 <? }?>
  
  






  
<? get_footer('');?>
