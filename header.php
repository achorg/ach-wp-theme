<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="ie iem7" ><![endif]-->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">

<title><?php dynamic_site_title(); ?></title>

<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
<link rel="apple-touch-icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">

<!-- Style sheets -->
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic|Noto+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<!-- Feeds and Pingbacks -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Modernizr and Friends -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/javascripts/modernizr.min.js"></script>
<script>
  Modernizr.load([
    {
      test: Modernizr.mq(),
      nope: ['<?php echo get_stylesheet_directory_uri(); ?>/javascripts/respond.min.js',
      '<?php echo get_stylesheet_directory_uri(); ?>/javascripts/selectivizr.min.js']
    }
  ]);
</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header role="banner">

    <h1 id="site-title">
        <a href="<?php echo get_option('home'); ?>/" title="<?php _e('Home','themename'); ?>">
        <?php bloginfo('name'); ?>
        </a>
    </h1>

<?php if (is_front_page()): ?>
<p class="teaser">
<a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a> is your professional society for the digital humanities! Through our <a href="/activities">activities</a>, <a href="/conferences">conferences</a>, and <a href="/publications">publications</a>, we support computer-assisted research, teaching, and software and content development in humanistic disciplines. <a href="/membership">Join today!</a></p>
<?php endif; ?>

    <nav id="sitenav">
        <?php wp_nav_menu('theme_location=header'); ?>
    </nav>
</header><!--/masthead-->

<div id="content" role="main">
