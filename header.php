<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><? bloginfo('name'); ?><? if ( is_single() ) { ?> » <? } ?><? wp_title(); ?></title>
<meta name="generator" content="WordPress <? bloginfo('version'); ?>" />
<meta http-equiv="content-type" content="<? bloginfo('html_type'); ?>; charset=<? bloginfo('charset'); ?>" />
<meta name="author" content="<? bloginfo('admin_email'); ?>" />
<meta name="description" content="<? bloginfo('description'); ?>" />
<meta name="robots" content="follow" />
<link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<? bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<? bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<? bloginfo('pingback_url'); ?>" />
</head>
<body>

<div id="wrapper">

	<!-- Rightcorner Menu -->
    <div id="headerMenu">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
    </div>
    <!-- End Rightcorner Menu -->
    <!-- Box with Blog Title -->
    <div id="logoBox">
    	<div id="main"><? bloginfo("name") ?></div>
        <div id="sub"><? bloginfo("description") ?></div>
    </div>
    <!-- End of Box -->
    <!-- Main Navigationbar -->
    <div id="navBar">
      <div id="mainMenu">
      	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>	              
      </div> 
   	  <div id="search">
        	<form>
        	  <input type="text" name="search" id="searchfield">
       	  </form>
        </div>
    </div>
    <!-- End of Main Navigation -->