<!DOCTYPE html>
<!--
  Name: Snow - Minimal & Clean Portfolio HTML Template
  Version: 1.0.1
  Author: nK, unvab
  Website: https://nkdev.info, http://unvab.com/
  Purchase: https://nkdev.info
  Support: https://nk.ticksy.com
  License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
  Copyright 2017.
-->

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(); ?></title>
		
    <link rel="icon" type="image/png" href="<?php echo ASSETS_URL; ?>/assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?>

</head>

<body>

	<?php get_template_part('elements/site-header'); ?>
	
	<div class="nk-main">