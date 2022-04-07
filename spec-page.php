<?php
/*
Template Name: Spec_page
*/
?>
<style type="text/css">
select
{
    width: 100%;
    height: 30px;
}
</style>
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
<div class="site-content">
	
	<div  class="middle-menu">
		<div><?php wp_nav_menu( array( 'theme_location' => 'middle','fallback_cb'=> '' ) ); ?></div>
	</div>
	
	<div id="content" role="main" class="">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<div class="row title-header" style="border-bottom:2px solid maroon">					
					<h3 > <a style="line-height: 5;" href="https://donntu.edu.ua/abit">Вступнику: </a> <span style="margin-left:20px"><?the_title();?></span>
				
					</h3>
					<div  class="hidden-xs"><?dynamic_sidebar('forabit');?></div>
				</div>	
			<?php endwhile; endif; ?>
			<div  class="two-column">	
			<div class="left">
				<div class="tabs vkladki" style="width: 100%; border-bottom: 2px solid maroon; margin-bottom: 20px">
					<ul id="nav" class="" style="width: 100%;">
						<li id="tb1" class="tb1"><a class="on active" title="" href="" style="  padding: 15px 20px;">Спеціальності</a></li>
						<li id="tb2" class="tb2"><a  title="" href="https://donntu.edu.ua/abit/specialnosti-universitetu#tb2"  style="  padding: 15px 20px;">Сертифікати ЗНО для вступу у 2022 р.</a></li>
						<li id="tb3" class="tb3"><a title="" href="https://donntu.edu.ua/abit/specialnosti-universitetu#tb3"  style="  padding: 15px 20px;">Відео та презентації</a></li>
					
					</ul>
				</div>

			 <form class="filter" action="" method="get"><!-- action пустой, чтобы ссылалось на текущую страницу -->
                <table class="bez-granic">
                <tr>
                    <td colspan="2"><p> Обери наявні сертифікати ЗНО   2019, 2020, 2021, 2022 рр. та дізнайся про можливі варіанти для вступу до ДонНТУ! </p></td>
                </tr>
                <tr>
                    <td>Перший конкурсний предмет (обов'язковий)</td>
                    <td> <select name="znou"> <!-- Раздел - селектлист -->
        					
						
						 <option value="Українська мова та література"<?php if ( $_GET['znou'] == "Українська мова та література" ) echo 'selected="selected"'; ?>>Українська мова та література</option>
                        <option value="Українська мова"<?php if ( $_GET['znou'] == "Українська мова" ) echo 'selected="selected"'; ?>>Українська мова</option>
						
						
						
                        
                    </select></td>
                </tr>
                <tr>
                    <td>Другий конкурсний предмет (обов'язковий)</td>
                <td>
                    <select name="zno1"> <!-- Раздел - селектлист -->
                        <option value="0" <?php if ( $_GET['zno1'] == "Все" ) echo 'selected="selected"'; ?>>Обрати</option>
                        <option value="Математика"<?php if ( $_GET['zno1'] == "Математика" ) echo 'selected="selected"'; ?>>Математика</option>
                        <option value="Історія України"<?php if ( $_GET['zno1'] == "Історія України" ) echo 'selected="selected"'; ?>>Історія України</option>
                        <option value="Біологія"<?php if ( $_GET['zno1'] == "Біологія" ) echo 'selected="selected"'; ?>>Біологія</option>
                        <option value="Іноземна мова"<?php if ( $_GET['zno1'] == "Іноземна мова" ) echo 'selected="selected"'; ?>>Іноземна мова<sup>**</sup></option>
                        <option value="Географія"<?php if ( $_GET['zno1'] == "Географія" ) echo 'selected="selected"'; ?>>Географія</option>
                        <option value="Фізика"<?php if ( $_GET['zno1'] == "Фізика" ) echo 'selected="selected"'; ?>>Фізика</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Третій конкурсний предмет (на вибір)<br>( сертифікат ЗНО з іноземної мови<sup>**</sup> 2019, 2020, 2021, 2022 рр) </td>
                    <td>
                        <select name="zno2"> <!-- Раздел - селектлист -->
                            <option value="0" <?php if ( $_GET['zno2'] == "Все" ) echo 'selected="selected"'; ?>>Обрати</option>
                            <option value="Математика"<?php if ( $_GET['zno2'] == "Математика" ) echo 'selected="selected"'; ?>>Математика</option>
                            <option value="Хімія"<?php if ( $_GET['zno2'] == "Хімія" ) echo 'selected="selected"'; ?>>Хімія</option>
                            <option value="Історія України"<?php if ( $_GET['zno2'] == "Історія України" ) echo 'selected="selected"'; ?>>Історія України</option>
                            <option value="Біологія"<?php if ( $_GET['zno2'] == "Біологія" ) echo 'selected="selected"'; ?>>Біологія</option>
                            <option value="Іноземна мова"<?php if ( $_GET['zno2'] == "Іноземна мова" ) echo 'selected="selected"'; ?>>Іноземна мова<sup>**</sup></option>
                            <option value="Географія"<?php if ( $_GET['zno2'] == "Географія" ) echo 'selected="selected"'; ?>>Географія</option>
                            <option value="Фізика"<?php if ( $_GET['zno1'] == "Фізика" ) echo 'selected="selected"'; ?>>Фізика</option>
                        </select>
                    </td>
                </tr>
                <tr>	
                    <td colspan="2">
                        <br>		
                        <button type="submit" class="smal_knopka">Обрати</button>
                    </td>
                </tr>
                </table>
            </form>

			<?php if ($_GET && !empty($_GET)) 
			{ 
			
				function getOrZero($var)
{
	return isset($_GET[$var]) ? $_GET[$var] : "0";
}


// получаем данные из $_GET запроса
$znou = getOrZero('znou'); 
$zno1 = getOrZero('zno1');
$zno2 = getOrZero('zno2');


	
	
if ($znou == "Українська мова"):	
$zapu=array(
			'key' => 'select_ukm',
			'value' => $znou 
		);
else: $zapu="";
	endif;	
	
	if ($zno1!= "0"):
	$zap1= array(
			'key' => 'select_ob',
			'value' => $zno1
		);
	
	else: $zap1="";
	endif;
	
	if ($zno2 != "0"):	$zap2=array(
						'relation' => 'OR',
						array(
							'key' => 'select_1v ',
							'value' => $zno2
						),
					
						array(
							'key' => 'select_2v ',
							'value' => $zno2
						),
				
						array(
							'key' => 'select_3v ',
							'value' => $zno2
						),
				
						array(
							'key' => 'select_4v ',
							'value' => $zno2
						),
					
						array(
							'key' => 'select_5v ',
							'value' => $zno2
						),
						
						array(
							'key' => 'select_6v ',
							'value' => $zno2
						)
						
	);
	else: $zap2="";
	endif;


// для проверки
//print_r($true_args);

$true_args1=array(
'post_type' => 'specialty',	'orderby' => 'title',	'order' => 'ASC',	'posts_per_page' => -1, 'meta_key' => 'bak', 'meta_value' => 'on',

	'meta_query' => array(
		'relation' => 'AND',
		$zapu,
		$zap1,			
		$zap2
)
);
//print_r($true_args1);
				
				?>

			<? $loop = new WP_Query($true_args1);
			if ( $loop->have_posts() ) :
			
			
			?>
				<div class="around-tabl c111">
				<table>
					<tr>
					<td colspan="3">Конкурсні пропозиції ДонНТУ (спеціальність-освітня програма)</td>	
					<td>Перший конкурсний предмет (обов'язковий)</td>	
					<td>Другий конкурсний предмет (обов'язковий)</td>
					<td>Третій конкурсний предмет (на вибір)</td>
					</tr>

					<?php while ($loop->have_posts()): $loop->the_post(); 
                        $video = trim(get_post_meta($post->ID, 'video', true));
                        $order = trim(get_post_meta($post->ID, 'order', true));
						  $op = get_post_meta($post->ID, 'op', true);
						    $np = get_post_meta($post->ID, 'np', true);
						
						If ($op=="on"):
						$op="<span tooltip='Ocоблива підтримка' flow='right'>ОП </span>";
						else:
						$op="";
						endif;
						
							If ($np=="on"):
						$np="<span tooltip='Ocоблива підтримка' flow='right'>НП </span>";
						else:
						$np="";
						endif;
						
                    ?>

					<tr>
					<td>  
						<a href="/specialty/<?=$post->post_name?>" tooltip="Обчислити Конкурсний бал" flow="right" target="_blank"><?php the_title(); ?></a>

						
					</td>
					<td>
                        <div class="video" style="display:flex;justify-content:center">
                        <?if(!empty($order)):?>
						<a href="<?echo $order;?>" target="_blank" title="Переглянути PDF" tooltip="Переглянути PDF" flow="right"><i class="fa fa-file-pdf fa-2x" style="color: red;"></i></a>
						<?endif;?>
						</div>
					</td>
					<td>
						<?if(!empty($video)):?>
						<a href="<?echo $video;?>" target="_blank" title="Переглянути відео" tooltip="Переглянути відео" flow="right"><i class="fa fa-youtube fa-2x" style="color: red;"></i></a>
						<?endif;?>
					</td>
					<td><p><?$short = get_post_custom_values ('select_ukm', $post->ID ) ;?>							
							<?if (!empty($short[0])): echo $short[0]; endif;?>							
						</p></td>
					<td>
						<p><?$short = get_post_custom_values ('select_ob', $post->ID ) ;?>							
							<?if (!empty($short[0])): echo $short[0]; endif;?>							
						</p>
					</td>
					<td>
						<p>
						<? $stack = array();
 for($i=1;$i<7;$i++)
 {	$sel=get_post_custom_values('select_'.$i.'v', $post->ID)[0]."<br>";
	array_push($stack, $sel);
 }
 natsort($stack);
// print_r($stack);
 $sel_v3= count($stack); 
 
 while (list($key, $val) = each($stack)) {
    echo  $val . "\n";
} 
 ?>
						
						
						</p>										
					</td>						
					</tr>
					<?php endwhile; ?> 
				</table>

			</div>
				<?else:?>
					<table class="bez-granic">
						<tr>
							<td >
								<p style="background: #eeeff1;text-align: center;padding: 1em;margin: 20px 50px;font-weight: bold;"> 	За вашим запитом не знайдено варіантів</p>
							</td>
						</tr>
					</table>
				<?php endif;?>
		<? wp_reset_postdata(); ?>


			
			<p style="font-size:90%"><sup>*</sup>  – <b>Небюджетні конкурсні пропозиції</b> – конкурсні пропозиції, на які не надаються місця для
навчання за державним або регіональним замовленням – відповідно до рейтингового списку,
вступники рекомендуються до зарахування тільки на місця за кошти фізичних та/або
юридичних осіб. Перелік конкурсних предметів для вступу (сертифікатів ЗНО)
встановлюється Університетом в Правилах прийому.</p>
			<pstyle="font-size:90%"><sup>**</sup> - Англійська, німецька, французька, іспанська</p>
<?	} ?>
			</div>
			<div class="right">
			<?dynamic_sidebar('abit');?>
			</div> 
 	</div>
	</div>
</div>

<div class="clearfix"></div>
<?php get_footer();?>