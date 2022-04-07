<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Begin Talk-Me {literal} -->
<script type='text/javascript'>
	(function(d, w, m) {
		window.supportAPIMethod = m;
		var s = d.createElement('script');
		s.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
		s.async = true;
		var id = '102eca49d75c9ec323d90d0dc8250247';
		s.src = '//lcab.talk-me.ru/support/support.js?h='+id;
		var sc = d.getElementsByTagName('script')[0];
		w[m] = w[m] || function() { (w[m].q = w[m].q || []).push(arguments); };
		if (sc) sc.parentNode.insertBefore(s, sc); 
		else d.documentElement.firstChild.appendChild(s);
	})(document, window, 'TalkMe');
</script>
<!-- {/literal} End Talk-Me -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109674824-1"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-109674824-1');
</script>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width">
<meta name="twitter:card" content="summary" />


<?// получаем объект запроса
$qobject = get_queried_object();
// если это элемент таксономии (метка рубрика) и у него нет описания
// выводим закрывающий от индексации метатег
if( isset( $qobject->taxonomy ) && ! term_description( $qobject->term_id, $qobject->taxonomy ) ){
	echo '<meta name="robots" content="noindex,nofollow" />';
}?>
<!--<link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>" type="text/css"  />-->
 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/new-format.css" type="text/css"/> 
  <link rel="stylesheet" href="https://donntu.edu.ua/wp-content/uploads/maxmegamenu/style_uk.css?ver=3e6172" type="text/css"  />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/columns.css" type="text/css"/>
  
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/studrada.css" type="text/css"  />-->
<link rel="stylesheet" type="text/css" media="only screen" href="<?php bloginfo('template_directory'); ?>/media.css"/>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icon.ico" type="image/x-icon">
<?php wp_head(); ?>
<?php wp_admin_bar_render(); ?>
<script type="text/javascript">
(function ($){
	$(document).ready(function(){
                            //  $('.gallery-icon a').fancybox();
							 $('.fancybox').fancybox();
                });
				
	$(document).ready(function() {
    $(".gallery-icon a").fancybox({
        transitionIn: 'elastic',
  transitionOut: 'elastic',
  speedIn: 500,
  speedOut: 500,
  hideOnOverlayClick: false,
  titlePosition: 'over'     
    });
});
	
})(jQuery);
</script>
<script language="JavaScript">
<!--
function daysLeftNewYear()
{ 
 today = new Date()
 //Можно установить любую дату
 nextDate = new Date("May 31, 2021")
 //Количество миллисекунд в одном дне
 msPerDay = 24*60*60*1000;
 //Высчитываем количество дней
 daysLeft = Math.round((nextDate.getTime()
  - today.getTime())/msPerDay);
 dayname=""
 ds=""+daysLeft
  //Вырезаем последнею цифру
 dd=parseInt(ds.substr(ds.length-1))
 //Определяем правильность написания
 if(daysLeft>4&&daysLeft<21)dayname="днів"
 else
  if(dd==1)dayname="день"
  else
   if(dd==2||dd==3||dd==4)dayname="дні"
   else dayname="днів"
 //Выводим надпись в документ
 document.write(daysLeft);
}

//-->
</script>
</head>
<body class="main_body">

<header class="p2 colora" itemscope itemtype="http://schema.org/Organization" >
<div class="col-1" >

	<div class="content-col">
		
	<?php if (get_bloginfo('language')=='uk'){$hr='https://donntu.edu.ua';}else{$hr='https://donntu.edu.ua/';}?>
	
	
	
	
	
	
	<?php if (get_bloginfo('language')=='uk')
{?>
<a href="<?echo $hr;?>" style="text-decoration:none"><div itemprop="logo"  class="logo"></div></a>
<?}elseif(get_bloginfo('language')=='ru-RU'){?>
<div  class="logo-txt"><h1>Донецкий национальный <br> технический университет</h1></div>
	<?}else{?>
	
<?}?>
	
	
	
	
		<?php if (get_bloginfo('language')=='uk')
{?>

<?}elseif(get_bloginfo('language')=='ru-RU'){?>
<div  class="logo-txt"><h1>Донецкий национальный <br> технический университет</h1></div>
	<?}else{?><a href="<?echo $hr;?>" style="text-decoration:none"><div itemprop="logo"  class="logo-en"></div></a>
	
<?}?>	
	</div>

</div>
<div class="col-2">
	<?php if (get_bloginfo('language')=='uk')
{?><div class="head-cont">
	<span class="adress" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <a target="_blank" href="https://www.google.com.ua/maps/place/%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D1%8C%D0%BA%D0%B8%D0%B9+%D0%BD%D0%B0%D1%86%D1%96%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B8%D0%B9+%D1%82%D0%B5%D1%85%D0%BD%D1%96%D1%87%D0%BD%D0%B8%D0%B9+%D1%83%D0%BD%D1%96%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82/@48.2776738,37.1784163,18z/data=!4m5!3m4!1s0x0:0xefa136c9bcd06cba!8m2!3d48.2781651!4d37.178309"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
    85300, Україна, <span itemprop="addressRegion">Донецька область</span>, <span itemprop="addressLocality">м.&nbsp;Покровськ, <span itemprop="streetAddress">пл.&nbsp;Шибанкова</span></span>,&nbsp;2</span></a>
	<span class="mail"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<?php $text_to_be_wrapped_in_shortcode='mail@donntu.edu.ua';
		echo do_shortcode('[mailto]'.$text_to_be_wrapped_in_shortcode.'[/mailto]'); ?></span>
	</div>	
<?}elseif(get_bloginfo('language')=='ru-RU'){?>
<span class="adress" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <a target="_blank" href="https://www.google.com.ua/maps/place/%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D1%8C%D0%BA%D0%B8%D0%B9+%D0%BD%D0%B0%D1%86%D1%96%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B8%D0%B9+%D1%82%D0%B5%D1%85%D0%BD%D1%96%D1%87%D0%BD%D0%B8%D0%B9+%D1%83%D0%BD%D1%96%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82/@48.2776738,37.1784163,18z/data=!4m5!3m4!1s0x0:0xefa136c9bcd06cba!8m2!3d48.2781651!4d37.178309"><i class="fa fa-map-marker" aria-hidden="true"></i>
	85300, Украина, Донецкая область, г. Покровск, пл. Шибанкова, 2</span></a>
	<span class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><?php $text_to_be_wrapped_in_shortcode='mail@donntu.edu.ua';
		echo do_shortcode('[mailto]'.$text_to_be_wrapped_in_shortcode.'[/mailto]'); ?></span>
	<?}else{?>
	<div class="head-cont"><span class="adress" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <a target="_blank" href="https://www.google.com.ua/maps/place/%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D1%8C%D0%BA%D0%B8%D0%B9+%D0%BD%D0%B0%D1%86%D1%96%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B8%D0%B9+%D1%82%D0%B5%D1%85%D0%BD%D1%96%D1%87%D0%BD%D0%B8%D0%B9+%D1%83%D0%BD%D1%96%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82/@48.2776738,37.1784163,18z/data=!4m5!3m4!1s0x0:0xefa136c9bcd06cba!8m2!3d48.2781651!4d37.178309"><i class="fa fa-map-marker" aria-hidden="true"></i>
	2,Shybankova Square, Pokrovsk, Donetsk region, 85300, Ukraine</span></a>
	<span class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><?php $text_to_be_wrapped_in_shortcode='mail@donntu.edu.ua';
		echo do_shortcode('[mailto]'.$text_to_be_wrapped_in_shortcode.'[/mailto]'); ?></span>
		</div>
	<?}?>
	
	<div class="head-soc-cont">	
	<div class="soc1">
	<span class="soccet hidden-print">
<a itemprop="sameAs" href="https://twitter.com/donntu_ua" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a itemprop="sameAs" href="https://www.facebook.com/donntu.edu.ua" target="_blank"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
<a itemprop="sameAs" href="https://www.instagram.com/donntu_ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>	
<a itemprop="sameAs" href="https://wiki.donntu.edu.ua/" target="_blank"><i class="fab fa-wikipedia-w" aria-hidden="true"></i></a>	
<a itemprop="sameAs" href="https://www.youtube.com/channel/UCOGVFCsBO4lWjJL5c6x3bEA?sub_confirmation=1"><i class="fa fa-youtube" aria-hidden="true"></i></a>
	</span>
	<div class="vk"><a href="http://kvp.donntu.edu.ua/">&nbsp;Кафедра військової підготовки</a></div>
	</div>
	<div div class="head-stud"> <a itemprop="sameAs" href="https://donntu.edu.ua/office-365" style="background: #eb3d01;     padding: 3px;"><img src="https://donntu.edu.ua/img/office365.jpg"  style="height:20px; width:auto"></a> <a href="http://89.185.3.253:9900" title="Доступ до електронного кабінету студента"><i class="fas fa-user"></i></a></div>
<div role="navigation" class="title">
			<?php wp_nav_menu( array(  'theme_location' => 'olimpiada','fallback_cb'=> '', 'menu_class'=> 'main_nav' ) ); ?>
</div>

</div>
	
<div id="search-row" class="search-row  hidden-print"><?php if( !is_front_page() ){	get_search_form();} ?></div>
	</div>
	
		<nav role="navigation" id="top_nav"><div class="head-menu menus styl">
			<?php wp_nav_menu( array( 'theme_location' => 'top','fallback_cb'=> '', 'menu_class'=> 'main_nav' ) ); ?>
			</div></nav>	
			<div class="link100" style="position:absolute"><a href="https://100.donntu.edu.ua"><span>Приєднатися до привітань</span></a></div>
	
<div class="clearfix"></div>
	<?//dynamic_sidebar('index-insert');?>
</header>