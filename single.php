<?php get_header();?>
<?php setPostViews(get_the_ID()); ?>


<section id="primary" class="site-content clearfix">
<div  class="middle-menu">
	<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
</div>

<?$category = get_the_category(); 

if(isset($category, $category[0])) {
$cat=$category[0]->cat_ID;
}

?>

<?if($cat==98 or $cat==323) 
{?>
		<?$currentLang = pll_current_language('slug');
			if ($currentLang == 'uk'){?>
			<p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="https://donntu.edu.ua/" rel="v:url" property="v:title">ДонНТУ</a> » <span rel="v:child" typeof="v:Breadcrumb"><a href="https://donntu.edu.ua/international" rel="v:url" property="v:title">Міжнародні зв'язки</a> » <span class="breadcrumb_last"><?the_title();?></span></span></span></span></p>
				
				<?}
			elseif ($currentLang == 'en'){?>
			<p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="https://donntu.edu.ua/en/donetsk-national-technical-university" rel="v:url" property="v:title">DonNTU</a> » <span rel="v:child" typeof="v:Breadcrumb"><a href="https://donntu.edu.ua/en/international-cooperation" rel="v:url" property="v:title"> International Cooperation</a> » <span class="breadcrumb_last"><?the_title();?></span></span></span></span></p>
			<?}?>

		<div id="content" role="main" class="two-column md sg">
		<div class="left">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<h3 style="background:transparent; margin-top: 20px; margin-bottom: 20px"><?php the_title(); ?></h3>
				<div style="margin:20px 0; font-size: 14px!important">
				<span><i class="fa fa-calendar"></i> <?php echo get_the_date('j-n-Y'); ?> </span>&nbsp;&nbsp;
				<?php the_category(' , ', 'multiple'); ?>&nbsp;&nbsp;<span ><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp; </span>
			</div>
			<div class="clearfix"></div>
				<?php the_content(); ?>
				<?if( get_the_tag_list() ){
			echo get_the_tag_list('<p class="tag"><i class="fas fa-tags"></i> ',', ','</p>');
		}
		?>
		<?
		if ($currentLang == 'ru'){		
			echo '<h2><a href="javascript:history.go(-1)">Вернуться</a></h2>';
		} elseif ($currentLang == 'uk'){	
			echo '<h2><a href="javascript:history.go(-1)">Повернутися</a></h2>';
		}
		elseif ($currentLang == 'en'){	
			echo '<h2><a href="javascript:history.go(-1)">Return</a></h2>';
		}
		?>	
			<?php endwhile; endif; ?>
			    
		</div>
		<div class="right">
			<?dynamic_sidebar('md');?>
			
		</div>

		</div>

		<?
}
elseif($cat==551)
{?>
<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('
		<p id="breadcrumbs">','</p>
		');
		}
		?>

		<div id="content" role="main" class="two-column ">
		<div class="left">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<h3 style="background:transparent; margin-top: 20px; margin-bottom: 20px"><?php the_title(); ?></h3>
				<div style="margin:20px 0; font-size: 14px!important">
				<span><i class="fa fa-calendar"></i> <?php echo get_the_date('j-n-Y'); ?> </span>&nbsp;&nbsp;
				<?php the_category(' , ', 'multiple'); ?>&nbsp;&nbsp;<span ><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp; </span>
			</div>
			<div class="clearfix"></div>
				<?php the_content(); ?>
				<?if( get_the_tag_list() ){
			echo get_the_tag_list('<p class="tag"><i class="fas fa-tags"></i> ',', ','</p>');
		}
		?>
		<?
		if ($currentLang == 'ru'){		
			echo '<h2><a href="javascript:history.go(-1)">Вернуться</a></h2>';
		} elseif ($currentLang == 'uk'){	
			echo '<h2><a href="javascript:history.go(-1)">Повернутися</a></h2>';
		}
		elseif ($currentLang == 'en'){	
			echo '<h2><a href="javascript:history.go(-1)">Return</a></h2>';
		}
		?>	
			<?php endwhile; endif; ?>
	 
		</div>
		<div class="right">
			
		<br>

		<?$params = array(
		'category__in'=>551,
		'posts_per_page' => 15,
			'order'=>'DESC'
			 
		);
		$dateq = new WP_Query( $params );?>
		 <?php if ($dateq->have_posts()):  ?>
		 <h3>Ще вакансії</h3> <ul>	
		<?while ($dateq->have_posts()):$dateq-> the_post();?>
			
					<li class="list_vakansii"><a href="<?php the_permalink(); ?>"> <?	if ( has_post_thumbnail() ) {   the_post_thumbnail();} ?>
					<?php the_title(); ?></a></li>
					
			<?php endwhile; ?>
			</ul>
			<?endif; ?>
			<?php wp_reset_query(); ?> 
			
		</div>

		</div>
<?}

else
{
?>
<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('
		<p id="breadcrumbs">','</p>
		');
		}
		?>

	 <div id="content" role="main">  
		<?php if (have_posts()):?>
		<?php while (have_posts()): the_post(); ?>
			<div class="post  category sg" >
				<h3 style="background:transparent;"><?php the_title(); ?></h3>					
				<div class="m_info_arhiv "><span><i class="fa fa-calendar"></i>&nbsp;<?php echo get_the_date('j-n-Y'); ?> </span>&nbsp;&nbsp;
									<?php the_category(' , ', 'multiple'); ?>
								&nbsp;&nbsp;<span ><i class="fa fa-eye"></i>&nbsp;<?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp; </span>
				</div>  
		
				<div class="post-content">
					<?php the_content(); ?>						
					<?if( get_the_tag_list() ){	echo get_the_tag_list('<p class="tag"><i class="fas fa-tags"></i> ',', ','</p>');}		?>
				
				<div class="postall">	
					<?$currentLang = pll_current_language('slug');
					if ($currentLang == 'ru'){
					echo '<h2><a class="btn" href="javascript:history.go(-1)">Вернуться</a></h2>';
					} elseif ($currentLang == 'uk'){
					echo '<h2><a class="btn" href="javascript:history.go(-1)"><i class="fas fa-long-arrow-alt-left"></i></a></h2>';
					next_post_link('%link', '<i class="fas fa-long-arrow-alt-right"></i>', true);
					}
					elseif ($currentLang == 'en'){
					echo '<h2><a class="btn" href="javascript:history.go(-1)">Return</a></h2>';
					}
					?>											
				</div>	
				</div>	
		          

	
		<div class="clearfix"></div>	

									
			<!-- Похожие записи -->
				<?php $tags = wp_get_post_tags($post->ID);
				if ($tags) {
				 $tag_ids = array();
				 foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				 $args=array(
				 'tag__in' => $tag_ids, // Сортировка происходит по тегам (меткам)
				 'orderby'=>'title', // Добавляем условие сортировки рандом (случайный подбор)
				 'caller_get_posts'=>1, // Запрещаем повторение ссылок
				 'post__not_in' => array($post->ID),
				 'showposts'=>5 // Цифра означает количество выводимых записей
				 );

				 $my_query = new wp_query($args);
				 if( $my_query->have_posts() ) 
				 {
					echo '<div class="related">';
					$currentLang = pll_current_language('slug');
					if ($currentLang == 'ru'){		
						echo '<h3>Материалы по теме:</h3>';
				} 
					elseif ($currentLang == 'uk')
				{	
					echo '<h3>Статті по темі</h3>';
				}
					elseif ($currentLang == 'en')
				{	
					echo '<h3>More</h3>';
				}

				echo '<ul>';
				 while ($my_query->have_posts())
				{
				 $my_query->the_post();
				 ?>
				 <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				 <?php
				}
				 echo '</ul></div>';
				}
				 wp_reset_query();
				}
				 ?>  
		<!-- Похожие записи /-->
			</div>
		<?php endwhile; ?>
		<?php endif; ?>				
	</div>          	
		
<?}?>
</section>
<div class="clearfix"></div>




<?php get_footer();?>
