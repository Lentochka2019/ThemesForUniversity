<?php
// подключим стили темы
/*if(!wp_style_is( 'font-awesome' ) ){
	// стили не подключены, подключим их
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
}*/

/*add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );*/

if(function_exists('register_sidebar'))
	register_sidebar(array(
'name'=>'Sidebar',
'id' => 'Sidebar'
)); // регистрируем сайдбар
	add_theme_support('post-thumbnails'); // поддержка миниатюр
	set_post_thumbnail_size(200,200, true);
define( 'ACS_COMPAT', true ); // Arconix Shortcodes Compatibility Mode
add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}

register_sidebar( array(
		'name' => 'Якість освіти',
		'id' => 'quality',
		'before_widget' => '<div id="%1$s" class="quality">',
		'after_widget' => '</div>',
		
	) );


register_sidebar( array(
		'name' => 'head-menu2',
		'id' => 'head-menu2',
		'before_widget' => '<div id="%1$s" class="head-menu2">',
		'after_widget' => '</div>	<div class="wt"></div>',
		
	) );

register_sidebar( array(
		'name' => 'md',
		'id' => 'md',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'art-mayak',
		'id' => 'art-mayak',
		'before_widget' => '<div id="%1$s" class="%2$s widget sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	

	register_sidebar( array(
		'name' => 'oc',
		'id' => 'oc',
		'before_widget' => '<div id="%1$s" class="%2$s widget sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'md_gor',
		'id' => 'md_gor',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'science',
		'id' => 'science',
		'before_widget' => '<div id="%1$s" class="%2$s widget sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'science_gor',
		'id' => 'science_gor',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );	
	register_sidebar( array(
		'name' => 'index-insert',
		'id' => 'index-insert',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'vr',
		'id' => 'vr',
		'class' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar %2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'archive-novin',
		'id' => 'archive-novin',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'donntu-youtube',
		'id' => 'donntu-youtube',
		'before_widget' => '<div id="%1$s" class="afisha">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'class'=>'afisha'
	) );
	
	register_sidebar( array(
		'name' => 'ipo-insert',
		'id' => 'ipo-insert',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'tak-insert',
		'id' => 'tak-insert',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'forabit',
		'id' => 'forabit',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
		register_sidebar( array(
		'name' => 'library',
		'id' => 'library',
		'class' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar %2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'		
	) );
	
		register_sidebar( array(
		'name' => 'library_gor',
		'id' => 'library_gor',
		'class' => '',
		'before_widget' => '<div id="%1$s" class=" %2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3> ',
		'after_title' => '</h3>'		
	) );
	register_sidebar( array(
		'name' => 'abit',
		'id' => 'abit',
		'class' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar %2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>'		
	) );
	register_sidebar( array(
		'name' => 'index-95',
		'id' => 'index-95',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'footer',
		'id' => 'footer',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
		register_sidebar( array(
		'name' => 'header',
		'id' => 'header',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
			) );
			register_sidebar( array(
		'name' => 'ipo_right',
		'id' => 'ipo_right',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'rek_abit',
		'id' => 'rek_abit',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
	register_sidebar( array(
		'name' => 'st_k',
		'id' => 'st_k',
		'class'=>'stk',
		'before_widget' => '<div id="%1$s" class="%2$s widget sidebar stk">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
	
register_nav_menus(
array(
'primary'=>__('Главное меню'),
'secondary'=>__('Второе меню'),
'olimpiada'=>__('1'),
'arhiv'=>__('Архив новостей'),
'library'=>('Бібліотека'),
'PK'=>('Приймальна комісія'),
'aky'=>('AKY'),
'ipo'=>('ІПО'),
'md'=>('Міжнародна діяльність'),
'vr'=>('Вчена рада'),
'sc'=>('Наука та інновації'),
'game'=>('GameHub'),
'tatu'=>('Tatu'),
'map'=>('MAP'),
'map'=>('MAP'),
'vre'=>('Вибори ректора'),
'art-mayak'=>('art-mayak'),
'ckm'=>('центр карьеры и маркетинга'),
'studrada'=>('Студрада'),
'top'=>('top'),
'middle'=>('middle'),
'vstup'=>('vstup')
)
);

function new_excerpt_length($length) {
  return 50;}
add_filter('excerpt_length', 'new_excerpt_length');
 add_theme_support( 'editor-styles');
add_editor_style( 'style-editor.css' );
function register_styles() {	
wp_dequeue_style( 'megamenu' );
// wp_deregister_script( 'jquery' );
/*wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js", false, '1.12.2');*/
	//wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", false, '3.2.1');
wp_enqueue_script('jquery');
wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/fancybox/jquery.fancybox.css', array(), ' ' );

/*wp_register_style( 'builder-style', plugins_url() . '/beaver-builder-lite-version/css/fl-builder-layout.css' );
 wp_enqueue_style( 'builder-style');*/
// Fancybox script.
	wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/fancybox/jquery.fancybox.js', array('jquery'), ' ');
//wp_enqueue_script('my', get_template_directory_uri().'/js/donntu.js', null, '4.7.3');	
wp_enqueue_script('my', get_template_directory_uri().'/js/donntu.js', null, '4.7.3');	 
	wp_enqueue_script( 'true_loadmore', get_template_directory_uri() . '/js/loadmore.js', array('jquery') );	 
    wp_register_script('owl.carousel', get_template_directory_uri() . '/owl/owl.carousel.js', 'jquery');
    wp_enqueue_script('owl.carousel');
	wp_register_style( 'owl.carousel.style', get_template_directory_uri(). '/owl/owl.carousel.min.css' );
	  wp_enqueue_style( 'owl.carousel.style' );
	wp_register_style( 'owl.carousel.style1', get_template_directory_uri(). '/owl/owl.theme.default.css' );
	 wp_enqueue_style( 'owl.carousel.style1' );
wp_register_script('bxslider','https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js','jquery');
    wp_enqueue_script('bxslider');
}
add_action( 'wp_enqueue_scripts', 'register_styles' );

function my_news()
{
if ( is_page('20748') || is_page ('5836') ) {
	/*	wp_deregister_script('jquery');
	  wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", false, '3.2.1');
		// wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js", false, '1.12.2');
wp_enqueue_script('jquery');*/

wp_deregister_script('https://donntu.edu.ua/wp-content/plugins/fancybox-for-wordpress/fancybox/jquery.fancybox.js');


//wp_deregister_script( "http://cdn.jquerytools.org/1.2.7/tiny/jquery.tools.min.js?ver=1.2.7");
	 }
	
}
add_action( 'wp_enqueue_scripts', 'my_news' );

/*Test*/
function wpt_register_owl() {
	 if ( is_page('17269')|| is_page('848')|| is_page('18793')||is_page('21467') ||is_page('8457') ) {
		 
	wp_deregister_script('jquery');
wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js", false, '1.12.2');
wp_enqueue_script('jquery');
wp_enqueue_script('my', get_template_directory_uri().'/js/donntu.js', null, '4.7.3');	 
		 
    wp_register_script('owl.carousel', get_template_directory_uri() . '/owl/owl.carousel.js', 'jquery');
    wp_enqueue_script('owl.carousel');
	wp_register_style( 'owl.carousel.style', get_template_directory_uri(). '/owl/owl.carousel.min.css' );
	  wp_enqueue_style( 'owl.carousel.style' );
	wp_register_style( 'owl.carousel.style1', get_template_directory_uri(). '/owl/owl.theme.default.css' );
	 wp_enqueue_style( 'owl.carousel.style1' );
	 
	  wp_register_style( 'media', get_template_directory_uri() . '/media.css' );
    wp_enqueue_style( 'media' );
}
}
add_action( 'wp_enqueue_scripts', 'wpt_register_owl' );
/*
function wpt_register_js() {
	 if ( is_page('6776') ) {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
	 if ( is_page('6776') ) {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
	 }
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );*/

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

/*function mytheme_ie_styles(){
wp_enqueue_style('mytheme-ie', get_template_directory_uri().'/ie9.css');
wp_style_add_data('mytheme-ie','conditional','lte IE 9');
}
add_action('wp_enqueue_scripts','mytheme_ie_styles');*/

function wpb_list_child_pages() {
global $post;
if ( is_page() && $post->post_parent )
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&exclude=844,3111,3114,3044,442,3119' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&exclude=844,3111,3114,3044,442,3119' );
if ( $childpages ) {
    $string = '<ul>' . $childpages . '</ul>';
}
return $string;
}

function wpb_list_child_pages1() {
global $post;
	
	//запрашиваем дочерние страницы
	$args = array(
		'post_parent' => $post->ID,
		'post_type' => 'page'
	);
	$subpages = new WP_query($args);
	
	// создаем выходные данные
	if ($subpages->have_posts()) :
	
		while ($subpages->have_posts()) : $subpages->the_post();
			$output = '<h3>'.the_title().'</h3><div>'.the_content().'</div><div>'.get_post_meta($post->ID, 'contacts', true).'</div>';
		
		endwhile;
		
	else :
		$output = '<p>Дочерних страниц не найдено.</p>';
	endif;
	
	// сбрасываем запрос
	wp_reset_postdata();
	
	// возвращаем что-то
	return $output;
}
function my_paginate_links() {
   global $wp_rewrite, $wp_query;
   $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
   $pagination = array(
     'base' => @add_query_arg('paged','%#%'),
     'format' => '',
     'total' => $wp_query->max_num_pages,
     'current' => $current,
     'prev_text' => __('« Попередня'),
     'next_text' => __('Наступна »'),
     'end_size' => 1,
     'mid_size' => 2,
     'show_all' => true,
     'type' => 'list'
   );
   if ( $wp_rewrite->using_permalinks() )
   $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
   if ( !empty( $wp_query->query_vars['s'] ) )
   $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
   echo paginate_links( $pagination );
   }
/* add_filter('login_url', 'my_custom_login_url');
add_filter('logout_url', 'my_custom_logout_url');
function my_custom_login_url($force_reauth, $redirect=null){
$login_url = site_url('avtorizacia.php');
if (empty($redirect)) $redirect=home_url();
$login_url = add_query_arg('redirect_to', urlencode( $redirect ), $login_url );
return $login_url ;
}
function my_custom_logout_url($force_reauth, $redirect=null){
$logout_url = wp_nonce_url(site_url('avtorizacia.php')."?action=logout", 'log-out' );
if (empty($redirect)) $redirect=home_url(); 
$logout_url = add_query_arg('redirect_to', urlencode( $redirect )."/?loggedout=true", $logout_url ); 
return $logout_url ; }*/
function my_faculti($dat){?>
	<div class="for-faculty">
	<?php 
global $more;    // Объявим переменную $more как глобальную (перед Циклом WordPress).
$more = 0;       // Изменим значение переменной, чтобы показать только текст до тега more.
the_content("More...");
?>
	<?php query_posts('pagename='.$dat); global $more;?>
		<?php if (have_posts()): while (have_posts()): the_post(); $more = 0; ?>
			<div><p style="margin:15px 20px; font-size: 12pt;font-style: italic;font-weight:bold"><a href="<?echo home_url('/'); echo $dat;?>"><?the_title();?></a></p> </div>
			<div class="content-faculty">
	 		    <?	if ( has_post_thumbnail() ) {
	 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   the_post_thumbnail();
   echo '</a>';
} ?>			<div class="post" >   <?php the_content(); ?></div>				
				<?$k=get_the_ID();?> 				
			<?$textInput = get_post_meta($k, 'contacts', true);?> 
				<?if ($textInput!=''):?>
		<div  ><div class="sidebar">	
			<?echo $textInput;?> 
					</div></div>	 
					<?else:echo"Нет контактов";?>
		<?endif;?>				
		</div>		
		<?php endwhile; endif; ?>
		<div class="clearfix"></div>
		<div class="mor"></div>
		<?php wp_reset_query(); ?> 
	</div>
	<div class="clearfix"></div>
<?return ; }
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
add_image_size( 'spec_thumb1', 300, 207, true );
add_image_size( 'afisha_thumb', 360, 250, true );
add_image_size( 'spec_thumb', 395, 171, array( 'center', 'center' ) );
add_image_size( 'md_thumb', 150, 80, array( 'center', 'center' ) );
function gruz0_show_pages( $atts ) {
    // Если есть активный плагин Exclude Pages,
    // Отключим его на время работы шорткода.
    // Если не отключить - некоторые страницы не будут обработаны.
    if ( is_exclude_pages_exists() ) toggle_exclude_pages( 'off' );

    global $post;

    $current_page = 0;

    // Обрабатываем запросы только на страницах
    if ( $post->post_type == 'page' ) {
        $current_page = get_page( $post->ID );
    } else if ( $post->post_type == 'post' ) {
        $current_page = get_post( $post->ID );
    }

    // Извлекаем параметры из шорткода
    extract( shortcode_atts( array( 
        'parent' => $post->ID,
        'include' => array(),
        'css_class' => '',
        'show_parent' => 0
        ), $atts )
    );

    if ( !is_array( $include ) ) {
        $include = split( ',', $include );
    }

    // Формируем фильтры для получения списка страниц
    $args = array(
        'child_of' => $parent,
        'parent' => $parent,
        'post_type' => 'page',
        'post_status' => 'publish',
        'sort_order' => 'DESC',
        'sort_column' => 'date'
    );

    // Получаем список дочерних страниц
    $pages = get_pages( $args );

    // Если пусто - выходим
    if ( !$pages ) return '';
    if ( count( $pages ) == 0 ) return '';

    // Если задан класс CSS - подключаем его
    if ( !empty( $css_class ) ) $css_class .= ' ';

    $content = '<ul class="'.$css_class.'subpages">';

    // Если стоит признак отображения родительской категории, то выводим её первой в списке
    if ( $show_parent ) {
        $parent_link = get_page_link( $parent );
        $parent_page = get_page( $parent );
        if ( $parent_page != null ) {
            $content .= '<li><a href="'.$parent_link.'">'.$parent_page->post_title.'</a></li>';
        }
    }
    // Пошёл перебор страниц и вывод в браузер
    foreach( $pages as $page ) {
        if ( in_array( $page->ID, $include ) || count( $include ) == 0 ) {
            $page_link = get_page_link( $page->ID );
            $content .= '<li'.( $page->ID == $current_page->ID ? ' class="active"' : '' ).'><a href="'.$page_link.'">'.$page->post_title.'</a></li>';
        }
    }
    $content .= '</ul>';

    // Восстанавливаем работу плагина Exclude Pages
    if ( is_exclude_pages_exists() ) toggle_exclude_pages( 'on' );

    return $content;
}
/**
 * Проверяет на существование плагин Exclude Pages
 * return boolean
 */
function is_exclude_pages_exists() {
    return function_exists( 'ep_init' );
}

/**
 * Отключает или включает фильтры плагина Exclude Pages
 * Без этой функции скрытые в меню страницы не будут отображены шорткодом [pages]
 * @param string $state Состояние: on или off
 */
function toggle_exclude_pages( $state ) {
    switch( $state ) {
        case 'on':
            add_filter( 'get_pages', 'ep_exclude_pages' );
            break;
        case 'off':
            remove_filter( 'get_pages', 'ep_exclude_pages' );
            break;
    }
}
add_shortcode( 'pages', 'gruz0_show_pages' );

add_filter('widget_text','do_shortcode');

add_shortcode( 'list-posts', 'rmcc_post_listing_parameters_shortcode' );
function rmcc_post_listing_parameters_shortcode( $atts ) {
    ob_start();
   global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   extract( shortcode_atts( array (
        'type' => 'post',
		'cat_id'=>'',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'styl' => '',
        'fabric' => '',
        'category' => '',
		'link_test'=>'',
		'tag'=>'',
		'category__not_in'=>''
		
    ), $atts ) );  
    // define query parameters based on attributes
    $options = array(
	'paged' => $paged,
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'styl' => $styl,
        'fabric' => $fabric,
        'category_name' => $category,
		'link_test'=>$link_test,
		'cat'=>$cat_id,
		'tag'=>$tag,
		'category__not_in'=>array($category__not_in)
    );
    $query = new WP_Query( $options );
	 
    // run the loop based on the query
	if ( $query->have_posts() ) { 
	if($query->max_num_pages>$posts):?>
	  <div class="paginat"><? $big = 999999999; // need an unlikely integer
            echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
					'prev_text'    => __('« '),
	'next_text'    => __(' »'),
					
                    'current' => max(
                        1,
                        get_query_var('paged')
                    ),
                    'total' => $query->max_num_pages //$q is your custom query
                )
            );?></div>
			<?endif;?>
	
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>           
     
						<div class="post-main studrada-novini category" style="width:100%">
	                	<h3 style="background:transparent;"><a style="background:transparent; font-size:100%" href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>						
						<div class="m_info_arhiv ">
							<span><i class="fa fa-calendar"></i> <?php echo get_the_date('j-n-Y'); ?> </span>&nbsp;&nbsp;
							 <?php the_category(' , ', 'multiple'); ?>&nbsp;&nbsp;<span ><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> &nbsp;&nbsp; </span>
						</div>		
								
	                	<div class="post"  style="background:transparent;">
							<div class="postcnt">
							<a href="<?php the_permalink(); ?>">
							<?	if ( has_post_thumbnail() ) {	 the_post_thumbnail('middle'); 
								} else {?>
									<img src="<?php bloginfo('template_url'); ?>/images/logo_news.jpg" alt="ДонНТУ" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/>
								<?}?>
							</a>
							<div class="ex"><?php the_excerpt(); ?>
							</div>
	        				</div>
							<?if($link_test!=""):?>
							<div class="postall">
								<h2 style="float:left"><a href="<?php the_permalink();?>"><?echo $link_test;?></a></h2>
							</div>
							<?endif;?>
						</div>
						<div class="clearfix"></div>
						</div>
						

		   <?php endwhile;
	if($query->max_num_pages>$posts):?>
	  <div class="paginat"><? $big = 999999999; // need an unlikely integer
            echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
					'prev_text'    => __('« '),
	'next_text'    => __(' »'),
					
                    'current' => max(
                        1,
                        get_query_var('paged')
                    ),
                    'total' => $query->max_num_pages //$q is your custom query
                )
            );?></div>
			<?endif;?>
		  
		   
        <?    wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }

}

function true_load_posts(){
 
  $args = unserialize( stripslashes( $_POST['query'] ) );
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
        $args['post_type'] = 'event';
 
  query_posts( $args );
  // если посты есть
  if( have_posts() ) :
 
    // запускаем цикл
    while( have_posts() ): the_post();
 
      get_template_part( 'template-parts/post/content', get_post_format() );
 
    endwhile;
 
  endif;
  die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

//автозаполнение полей при вставке медиафайлов start
function wph_auto_alt_title_caption($attachment_ID) {
 
    $filename   = $_REQUEST['name'];
    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $withoutExt = str_replace(array('-','_'), ' ', $withoutExt);
 
    $my_post = array(
        'ID'           => $attachment_ID,
       /* 'post_excerpt' => $withoutExt,  //подпись*/
        'post_content' => $withoutExt,  //описание
    );
    wp_update_post($my_post);
 
    //атрибут alt
    update_post_meta($attachment_ID, '_wp_attachment_image_alt', $withoutExt);
}
add_action('add_attachment', 'wph_auto_alt_title_caption');
//автозаполнение полей при вставке медиафайлов end
/****************************************/



function add_class_attachment_link($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a rel="group_1"',$html);
    return $html;
}
add_filter('wp_get_attachment_link','add_class_attachment_link',10,1);


/************************************************/

?>
<?php
function give_linked_images_class($content) {

  $classes = 'fancybox'; // separate classes by spaces - 'img image-link'

  // check if there are already a class property assigned to the anchor
  if ( preg_match('/<a.*? class=".*?"><img/', $content) ) {
    // If there is, simply add the class
    $content = preg_replace('/(<a.*? class=".*?)(".*?><img)/', '$1 ' . $classes . '$2', $content);
  } else {
    // If there is not an existing class, create a class property
    $content = preg_replace('/(<a.*?)><img/', '$1 class="' . $classes . '" ><img', $content);
  }
  return $content;
}
add_filter('the_content','give_linked_images_class');
function replace_text_wps($text){
    $replace = array(
    // 'WORD TO REPLACE' => 'REPLACE WORD WITH THIS'
    'Катерина Щербакова' => '<a href="mailto:kateryna.shcherbakova@donntu.edu.ua">Катерина Щербакова</a>',
   '<b>Катерина Щербакова,</b><b><br> </b><b>фахівець редакційно-видавничого відділу</b>' => '<a href="mailto:kateryna.shcherbakova@donntu.edu.ua">Катерина Щербакова,<br> фахівець редакційно-видавничого відділу</a>' ,
	'МЕХТ' =>'<a href="http://mext.donntu.edu.ua">МЕХТ</a>',
	'КІТАЕР' =>'<a href="https://donntu.edu.ua/kitaer">КІТАЕР</a>',
	'КІТА' =>'<a href="https://donntu.edu.ua/kitaer">КІТА</a>',
	'КНТ' =>'<a href="https://donntu.edu.ua/kitaer">КНТ</a>',
	'економіки та менеджменту1' =>'<a href="https://donntu.edu.ua/fem">економіки та менеджменту</a>',
	'інформаційно-обчислювального центру' =>'<a href="https://donntu.edu.ua/pidrozdily/it">інформаційно-обчислювального центру</a>',
			'Англійська мова і література' =>'<a href="/specialty/serednya-osvita-mova-i-literatura-anglijska" target="_blank">Англійська мова і література</a>',
					
						'Соціологія' =>'<a href="/specialty/sociologiya" target="_blank">Соціологія</a>',
						'Облік і оподаткування' =>'<a href="/specialty/oblik-i-opodatkuvannya" target="_blank">Облік і оподаткування</a>',
						'Фінанси, банківська справа та страхування' =>'<a href="/specialty/finansi-bankivska-sprava-ta-straxuvannya" target="_blank">Фінанси, банківська справа та страхування</a>',
						'Менеджмент' =>'<a href="/specialty/073-menedzhment" target="_blank">Менеджмент</a>',
						'Маркетинг' =>'<a href="/specialty/marketing" target="_blank">Маркетинг</a>',
						'Економіка підприємства' =>'<a href="/specialty/ekonomika-pidpriyemstva" target="_blank">Економіка підприємства</a>',
						'Право' =>'<a href="/specialty/081-pravo" target="_blank">Право</a>',
						'Екологія' =>'<a href="/specialty/ekologiya" target="_blank">Екологія</a>',
						'Геологія' =>'<a href="/specialty/geologiya" target="_blank">Геологія</a>',
						'Інженерія програмного забезпечення' =>'<a href="/specialty/inzheneriya-programnogo-zabezpechennya" target="_blank">Інженерія програмного забезпечення</a>',
						'Комп’ютерні науки' =>'<a href="/specialty/kompyuterni-nauki" target="_blank">Комп’ютерні науки</a>',
 'Комп’ютерна інженерія' =>'<a href="/specialty/kompyuterna-inzheneriya" target="_blank">Комп’ютерна інженерія</a>',
     'Кібербезпека' =>'<a href="/specialty/kiberbezpeka" target="_blank">Кібербезпека</a>',
                        'Роботомеханічні системи та комплекси' =>'<a href="/specialty/131-robotomexanichni-sistemi-ta-kompleksi" target="_blank">Роботомеханічні системи та комплекси</a>',
                        				'Гірничі машини та комплекси' =>'<a href="/specialty/133-galuzeve-mashinobuduvannyagirnichi-mashini-ta-kompleksi" target="_blank">Гірничі машини та комплекси</a>',
                        					'Обладнання харчових, переробних та хімічних виробництв' =>'<a href="/specialty/proektuvannya-ta-ekspluataciya-girnichix-mashin-kompleksiv" target="_blank">Обладнання харчових,переробних та хімічних виробництв</a>',
                        					'Електроенергетика, електротехніка та електромеханіка' =>'<a href="/specialty/141-elektroenergetika-elektrotexnika-ta-elektromexanika" target="_blank">Електроенергетика, електротехніка та електромеханіка</a>',
                     	'Електромеханічні системи геотехнічних виробництв' =>'<a href="/specialty/141-elektroenergetika-elektrotexnika-ta-elektromexanika-elektromexanichni-sistemi-geotexnichnix-virobnictv" target="_blank">Електромеханічні системи геотехнічних виробництв</a>',
						'Теплоенергетіка' =>'<a href="/specialty/144-teploenergetika" target="_blank">Теплоенергетіка</a>'  , 
						'Системна інженерія' =>'<a href="/specialty/sistemna-inzheneriya" target="_blank">Системна інженерія</a>',
						'Комп’ютерні інформаційно-вимірювальні технології' =>'<a href="/specialty/metrologiya-ta-informacijno-vimiryuvalna-texnika" target="_blank">Комп’ютерні інформаційно-вимірювальні технології</a>',
                        					
						'Хімічні технології та інженерія' =>'<a href="/specialty/ximichni-texnologii-ta-inzheneriya" target="_blank">Хімічні технології та інженерія</a>',
                        					
						'Електронні пристрої та системи' =>'<a href="/specialty/elektronika" target="_blank">Електронні пристрої та системи</a>',
                        					
						'Інформаційні та телекомунікаційні мережі' =>'<a href="/specialty/telekomunikaciі-ta-radiotexnika" target="_blank">Інформаційні та телекомунікаційні мережі</a>',
                        						
						'Технології захисту навколишнього середовища' =>'<a href="/specialty/texnologi%d1%97-zaxistu-navkolishnogo-seredovishha" target="_blank">Технології захисту навколишнього середовища</a>',
 						'Гірництво' =>'<a href="/specialty/girnictvo" target="_blank">Гірництво</a>',
                       'Геодезія та землеустрій' =>'<a href="/specialty/geodeziya-ta-zemleustrij" target="_blank">Геодезія та землеустрій</a>',
                       	'Цивільна безпека' =>'<a href="/specialty/civilna-bezpeka" target="_blank">Цивільна безпека</a>',
							'Економіка&nbsp;</td>' =>'<a href="/specialty/ekonomika" target="_blank">Економіка</a></td>',
 						'Адміністративний менеджмент' =>'<a href="/specialty/administrativnij-menedzhment" target="_blank">Адміністративний менеджмент</a>',
						'<a href="/specialty/ekonomika-pidpriyemstva" target="_blank"></a><a href="/specialty/ekonomika" target="_blank">Економіка</a> підприємства'=>'<a href="/specialty/ekonomika-pidpriyemstva" target="_blank">Економіка підприємства</a>'
	
	
	
     );
	 if( !is_page( 'licenziya' ) and !is_page( 'accreditation' ) ){
	 $text = str_replace(array_keys($replace), $replace, $text);
}
   
    return $text;
} 
add_filter('the_content', 'replace_text_wps');
add_filter('the_excerpt', 'replace_text_wps');
remove_filter('the_title', 'replace_text_wps');
function cwc_mail_shortcode( $atts , $content=null ) {
	$encodedmail = '';
	for ($i = 0; $i < strlen($content); $i++) $encodedmail .= "&#" . ord($content[$i]) . ';';
	return '<a href="mailto:'.$encodedmail.'">'.$encodedmail.'</a>';
}
add_shortcode('mailto', 'cwc_mail_shortcode');

/*****************************************************************************************************************************************************************************************************************************/
require( get_template_directory() . '/functions-calc.php' );
/******************************Конец специальность*************************/




function post_tag_for_pages(){
	register_taxonomy_for_object_type( 'post_tag', 'page');
} 
add_action( 'init', 'post_tag_for_pages' );
/*Проверяем наличие родительской страницы*/
function is_subpage() {
    global $post;
    if (is_page() && $post->post_parent) {
        return $post->post_parent;
    } else {
        return false;
    }
}
/*Делаем правильный canonical на пагинации с плагином WordPress Seo (by Yoast)*/
function return_canon () {
$canon_page = get_pagenum_link(0);
return $canon_page;
}

function canon_paged() {
if (is_paged()) {
add_filter( 'wpseo_canonical', 'return_canon' );
}
}
add_filter('wpseo_head','canon_paged');
/*Подключаем стили для конференции ГФ*/




/*add_filter( 'wp_list_pages', 'My_custom_menu_item', 10, 2 );
function My_custom_menu_item ( $items, $args ) {
	$parent=par_per();
     if ( is_page('31989') or $parent==31989)  {
        $items .= '<li class="page_item page-item-31989" style="order:-1"><a href="https://donntu.edu.ua/conference_gf">Головна</a></li>';
    }
    return $items;
}*/
// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Страница конференции', 'extra_fields_box_func', 'page', 'normal', 'high'  );
}
// код блока
function extra_fields_box_func( $post )
{?>
	
	<p>Факультет</p>
<?$true_args = array('post_type' => 'pidrozdily', 'post_parent'=>0,'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC','tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'pidrozdil',
				'terms' => 'Інститути та факультети',
				'field' => 'name'
			)
		) );
			
				$loop = new WP_Query( $true_args  );
	//print_r($loop);			
				if ( $loop->have_posts() ) :
				$i=1;
				?>
				<p><select name="extra[select_faculty]">
			<?php $sel_v = get_post_meta($post->ID, 'select_faculty', 1); ?>
			<option value="0">----</option>
			<?

//$value1=trim( get_post_meta( $post_id, 'pidrozdil', true));
while ( $loop->have_posts() ) : $loop->the_post(); 
//echo $loop->the_post();
$post_id = get_the_ID();
$small_title=trim( get_post_meta( $post_id, 'small_title', true));
 $selectOb = get_post_custom_values('select_ob', $post->ID)[0];
$terms = get_the_terms( $post->ID, 'pidrozdil' );
if( $terms ){	$term = array_shift( $terms );	// теперь можно можно вывести название термина //echo $term->term_id;
}?>


			<option value="<?echo $i?>" <?php selected( $sel_v, $i )?> >
				<?if(!empty($small_title)):?>
				<p>	<?php echo $small_title;?></p>
				<?else:?>
				<p>	<?echo  the_title();?></p>
				<?endif;?>
			</option>	
<?php ++$i;  endwhile;?></select> </p><? endif; wp_reset_postdata();?> 
				
	
	
	
	
	
<p>Тип конференции</p>
	<p><select name="extra[select]">
			<?php $sel_v = get_post_meta($post->ID, 'select', 1); ?>
			<option value="0">----</option>
			<option value="1" <?php selected( $sel_v, '1' )?> >Міжнародна науково-практична конференція </option>
			<option value="2" <?php selected( $sel_v, '2' )?> >Всеукраїнська науково-практична конференція ( з міжнародною участю)</option>
			<option value="3" <?php selected( $sel_v, '3' )?> >Міжнародна науково-технічна інтернет-конференція</option>
			<option value="4" <?php selected( $sel_v, '4' )?> >Всеукраїнська студентська науково-практична конференція </option>
			<option value="5" <?php selected( $sel_v, '5' )?> >Всеукраїнська (з міжнародною участю) наукова конференція студентів та молодих вчених</option>
			<option value="6" <?php selected( $sel_v, '6' )?> >Всеукраїнська науково-технічна конференція молодих учених, аспірантів і студентів</option>
		</select> </p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action( 'save_post', 'my_extra_fields_update', 0 );

## Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
	// базовая проверка
	if (
		   empty( $_POST['extra'] )
		|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key => $value ){
		if( empty($value) ){
			delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
	}

	return $post_id;
}

function par_per($classes) {
    global $wpdb, $post;
    if (is_page()) {
        if ($post->post_parent)  {
            $ancestors=get_post_ancestors($post->ID);
            $root=count($ancestors)-1;
            $parent = $ancestors[$root];
        } else {
            $parent = $post->ID;
        }
       // $classes[] = 'top-level-parent-pageid-' . $parent;
    }
    return $parent;
}


	
	function register_styles_gf()
	{	
//$parent=par_per();
global $wpdb, $post;
    if (is_page()) {
        if ($post->post_parent)  {
            $ancestors=get_post_ancestors($post->ID);
            $root=count($ancestors)-1;
            $parent = $ancestors[$root];
        } else {
            $parent = $post->ID;
        }
       // $classes[] = 'top-level-parent-pageid-' . $parent;
    }
	
	//echo $parent;

/*	if ( is_page('31989') or $parent==31989) 
{
	wp_register_style( 'conf_gf_style', get_template_directory_uri().'/conf_gf/style.css' );
	wp_enqueue_style( 'conf_gf_style' );
	wp_register_style( 'conf_dn_style', get_template_directory_uri().'/new-format.css' );
	wp_enqueue_style( 'conf_dn_style' );
	}*/
	}
	add_action( 'wp_enqueue_scripts', 'register_styles_gf' );
	function my_breadcrumb_my() 
	{
		echo '<div xmlns:v="http://rdf.data-vocabulary.org/#">
		<div class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="/" itemprop="url">
		<span itemprop="title">Головна</span></a>&nbsp;»&nbsp;</div>
		<div class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';

		$categories = get_the_category();
		if($categories[0]){
		echo '<a href="' . get_category_link($categories[0]->term_id ) . '" itemprop="url">
		<span itemprop="title">'. $categories[0]->name . '</span></a>&nbsp;»&nbsp;';
		}
		echo '</div>
		<div class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title">';

		$post_id = get_the_ID(); //echo $post_id;
		$ancestors = get_ancestors( $post_id, 'page' );
		//print_r ($ancestors);
		//echo $ancestors[0]."&nbsp;»&nbsp;";

		$parent_title = get_the_title($ancestors[0]);
		//echo $parent_title;

		// Тут определяется title родительской страницы и отправляется в переменную 
		$parent_link = get_permalink($ancestors[0]); // Тут определяется URL ссылки на родительскую страницу 
		$title = get_the_title(); // Тут отправляется в переменную title текущей страницы 

		// Здесь задается условие, если названия предыдущей и текущей старниц одинаковые, то ничего не выводится, если разные - выводится название родительской 
		if ($parent_title != $title){ 
		echo "<a href=".$parent_link.">".$parent_title."</a>&nbsp;»&nbsp;"; 
		//echo  // тут выводится URL ссылки на родительскую страницу 
		echo the_title();

		} 
		else{ echo the_title(); }
		echo '</span></div>
		</div>';
	}

/*Подключаем стили для конференции ГФ*/

/*Шорткод для зарегистрированных пользователей*/

function true_logged_in_user_content( $atts, $content = null ) {
	if ( is_user_logged_in() && !is_null( $content ) && !is_feed() ) {
		return $content;
	}
	return ''; // тут в кавычках можете написать сообщение об ошибке, отображающееся для пользователей, у которых нет доступа, можно использовать HTML.
}
/*Шорткод для зарегистрированных пользователей*/
 
add_shortcode( 'member', 'true_logged_in_user_content' );

/*Подгрузка новостей*/
/*add_shortcode( 'member', 'true_logged_in_user_content' );
function true_loadmore_scripts() {
	wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
} 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );
*/

/*Подгрузка новостей*/

## Добавляем блоки в основную колонку на страницах постов и пост. страниц
add_action('add_meta_boxes', 'podii_meta_box');
function podii_meta_box(){
	$screens = array( 'post', 'page' );
	add_meta_box( 'podii_meta_box', 'Дати події', 'podii_meta_box_callback', $screens, 'side','high' );
}

$podii_meta_fields = array(
array(
 'label' => 'Початок подіі',
	'name'       => 'podia-start',
	'id'         => 'podia-start',
	'type'       => 'date',
	

	// Опции Date picker: http://api.jqueryui.com/datepicker
	'js_options' => array(
		'dateFormat'      => 'yy-mm-dd',
		'showButtonPanel' => true,
	),

	'inline' => true, // сразу показать календарь?
	'timestamp' => false, // сохранять значение как timestamp
),
array(
 'label' => 'Кінець подіі',
	'name'       => 'podia-end',
	'id'         => 'podia-end',
	'type'       => 'date',

	// Опции Date picker: http://api.jqueryui.com/datepicker
	'js_options' => array(
		'dateFormat'      => 'yy-mm-dd',
		'showButtonPanel' => false,
	),

	'inline' => true, // сразу показать календарь?
	'timestamp' => false, // сохранять значение как timestamp
)
);








// HTML код блока
function podii_meta_box_callback(  ){
	

	
	 global $podii_meta_fields; // Обозначим наш массив с полями глобальным
    //print_r($specialty_meta_fields);
    global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
    // Выводим скрытый input, для верификации. Безопасность прежде всего!
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';
    foreach ($podii_meta_fields as $field) {
        // Получаем значение если оно есть для этого поля
        $meta = get_post_meta($post->ID, $field['id'], true);
        // Начинаем выводить таблицу
        echo '
        <tr>
            <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>
            <td>';
        switch ($field['type']) {
			  case 'date':
                echo '
               <input type="date" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="100" />
            <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
               // echo $meta;
                break;
               
            }
   
    echo '</td></tr>';
}
echo '</table>';
}

## Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'podii_save_postdata' );
function podii_save_postdata( $post_id ) {
	 global $podii_meta_fields;
	// print_r ($podii_meta_fields);
	 
	 
    // проверяем наш проверочный код
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // Проверяем авто-сохранение
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // Проверяем права доступа  
    if ('post' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Если все отлично, прогоняем массив через foreach
    foreach ($podii_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];

        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }
    } // end foreach 
	
}

##Структура факультета шорткода
add_shortcode('struct', 'struct_faculty');
function struct_faculty($out)
{$out = '';
	$post_id= get_the_ID();
	$short_name = get_post_meta($post_id, 'short_name', true);  //echo $short_name;	
	$true_args = array('post_type' => 'pidrozdily','posts_per_page' => -1, 'order'=>'ASC',  'meta_key' => 'small_title', 'meta_value' => $short_name, 'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'pidrozdil',
				'terms' => 'Інститути та факультети',
				'field' => 'name'
			)			
		), 'order'   => 'DESC');
		
		$loop = new WP_Query( $true_args  );
if ( $loop->have_posts() ) : 
 while ( $loop->have_posts() ) : $loop->the_post();
$parent_id = get_the_ID();// echo $parent_id;
//print_r($ancestors = get_ancestors( $parent_id, 'page' ));
 
	$doch = new WP_Query( 'post_parent='.$parent_id.'&post_type=pidrozdily');
	
	if ( $doch->have_posts() ) : echo"<ul>";  while ( $doch->have_posts() ) : $doch->the_post();
//	echo $doch->post->post_parent." ";
	$post_id = get_the_ID();
		$pib=trim( get_post_meta( $post_id, 'pib', true));
		$posada=trim( get_post_meta( $post_id, 'posada', true));
		$stupin=trim( get_post_meta( $post_id, 'stupin', true));
		$site_donntu=trim( get_post_meta( $post_id, 'site_donntu', true));
		 $selectOb = get_post_custom_values('select_ob', $post->ID)[0];
		if(!empty($site_donntu)): $link= $site_donntu; else: $link=get_the_permalink(); endif;						
		 
		$out.= '<li><b><a href="' . $link . '" title="' . get_the_title() . '">' . get_the_title() . '</a></b>;&nbsp;&nbsp;'.$posada.' - '.$stupin.'&nbsp;'.$pib.'</li>';
	

endwhile;?><? endif; echo"</ul>"; wp_reset_postdata();

endwhile; endif; wp_reset_postdata();
return $out;
}

##Структура факультета шорткода
add_shortcode('struct1', 'struct_faculty1');
function struct_faculty1($out)
{$out = '';
	$post_id= get_the_ID();
	echo $post_id;
	$short_name = get_post_meta($post_id, 'short_name', true);  //echo $short_name;	
	$true_args = array('post_type' => 'pidrozdily','posts_per_page' => -1, 'order'=>'ASC', 'post_parent'=>36429,  'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'pidrozdil',
				'terms' => 'Інститути та факультети',
				'field' => 'name'
			)			
		), 'order'   => 'DESC');
		
		$loop = new WP_Query( $true_args  );
		//print_r($loop);
if ( $loop->have_posts() ) : 
 while ( $loop->have_posts() ) : $loop->the_post();
the_title(); 
	



endwhile; endif; wp_reset_postdata();
return $out;
}

##Админ факультета шорткода
add_shortcode('admin', 'admin_faculty');
function admin_faculty($out)
{$out = '';
	$post_id= get_the_ID();
	$short_name = get_post_meta($post_id, 'short_name', true);  //echo $short_name;	
	$true_args = array('post_type' => 'pidrozdily','posts_per_page' => -1, 'order'=>'ASC',  'meta_key' => 'small_title', 'meta_value' => $short_name, 'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'pidrozdil',
				'terms' => 'Інститути та факультети',
				'field' => 'name'
			)			
		), 'order'   => 'DESC');
		
		$loop = new WP_Query( $true_args  );
if ( $loop->have_posts() ) : 
 while ( $loop->have_posts() ) : $loop->the_post();
/*$parent_id = get_the_ID();// echo $parent_id;
//print_r($ancestors = get_ancestors( $parent_id, 'page' ));
 
	$doch = new WP_Query( 'post_parent='.$parent_id.'&post_type=pidrozdily');*/
	
/*	if ( $doch->have_posts() ) : while ( $doch->have_posts() ) : $doch->the_post();*/
//	echo $doch->post->post_parent." ";
	$post_id = get_the_ID();
	
		$pib=trim( get_post_meta( $post_id, 'pib', true));
		$posada=trim( get_post_meta( $post_id, 'posada', true));
		$stupin=trim( get_post_meta( $post_id, 'stupin', true));
		$zam1=trim( get_post_meta( $post_id, 'zam1', true));
		$stupinz1=trim( get_post_meta( $post_id, 'stupinz1', true));
		$zam2=trim( get_post_meta( $post_id, 'zam2', true));
		$stupinz2=trim( get_post_meta( $post_id, 'stupinz2', true));
			
		 
		$out.= '<div>'.$posada.' - '.$stupin.'&nbsp;'.$pib.'</li><li>'.$stupinz1.'&nbsp;'.$zam1.'</li><li>'.$posadaz2.' - '.$stupinz2.'&nbsp;'.$zam2.'</li>';
	

/*endwhile;*/?><? /*endif;  wp_reset_postdata();*/

endwhile; endif; wp_reset_postdata();
return $out;
}

#Лабораторія факультета шорткода
add_shortcode('laboratoria', 'laboratoria_faculty');
function laboratoria_faculty($out)
{$out = '';
	$post_id= get_the_ID();
	$post_obj = get_queried_object();
	$short_name = get_post_meta($post_id, 'short_name', true);  //echo $short_name;	
	 

 if (get_bloginfo('language')=='uk'){ $post_slug = $post_obj->post_name.'-uk'; 	}else{ $post_slug = $post_obj->post_name; }
 //$query = new WP_query(array( 'post_parent'=>$post_id) ); 
 $query = new WP_query(array( 'post_parent'=>$post_id,'posts_per_page'=>'12','post_type'=>'page','tag'=>'laboratoriya') );

 //print_r( $query);
 
 ?> 
		<?php if ($query->have_posts()): 
		//if ( has_post_thumbnail()): $imag='"<a href="'.the_permalink().'">"'.the_post_thumbnail('middle').'"></a>"';endif;
		
	 while ($query->have_posts()): $query->the_post(); ?>
			
	
		<?	
		
		$out.= '<li style="display:block;overflow:hidden;"><div style="float:left">'.get_the_post_thumbnail( $id, "thumbnail", array("class" => "alignleft") ).'</div><b><a href="'.get_the_permalink().'" title="'. get_the_title().'">'. get_the_title().'</a></b></li>';
			
		
		//$out.= '<li><div style="float:left">'.the_post_thumbnail().'</div><b><a href="'.get_the_permalink().'" title="'. get_the_title().'">'. get_the_title().'</a></b></li>';
			
			 endwhile; ?>	
				
			<?php else: $out.="Шукаємо інформацію по лабораторіі"; endif; wp_reset_query();return $out; ?>


<?}?>
<?function wpschool_RSS_thumbnails( $content ) {
    global $post;
    /*if ( has_post_thumbnail( $post->ID ) ){
        $content =  get_the_post_thumbnail( $post->ID, 'full', array( 'style' => 'margin-bottom: 15px;' ) ).''.$content;*/
		////////////////////
	
	if(has_post_thumbnail($post->ID)){
		$thumb = get_the_post_thumbnail( $post->ID, 'full' );
		$content = preg_replace("/<img[^>]+\>/i", "", $content);
		$content = $thumb . $content;
	}
	

		//////////////////////////
		
  //  }
    //return $content;
	return mb_convert_encoding($content, 'utf-8', mb_detect_encoding($content));
}

add_filter( 'the_excerpt_rss', 'wpschool_RSS_thumbnails' );
add_filter( 'the_content_feed', 'wpschool_RSS_thumbnails' );
/*Удалить блоки комментирования отовсюду*/
add_action( 'add_meta_boxes' , 'remove_page_fields', 99 );
function remove_page_fields() {
	remove_meta_box( 'commentstatusdiv', array('post', 'page', 'pidrozdily', 'specialty') , 'normal' ); // removes comments status
	remove_meta_box( 'commentsdiv',      array('post', 'page', 'pidrozdily', 'specialty') , 'normal' ); // removes comments
	//remove_meta_box( 'authordiv',        'page' , 'normal' ); // removes author
}

add_shortcode( 'list-posts-main', 'main_post_listing_parameters_shortcode' );
function main_post_listing_parameters_shortcode( $atts ) {
    ob_start();
   global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   extract( shortcode_atts( array (
        'type' => 'post',
		'cat_id'=>'',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'styl' => '',
        'fabric' => '',
        'category' => '',
		'link_test'=>'',
		'tag'=>'',
		'category__not_in'=>'',
		'offset'=>'',
		'tag__not_in'=>'',
		
		
    ), $atts ) );  
    // define query parameters based on attributes
    $options = array(
	'paged' => $paged,
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'styl' => $styl,
        'fabric' => $fabric,
        'category_name' => $category,
		'link_test'=>$link_test,
		'cat'=>$cat_id,
		'tag'=>$tag,
		'offset'=>$offset,
		'category__not_in'=>array($category__not_in),
		'tag__not_in'=>array($tag__not_in)
		
    );
    $query = new WP_Query( $options );
	 
    // run the loop based on the query
	if ( $query->have_posts() ) { 
		
     while ( $query->have_posts() ) : $query->the_post(); ?>           
     
	<li class="granti-na-glavnoi"><a href="<?php the_permalink();?>"> <div class="im-granti"><? the_post_thumbnail('medium');?></div><? the_title(); ?> </a></li>
						

		   <?php endwhile;  ?>
		   
        <?    wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
	
}

add_shortcode( 'plitka-main', 'main_plitka_parameters_shortcode' );
function main_plitka_parameters_shortcode( $atts ) {
    ob_start();
   global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   extract( shortcode_atts( array (
        'type' => 'post',
		'cat_id'=>'',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'styl' => '',
        'zagolovok' => '',
        'category' => '',
		'link_test'=>'',
		'tag'=>'',
		'category__not_in'=>'',
		'offset'=>'',
		'tag__not_in'=>'',
		
		
    ), $atts ) );  
    // define query parameters based on attributes
    $options = array(
	'paged' => $paged,
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'styl' => $styl,
        'zagolovok' => $zagolovok,
        'category_name' => $category,
		'link_test'=>$link_test,
		'cat'=>$cat_id,
		'tag'=>$tag,
		'offset'=>$offset,
		'category__not_in'=>array($category__not_in),
		'tag__not_in'=>array($tag__not_in)
		
    );
    $query = new WP_Query( $options );
	 
    // run the loop based on the query
	if ( $query->have_posts() ) { 
		
     while ( $query->have_posts() ) : $query->the_post(); ?>           
     
<div class="details1"><p><?if (isset($zagolovok)): echo $zagolovok; endif;?></p></div>
			<figure class="foto-post-politeh image-container my-post-politeh right small-post" />
			<a href="<?php the_permalink();?>" title="<?if (isset($zagolovok)): echo $zagolovok; endif;?>"/>
			<? the_post_thumbnail('middle'); ?>
			</a>
			<figcaption class="background-maroon-transparent">
			<div class="title-news"><h3 class="sans"><?php the_title(); ?></h3></div>
			<div class="details"><p><?if (isset($zagolovok)): echo $zagolovok; endif;?></p></div>
			<a aria-label="Детальніше" class="border-button border-button-white" href="<?php the_permalink();?>" title="Детальніше"><? echo $link_test;?></a>
			</figcaption>
			</figure>				

		   <?php endwhile;  ?>
		   
        <?    wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
	 
}


add_shortcode( 'podii_skoro', 'podii_skoro_parameters_shortcode' );
function podii_skoro_parameters_shortcode( $atts ) {
    ob_start();
   global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   extract( shortcode_atts( array (
        'type' => 'post',
		'cat_id'=>'',
        'posts' => -1,
        'styl' => '',
        'zagolovok' => '',
        'category' => '',
		'link_test'=>'',
		'tag'=>'',
		'category__not_in'=>'',
		'offset'=>'',
		'tag__not_in'=>'',
		
		
    ), $atts ) );  
    // define query parameters based on attributes
    $options = array(
	'paged' => $paged,
        'post_type' => $type,
         'order' 		=> 'ASC',
    'orderby' 		=> 'meta_value', // сортировка по значению мета-поля
'meta_key' => 'podia-start',
'meta_type'=>'DATE',
        'posts_per_page' => $posts,
        'styl' => $styl,
        'zagolovok' => $zagolovok,
        'category_name' => $category,
		'link_test'=>$link_test,
		'cat'=>$cat_id,
		'tag'=>$tag,
		'offset'=>$offset,
		'category__not_in'=>array($category__not_in),
		'tag__not_in'=>array($tag__not_in)
		
    );
   $dateq = new WP_Query( $options );
	 
    // run the loop based on the query
	if ( $dateq->have_posts() ) { ?>
	<ul id="carousel" class="owl-carousel afisha carousel owl-theme">
		
   <?  while ( $dateq->have_posts() ) : $dateq->the_post(); ?>           
     
<?$title= get_post_custom_values('title'); $title2= get_post_custom_values('title2');?>
					
<li><span class="title-podii"><a href="<?php the_permalink(); ?>"><?php if ($title[0]!="") {echo $title[0];} else  the_title();?></a></span>
 <?php $podia_start=get_post_custom_values('podia-start'); $podia_end=get_post_custom_values('podia-end'); $podia= get_post_custom_values('data_podii'); $podia2= get_post_custom_values('data_podii2');

if ($podia_start[0]==$podia_end[0] or $podia_end[0]=="")
{
echo'<span class="data-podii">'. date_i18n(('d M'), strtotime($podia_start[0])).'</span>';
}
elseif($podia_end[0]==""){$podia_end[0]=$podia_start[0];}
else echo'<span class="data-podii" style="font-size:95%">'. date_i18n(("d M"), strtotime($podia_start[0])).'<br>-<br>'.date_i18n(("d M"), strtotime($podia_end[0])).'</span>';

?>
</li>			

		   <?php endwhile;  ?>
		   </ul>
        <?    wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
	 
}

/***/

add_shortcode( 'last_news', 'last_news_parameters_shortcode' );
function last_news_parameters_shortcode( $atts ) {
    ob_start();
   global $paged;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   extract( shortcode_atts( array (
        'type' => 'post',
		'cat_id'=>'',
        'posts' => -1,       		
    ), $atts ) );  
    // define query parameters based on attributes
    $options = array(
	
        'post_type' => $type,
         'order' 		=> 'desk',
  //  'orderby' 		=> 'post__in', // сортировка по значению мета-поля
        'cat' => 540,
		
      
      'posts_per_page'=>3,
        	
    );
   $dateq = new WP_Query( $options );
	 
    // run the loop based on the query
	if ( $dateq->have_posts() ) { ?>
	
		
   <?  while ( $dateq->have_posts() ) : $dateq->the_post(); ?>           
     
<?if ( has_post_thumbnail() ) {?>
<article class="my-post">
<a href="<?php the_permalink();?>">
<div class="foto-post" style="background:url(<? the_post_thumbnail_url('medium'); ?>);">
<span class="overlay"></span>
</div>
<?//the_post_thumbnail('spec_thumb'); ?><?// the_post_thumbnail_url(); ?>
<div class="title-news"><h3><?php the_title(); ?></h3></div>
</a>
</article>
<?} else {?>
<article class="my-post">
<a href="<?php the_permalink();?>">
<div class=""><h3 style="border-bottom:none; margin:20px 10px"><?php the_title(); ?></h3></div>

<div class="m_info">
<span style="color:#333; font-size:1rem">&nbsp;&nbsp; Категорія:
<?$category = get_the_category(); ?><?php echo $category[0]->cat_name;?></span>		</div>
</a></article>	
<?php }endwhile;  ?>		 
<?    wp_reset_postdata(); ?>
<?php $myvariable = ob_get_clean();
    return $myvariable;
    } 
}


/**/
?>
