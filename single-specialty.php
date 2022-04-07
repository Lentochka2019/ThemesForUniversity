<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>

<section id="primary" class="site-content clearfix">
    <div class="middle-menu">
        <div><?php wp_nav_menu(array('theme_location' => 'middle', 'fallback_cb' => '')); ?></div>
    </div>


<div id="content" role="main" class="">
	<div class="row title-header" style="border-bottom:2px solid maroon">					
			<h3 style="line-height: 2;"> <a href="https://donntu.edu.ua">ДонНТУ </a> »  <a href="https://donntu.edu.ua/abit">Вступнику </a> » <span ><b> <?the_title();?></b></span><br><a href="https://donntu.edu.ua/abit/online-services" style="    font-size: 90%;
		color: #599bbe;"><i class="fas fa-chalkboard-teacher"></i> Онлайн-сервіси для вступників</a></h3>
			
			<div  class="hidden-xs" style="padding-top: 15px;"><?dynamic_sidebar('forabit');?></div>
	</div>
	<div class="two-column">
	<div class="left"> 
        <?php while (have_posts()) : the_post(); ?>
           

            <div class="post  category" style="width:100%; margin:0 0 50px">
               
                <? $terms = get_the_terms($post->ID, 'accessories'); 
				   $galuz=get_the_terms($post->ID, 'galuz'); 	
				   $struct=get_the_terms($post->ID, 'struct_spec'); 
                // print_r($struct);

                 
   $bak = get_post_meta($post->ID, 'bak');
   $op_pzso=get_post_meta($post->ID, 'op_pzso');
     $op_mag=get_post_meta($post->ID, 'op_mag');
 ?>  
				
                <div class="m_info_arhiv " style=" margin:0"><span><i class="fa fa-calendar"></i> <?php echo get_the_date('j-n-Y'); ?> </span>&nbsp;&nbsp;
                    <?php the_category(' , ', 'multiple'); ?>
                    &nbsp;&nbsp;<span><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp; </span>
                </div>
                <div class="two-column left-right">
                    <div class="left">
					 <h4><b>Відомості про освітню програму</b></h4>
<?if($op_pzso[0]):?><p>Опис освітньої програми бакалаврів <b><a target="_blank" href="<?= $op_pzso[0];?>">на wiki-ресурсі</a> </b></p><?php endif; ?>
 <?if($op_mag[0]):?><p>Опис освітньої програми магістрів <b><a target="_blank" href="<?= $op_mag[0];?>">на wiki-ресурсі</a> </b></p><?php endif; ?>    
                        <?
                       /* if (is_array($galuz)) 
						{
                            $galuz = array_shift($galuz);		
							echo "<p>Галузь знать: " . $galuz->name . "</p>";
                            foreach ($galuz as $cur_term) {
                                $newterms[$cur_term->term_id] = $cur_term;
                            }
                            ksort($newterms);
						}
						if (is_array($terms)) 
						{ 	$term=array_shift($terms);
                            // теперь можно можно вывести название термина
                            echo "<p>Спеціальність: " . $term->name . "</p>";

                            foreach ($terms as $cur_term) {
                                $newterms[$cur_term->term_id] = $cur_term;
                            }
                            ksort($newterms);
							

                            ?>
						
                    
                    <? } else {                    echo "no";                } */
					
					if (is_array($struct)) 
						{ 
 //print_r($struct); 

				/*	$struc=array_shift($struct);
                            // теперь можно можно вывести название термина
                         
                            foreach ($struct as $struc) {
                                $newterms[$struc->term_id] = $struc;
                            }
                            ksort($newterms);
							*/

                            ?>
							 <h4><b>Структурний підрозділ</b></h4>
                            <div style="float:left; display:inline-block;    margin: 0;">

                                <div>
                                    <p>Факультет: </p>
                                </div>
                                <div>
                                    <p>Кафедра: </p>
                                </div>
                            </div>
                            <div style="display:inline-block;    margin: 0 5px;">
                                <? foreach ($struct as $struc) {
                                   
                                   if($struc->parent == 0)
                                               { if ($struc->description != ""): 
                                                    $faculty= "<div> " . $struc->description . "</div>"; 
                                                else:    $faculty= "<p> " . $struc->name . "</p>";  
                                             endif;
                                             } 
                                    else
                                                {if ($struc->description != ""): 
                                                    $dep= "<div> " . $struc->description . "</div>"; 
                                                else:    $dep= "<p> " . $struc->name . "</p>";    
                                                endif;}
                                              
                                   


                                } echo $faculty; echo $dep;?>
                            </div>
                    
                    <? }
					
					
					
					?>   
					</div>					
                    <div class="right">
						<p><a href="https://donntu.edu.ua/abit/vstup-do-dontu/poryadok-roboti-pk"> Вступ для отримання  ОС "Магістр"</a></p>
  
						<p><a href="https://donntu.edu.ua/abit/vstup-do-dontu/poryadok-roboti-pk"> Вступ для отримання ОС «бакалавр» на основі диплому молодшого спеціаліста</a></p>					
						<h4><b>Вступ для отримання ОС «бакалавр»</b></h4>  <? 
if($bak[0]!= 'on') echo"Пропозиція діє лише для магістрів";?>  

                                    
					</div>
				</div>
                <div class="clearfix"></div>
				<?if($bak[0]== 'on') :?>
				 <div class="cmpscr" style="   background: #ffff;    padding: 20px;    border: 1px solid #1b37693d;   ">		
					<?php  get_template_part('content','calc');?>
			</div>
			<?endif;?>
			<h3 style="margin-top:50px">Про освітню програму</h3>
			
		
                <?php the_content(); ?>

                <? if (get_the_tag_list()) {
                    echo get_the_tag_list('<p class="tag"><i class="fas fa-tags"></i> ', ', ', '</p>');
                }
                ?>
             

                
                <div class="clearfix"></div>
                <!-- Похожие записи -->
                <?php $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $tag_ids = array();
                    foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    $args = array(
                        'tag__in' => $tag_ids, // Сортировка происходит по тегам (меткам)
                        'orderby' => 'title', // Добавляем условие сортировки рандом (случайный подбор)
                        'caller_get_posts' => 1, // Запрещаем повторение ссылок
                        'post__not_in' => array($post->ID),
                        'showposts' => 5 // Цифра означает количество выводимых записей
                    );

                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        echo '<div class="related">';
                        $currentLang = pll_current_language('slug');
                        if ($currentLang == 'ru') {
                            echo '<h3>Материалы по теме:</h3>';
                        } elseif ($currentLang == 'uk') {
                            echo '<h3>Статті по темі</h3>';
                        } elseif ($currentLang == 'en') {
                            echo '<h3>More</h3>';
                        }

                        echo '<ul>';
                        while ($my_query->have_posts()) {
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
   <?php endwhile;  ?>
	</div><!--End left -->
	<div class="right">
		<?
		 $video = trim(get_post_meta($post->ID, 'video', true));
		if(!empty($video)): $video = substr($video, 17);?>	
<?//echo $video;?>			
								<iframe style="width:100%; height:315px" width="100%" height="315" src="https://www.youtube.com/embed/<?echo $video;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<?endif;?>
	 <?dynamic_sidebar('abit');?>
	</div> 
	</div>
</div><!--End content -->	
  
</section>
<div class="clearfix"></div>


<?php  get_footer(); ?>; ?>