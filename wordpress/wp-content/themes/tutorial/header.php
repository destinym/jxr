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
  <div class="nav2">
	   <div class= "nav_logo">
	  <img  id ="name1" src="/wp-content/themes/tutorial/images/logo.png"></img>
	   </div>
	   <div class="nav_menu1">
				<span class="m1"><a href="#">首页</a></span>
				<span class="m1"><a href="#">作品案例</a></span>
				<span class="m1"><a href="#">杰理念</a></span>
				<span class="m1"><a href="#">资源平台</a></span>
				<span class="m1"><a href="#">关于杰兴瑞</a></span>
				<span class="m1"><a href="#">招聘</a></span>
				<span class="m1"><a href="#">联系</a></span>

	   </div>
		<div class="nav_menu2">
				<span class="m2"><a href="#">品牌策划</a></span>
				<span class="m2"><a href="#">品牌形象设计</a></span>
				<span class="m2"><a href="#">画册设计</a></span>
				<span class="m2"><a href="#">包装设计</a></span>
				<span class="m2"><a href="#">网站设计</a></span>
		</div>
	</div>
</div>

     

