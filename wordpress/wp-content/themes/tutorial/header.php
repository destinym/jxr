<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">



	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>



	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php //comments_popup_script(); // off by default ?>

	<?php wp_head(); ?>
	<?php if (is_single() || is_page()) {
      $head = get_post_meta($post->ID, 'head', true);
      if (!empty($head)) { ?>
       <?php echo $head; ?>
     <?php }
  } ?>

</head>

<body>

<div class="nav">
	<div class="nav_first">
	</div>
	<div class="nav_second">
	   <div class= "nav_webname_second">
	  <img  id ="name1" src="/wordpress/wp-content/themes/tutorial/images/name1.jpg" height=28 ></img>
	   </div>
	   <div class="nav_second_ul">
			<ul >
				<li><a href="#">首页</a></li>
				<li><a href="#">作品案例</a></li>
				<li><a href="#">杰理念</a></li>
				<li><a href="#">资源平台</a></li>
				<li><a href="#">关于杰兴瑞</a></li>
				<li><a href="#">招聘</a></li>
				<li><a href="#">联系</a></li>
			</ul>
	   </div>
	</div>
	<div class="Clear"></div>
	<div class="nav_third">
		<div class= "nav_webname_third">
			<img id = "name2" src="/wordpress/wp-content/themes/tutorial/images/name2.jpg" height=22  ></img>
		</div>
		<div class="nav_third_ul">
			<ul>
				<li><a href="#">品牌策划</a></li>
				<li><a href="#">品牌形象设计</a></li>
				<li><a href="#">画册设计</a></li>
				<li><a href="#">包装设计</a></li>
				<li><a href="#">网站设计</a></li>
			</ul>
		</div>
	</div>
</div>

     

