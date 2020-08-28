<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php if ( is_home() ) { ?>网站首页-<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_tag() ) { ?><?php single_tag_title(); ?><? $paged = get_query_var('paged'); if ( $paged > 1 ) printf('_ %s ',$paged); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo ' _ '; echo get_query_var('page');}?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_category() ) { single_cat_title(); echo " - "; bloginfo('name'); $paged = get_query_var('paged'); if ( $paged > 1 ) printf('_ %s ',$paged);} ?>
<?php if ( is_single() ) { ?><?php echo trim(wp_title('',0)); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_author() ) { ?>文章列表<?php } ?>
<?php if ( is_month() || is_day() ) { ?><?php the_time('Y - F'); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if (is_search() ) {?>"<?php echo $s; ?>" - <?php bloginfo('name'); ?><?php } ?>
<?php if (is_404() ) {?>"404" - <?php bloginfo('name'); ?><?php } ?>
</title>
<?php if ( is_home() ) { ?>
<meta name="description" content="网站首页描述 "/>
<meta name="keywords" content="网站首页关键词" />
<?php } ?>
<?php if ( is_single() ) { ?>
<meta name="description" content="<?php echo trim(wp_title('',0)); ?>，<?php $des= mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 90,"……"); echo str_replace(array("\r\n", "\r", "\n"), "", $des);?>" />
<meta name="keywords" content="<?php echo trim(wp_title('',0)); ?>" />
<?php } ?>
<?php if ( is_category() ) { ?>
<meta name="description" content="<?php bloginfo('name'); ?><?php single_cat_title(); ?>" />
<meta name="keywords" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if ( is_page() ) { ?>
<meta name="description" content="<?php echo trim(wp_title('',0)); ?>，<?php $des= mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 90,"……"); echo str_replace(array("\r\n", "\r", "\n"), "", $des);?>" />
<meta name="keywords" content="<?php echo trim(wp_title('',0)); ?>" />
<?php } ?>
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>			
		</div>
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" value="enter keywords here..." />
				<input type="submit" id="search-submit" value="GO" />
				</fieldset>
			</form>
		</div>
	</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<?php wp_nav_menu( array( 'container' => '','menu_class' => 'navigation','menu_id' => "nav_sgBhgn",'depth' => 1, ) ); ?>
	</div>