<?php
  $post = $wp_query->post;
  //print_r($post);
  $par=$post->post_parent;  
//$pag=$post->page_id;
// echo("Родитель".$pag);  
 // echo("Родитель". $par); 
  /*if ($par==577)*/
  
/*if($par==690 or $par==5535)
   	{ get_header('old'); }

else{get_header('test1'); }*/

get_header('');



$true_args_zagalnouniversitetski = array('post_type' => 'pidrozdily','posts_per_page' => -1,
'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'pidrozdil',
				'terms' => 'zagalnouniversitetski-pidrozdili',
				'field' => 'slug'
			)
		)
);

$loop = new WP_Query($true_args_zagalnouniversitetski);
			if ( $loop->have_posts() ) :
//print_r($loop);
			?>
				<div class="around-tabl c111">
				<table>
					<tr>
								<td>Посада</td>	
					<td>ПІБ</td>
					<td>Кабінет</td>
					</tr>
<tr>
								<td></td>	
					<td></td>
					<td></td>
					</tr>
					<?  while ( $loop->have_posts() ) : $loop->the_post(); 
//echo $loop->the_post();
$post_id = get_the_ID();
$pib=trim( get_post_meta( $post_id, 'pib', true));
$posada=trim( get_post_meta( $post_id, 'posada', true));
$stupin=trim( get_post_meta( $post_id, 'stupin', true));
$adresa=trim( get_post_meta( $post_id, 'adresa', true));
$phone=trim( get_post_meta( $post_id, 'phone', true));
$mail=trim( get_post_meta( $post_id, 'mail', true));
$site=trim( get_post_meta( $post_id, 'site', true));
 $selectOb = get_post_custom_values('select_ob', $post->ID)[0];
?>

						


					<tr>
					<td>
<?$terms = get_the_terms( $post->ID, 'pidrozdil' );
if( $terms ){
	$term = array_shift( $terms );
//print_r($term);

	// теперь можно можно вывести название термина
	echo $term->term_id;
}?>


					
							<?echo $posada." "; the_title();?>
						
					</td>
					<td>
						<?if(!empty($pib)):?>
							<?php echo $pib;?>
						<?else:?>
							<?php echo "Empy"; ?>
						<?endif;?>
					</td>
					<td><?echo $adresa; ?></td>
					
										
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


<?	


  
<? get_footer('');?>
