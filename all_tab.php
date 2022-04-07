<?php
/*
Template Name: all_vkladka
*/
?>

<?php get_header();?>
<script>window.onload = function() {
	for (var a = document.querySelectorAll(".rmenu"), el, i = 0; i < a.length; i++)
	    a[i].addEventListener("click", function (d) {
	    d++;
	    return function (b) {
	        var c = document.getElementById("menu_" + d);
	        el && (el.style.display = "none");
	        c != el ? (c.style.display = "block",  el = c) : ( el = null);
	        b = b || window.event;
        b.preventDefault ? b.preventDefault() : b.returnValue = !1
	    }
	}(i));  }
	 
	</script>
	
	<div class="head-menu2">
	<?php wp_nav_menu( array( 'theme_location' => 'secondary','fallback_cb'=> '' ) ); ?>
	<div class="wt"></div>
    </div>

<div id="abiturient" class="content-main abi">
 
 
 <div class="content">
 <div class="menu_page">
   <div class="rubric">
<h3><?the_title();?></h3>
</div>
   
</div>
<br>
 


	<div class="tabs">
   
	<?
global $post;
	
	//запрашиваем дочерние страницы
	$args = array(
		'post_parent' => $post->ID,
		'post_type' => 'page'
	);
	$subpages = new WP_query($args);
	
	// создаем выходные данные
	if ($subpages->have_posts()) :
	?> <ul><?
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
		 <div><div><?the_content();?></div><div><?get_post_meta($post->ID, 'contacts', true)?></div></div>
		<?
		endwhile;?>
	 </div>
<?	endif;
	
	// сбрасываем запрос
	wp_reset_postdata();
	
	?>	
	          
</div> 


		</div><!-- #content -->
		 
		
		

	
	
	</div>






<?php get_footer();?>